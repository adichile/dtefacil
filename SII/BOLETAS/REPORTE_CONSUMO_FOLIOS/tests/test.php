<?php
require_once __DIR__ . '../../../../../vendor/autoload.php'; // Autoload files using Composer autoload

try{

    $ConsumoFolios = new ADICHILE\DTEFACIL\SII\BOLETAS\REPORTE_CONSUMO_FOLIOS\ConsumoFolios();
    $ConsumoFolios->setDocumento();

    $DocumentoConsumoFolios = $ConsumoFolios->getDocumentoConsumoFolios();
    $DocumentoConsumoFolios->setCaratula();
    $DocumentoConsumoFolios->getCaratula()->setRutEmisor("76250838-9");
    $DocumentoConsumoFolios->getCaratula()->setRutEnvia("18161794-2");
    $DocumentoConsumoFolios->getCaratula()->setFchResol("2018-09-01");
    $DocumentoConsumoFolios->getCaratula()->setNroResol("0");
    $DocumentoConsumoFolios->getCaratula()->setFchInicio("2018-09-01");
    $DocumentoConsumoFolios->getCaratula()->setFchFinal("2018-09-01");
    $DocumentoConsumoFolios->getCaratula()->setSecEnvio("1");

    $timezone = new \DateTimeZone('America/Santiago');
    $date = new \DateTime('', $timezone);
    $fechaTimbre = $date->format('Y-m-d\TH:i:s');
    $DocumentoConsumoFolios->getCaratula()->setTmstFirmaEnv($fechaTimbre);



    $i = 0;

    $resumenesAsociados[0] = new stdClass();
    $resumenesAsociados[0]->TipoDocumento = "39";
    $resumenesAsociados[0]->MntNeto = "10000";
    $resumenesAsociados[0]->MntIva = "1900";
    $resumenesAsociados[0]->TasaIVA = "19";
    $resumenesAsociados[0]->MntExento = "0";
    $resumenesAsociados[0]->MntTotal = "11900";
    $resumenesAsociados[0]->FoliosEmitidos = "1";
    $resumenesAsociados[0]->FoliosUtilizados = "1";

    $resumenesAsociados[0]->rangosAsociados[0] = new StdClass();
    $resumenesAsociados[0]->rangosAsociados[0]->Inicial = "1";
    $resumenesAsociados[0]->rangosAsociados[0]->Final = "10";

    foreach($resumenesAsociados as $resumen_folio){
        $DocumentoConsumoFolios->setResumen();
        $DocumentoConsumoFolios->getResumen()[$i]->setTipoDocumento($resumen_folio->TipoDocumento);
        $DocumentoConsumoFolios->getResumen()[$i]->setMntNeto($resumen_folio->MntNeto);
        $DocumentoConsumoFolios->getResumen()[$i]->setMntIva($resumen_folio->MntIva);
        $DocumentoConsumoFolios->getResumen()[$i]->setTasaIVA($resumen_folio->TasaIVA);
        $DocumentoConsumoFolios->getResumen()[$i]->setMntExento($resumen_folio->MntExento);
        $DocumentoConsumoFolios->getResumen()[$i]->setMntTotal($resumen_folio->MntTotal);
        $DocumentoConsumoFolios->getResumen()[$i]->setFoliosEmitidos($resumen_folio->FoliosEmitidos);
        $DocumentoConsumoFolios->getResumen()[$i]->setFoliosAnulados($resumen_folio->FoliosAnulados);
        $DocumentoConsumoFolios->getResumen()[$i]->setFoliosUtilizados($resumen_folio->FoliosUtilizados);

        $a = 0;
        foreach($resumen_folio->rangosAsociados as $rangos_folios){
            $DocumentoConsumoFolios->getResumen()[$i]->setRangoUtilizados();
            $DocumentoConsumoFolios->getResumen()[$i]->getRangoUtilizados()[$a]->setInicial($rangos_folios->Inicial);
            $DocumentoConsumoFolios->getResumen()[$i]->getRangoUtilizados()[$a]->setFinal($rangos_folios->Final);
            $a++;
        }

        $i++;
    }

    $pRutEmpresa  = substr ($ConsumoFolios->getDocumentoConsumoFolios()->getCaratula()->getRutEmisor(), 0, -2);
    $fecha = "2018-09-01";
    $SecEnvio = "1";
    $dcf_id = "RCF_R$pRutEmpresa" . "_F$fecha". "_SEC$SecEnvio";

    $path = __DIR__ . "/" . $dcf_id . ".xml";

    $obj = new \ADICHILE\DTEFACIL\SII\OBJECT_AND_XML\ObjectAndXML($path);

    $obj->setStartElement("ConsumoFolios", 6);
    $obj->setId($dcf_id);
    $recordsXML = $obj->objToXML($ConsumoFolios);

    $CONSUMO_DE_FOLIOS = new \DOMDocument();
    $CONSUMO_DE_FOLIOS->formatOutput = FALSE;
    $CONSUMO_DE_FOLIOS->preserveWhiteSpace = TRUE;
    $CONSUMO_DE_FOLIOS->load($path);
    $CONSUMO_DE_FOLIOS->encoding = "ISO-8859-1";
    $key = array();
    $xmlTool = new \FR3D\XmlDSig\Adapter\XmlseclibsAdapter();
    $pfx = file_get_contents(__DIR__ . "/certificado.pfx o .p12");
    openssl_pkcs12_read($pfx, $key, "passwordcertificado");
    $xmlTool->setPrivateKey($key["pkey"]);
    $xmlTool->setpublickey($key["cert"]);
    $xmlTool->addTransform(\FR3D\XmlDSig\Adapter\XmlseclibsAdapter::ENVELOPED);
    $xmlTool->sign($CONSUMO_DE_FOLIOS, "RCF");
    $archivo =  __DIR__ . "/" . $obj->getId() . ".xml";
    $CONSUMO_DE_FOLIOS->save($archivo);

}  catch (Exception $exc){
    echo $exc->getTraceAsString();
}
?>