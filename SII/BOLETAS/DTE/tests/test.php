<?php
require_once __DIR__ . '../../../../../vendor/autoload.php'; // Autoload files using Composer autoload

try{


    $DTE = new \ADICHILE\DTEFACIL\SII\BOLETAS\DTE\DTE();
    $DTE->setDocumento();
    $Documento = $DTE->getDocumento();
    $Documento->setEncabezado();
    $Documento->getEncabezado()->setIdDoc();
    $Documento->getEncabezado()->setIdDoc();
    $Documento->getEncabezado()->getIdDoc()->setTipoDTE("39");
    $Documento->getEncabezado()->getIdDoc()->setFolio("1");
    $Documento->getEncabezado()->getIdDoc()->setFchEmis("2018-09-01");
    $Documento->getEncabezado()->getIdDoc()->setIndServicio("3");

    $Documento->getEncabezado()->setEmisor();
    $Documento->getEncabezado()->getEmisor()->setRUTEmisor("76250838-9");
    $Documento->getEncabezado()->getEmisor()->setRznSocEmisor(mb_substr("ASESORIA DISENO E INGENIERIA SPA", 0, 100));
    $Documento->getEncabezado()->getEmisor()->setDirOrigen("1 NORTE 461 OF 703");
    $Documento->getEncabezado()->getEmisor()->setCmnaOrigen("VINA DEL MAR");
    $Documento->getEncabezado()->getEmisor()->setCiudadOrigen("VINA DEL MAR");
    $Documento->getEncabezado()->getEmisor()->setGiroEmisor("FACTURACION ELECTRONICA");

    $Documento->getEncabezado()->setReceptor();
    $Documento->getEncabezado()->getReceptor()->setRUTRecep("66666666-6");
    $Documento->getEncabezado()->getReceptor()->setRznSocRecep("CLIENTE OCACION");

    $Documento->getEncabezado()->setTotales();
    $Documento->getEncabezado()->getTotales()->setMntTotal("20000");

    $valorMontoExento = 0;
    if($valorMontoExento != NULL && $valorMontoExento != 0){
        $Documento->getEncabezado()->getTotales()->setMntExe($valorMontoExento);
    }


    $pRutEmpresa   = substr ($Documento->getEncabezado()->getEmisor()->getRUTEmisor(),0, -2);
    $IDDTE = "T".$Documento->getEncabezado()->getIdDoc()->getTipoDTE()."_F".$Documento->getEncabezado()->getIdDoc()->getFolio()."_R".$pRutEmpresa;

    $path = __DIR__ . "/archivos/" .$IDDTE . ".xml";

    $obj = new \ADICHILE\DTEFACIL\SII\OBJECT_AND_XML\ObjectAndXML();
    $obj->setStartElement( 2);
    $obj->setId($IDDTE);

    
    /**** REPETIR POR CADA DETALLE ****/
    //Aquí podria estar dentro de un foreach con los datos de detalle
    $detalle = new \ADICHILE\DTEFACIL\SII\BOLETAS\DTE\Detalle();
    //las variables se deben pasar todas como string ejemplo:
    //"".$itemsXML->PrcItem.""

    $detalle->setNroLinDet("1");
    $detalle->setNmbItem("ITEM");
    $detalle->setQtyItem("1");
    //$detalle->setUnmdItem("$itemsXML->UnmdItem");

    $detalle->setCdgItem();
    $detalle->getCdgItem()->setTpoCodigo("INTERNO");
    $detalle->getCdgItem()->setVlrCodigo("CVLS1");

    //$detalle->setDscItem("0");

    $detalle->setPrcItem("20000");
    /*
     * Este campo solo va si es un item exento
     * $detalle->setIndExe("1");
     *
     *
     */
    $detalle->setMontoItem("20000");
    $Documento->setDetalle($detalle);

    /**** REPETIR POR CADA DETALLE ****/

    $timezone = new \DateTimeZone('America/Santiago');
    $date = new \DateTime('', $timezone);
    $fechaTimbre = $date->format('Y-m-d\TH:i:s');
    $Documento->setTmstFirma($fechaTimbre);
    $Documento->setTED();
    $Documento->TED->setDD();
    $Documento->TED->DD->setRE($Documento->getEncabezado()->getEmisor()->getRUTEmisor());
    $Documento->TED->DD->setTD($Documento->getEncabezado()->getIdDoc()->getTipoDTE());
    $Documento->TED->DD->setF($Documento->getEncabezado()->getIdDoc()->getFolio());
    $Documento->TED->DD->setFE($Documento->getEncabezado()->getIdDoc()->getFchEmis());
    $Documento->TED->DD->setRR($Documento->getEncabezado()->getReceptor()->getRUTRecep());
    $Documento->TED->DD->setRSR(mb_substr($Documento->getEncabezado()->getReceptor()->getRznSocRecep(), 0, 40));
    $Documento->TED->DD->setMNT($Documento->getEncabezado()->getTotales()->getMntTotal());
    $Documento->TED->DD->setIT1(mb_substr($Documento->Detalle[0]->getNmbItem(),0,40));
    $Documento->TED->DD->setTSTED($fechaTimbre);
    //utf8_encode_deep($DTE);

    $recordsXML = $obj->objToXML($DTE);

    /********** OBTENER CAF, LLAVES PRIVADA Y PUBLICA DEL CAF **********/
    $LCAFImport = new \DOMDocument();
    $LCAFImport->formatOutput = FALSE;
    $LCAFImport->preserveWhiteSpace = FALSE;

    $marca_folio = 0;
    $path_folio = __DIR__ . "/FoliosSII7850982039120189101921.xml";

    if(!$LCAFImport->load($path_folio)){
        $CAF_ENCODED = utf8_encode(file_get_contents($path_folio));

        if($LCAFImport->loadXML($CAF_ENCODED)){
            $marca_folio = 1;
        }
    }

    $CAF = $LCAFImport->getElementsByTagName("CAF")->item(0);
    $nodecaf = $LCAFImport->getElementsByTagName("CAF")->item(0);
    $priv_key = $LCAFImport->getElementsByTagName("RSASK")->item(0)->nodeValue;
    //$publickey = $LCAFImport->getElementsByTagName("RSAPUBK")->item(0)->nodeValue;
    $CAF = $LCAFImport->saveXML($CAF);
    /********** OBTENER CAF, LLAVES PRIVADA Y PUBLICA DEL CAF **********/
    if($marca_folio == 1){
        $CAF = utf8_decode($CAF);
    }

    $DTE_TIMBRE = new \DOMDocument();
    $DTE_TIMBRE->formatOutput = FALSE;
    $DTE_TIMBRE->preserveWhiteSpace = TRUE;
    $DTE_TIMBRE->load($path);
    $DTE_TIMBRE->encoding = "ISO-8859-1";

    $import = $DTE_TIMBRE->importNode($nodecaf, true);
    $TSTED = $DTE_TIMBRE->getElementsByTagName("TSTED")->item(0);
    $TSTED->parentNode->insertBefore($import, $TSTED);

    $RSR = $DTE_TIMBRE->getElementsByTagName("RSR")->item(0)->nodeValue;
    $RSR = str_replace("&", '&amp;', $RSR);
    $RSR = str_replace("<", '&lt;', $RSR);
    $RSR = str_replace(">", '&gt;', $RSR);
    $ITEM1 = utf8_decode($DTE_TIMBRE->getElementsByTagName("IT1")->item(0)->nodeValue);
    $IT1 = str_replace("&", '&amp;', $ITEM1);
    $IT1 = str_replace("<", '&lt;', $IT1);
    $IT1 = str_replace(">", '&gt;', $IT1);
    $TD = $DTE_TIMBRE->getElementsByTagName("TD")->item(0)->nodeValue;
    $FOLIO = $DTE_TIMBRE->getElementsByTagName("F")->item(0)->nodeValue;
    $RUTEMIS = $DTE_TIMBRE->getElementsByTagName("RE")->item(0)->nodeValue;
    $FECHA = $DTE_TIMBRE->getElementsByTagName("FE")->item(0)->nodeValue;
    $MONTO = $DTE_TIMBRE->getElementsByTagName("MNT")->item(0)->nodeValue;
    $RUTRECE = $DTE_TIMBRE->getElementsByTagName("RR")->item(0)->nodeValue;

    $DD2 = "<DD><RE>".$RUTEMIS."</RE><TD>" .$TD."</TD><F>" .$FOLIO. "</F><FE>". $FECHA ."</FE><RR>" . $RUTRECE .
        "</RR><RSR>" . utf8_decode($RSR) . "</RSR><MNT>" . $MONTO . "</MNT><IT1>" . $IT1 ."</IT1>$CAF<TSTED>".
        $fechaTimbre ."</TSTED></DD>";

    $FRMT = $obj->buildSign($DD2, $priv_key);
    $fragment = $DTE_TIMBRE->createDocumentFragment();
    $fragment->appendXML("<FRMT algoritmo=\"SHA1withRSA\">$FRMT</FRMT>\n");
    $TED = $DTE_TIMBRE->getElementsByTagName("TED")->item(0);
    $TED->appendChild($fragment);


    $xmlTool = new \FR3D\XmlDSig\Adapter\XmlseclibsAdapter();
    $pfx = file_get_contents(__DIR__ . "/certificado.pfx o p12");
    $key = array();
    openssl_pkcs12_read($pfx, $key, "password certificado");
    $xmlTool->setPrivateKey($key["pkey"]);
    $xmlTool->setpublickey($key["cert"]);
    $xmlTool->addTransform(\FR3D\XmlDSig\Adapter\XmlseclibsAdapter::ENVELOPED);
    $xmlTool->sign($DTE_TIMBRE, "DTE");

    $DTE_TIMBRE->save($path);
}  catch (Exception $exc){
    echo $exc->getTraceAsString();
}

?>