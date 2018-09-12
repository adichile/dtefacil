<?php
namespace ADICHILE\DTEFACIL\SII\OBJECT_AND_XML;

class ObjectAndXML {
    private $xml;
    public $uri;
    public $id;
    private $tipo;

    // Constructor
    public function __construct($path) {
        $this->xml = new \XmlWriter();
        $this->xml->openMemory();
        touch($path);
        $uri = realpath($path);
        $this->xml->openURI("$uri");
        $this->xml->startDocument('1.0', 'ISO-8859-1');
        $this->xml->setIndent(TRUE);
        $this->xml->setIndentString("");
    }

    public function setUri($uri){
        $this->uri = $uri;
    }

    public function getUri(){
        return $this->uri;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function unlink(){
        unlink($this->uri);
    }

    public function setStartElement($startElement = "", $tipo = ""){
        /*
        1 = DTE
        2 = BOLETA
        3 = LIBRO BOLETA
        4 = LIBRO COMPRAVENTA
        5 = LIBRO GUIA DE DESPACHO
        6 = REPORTE CONSUMO FOLIOS
        */

        $this->tipo = $tipo;

        if($tipo == 1 || $tipo == 2){

            $this->xml->startElement($startElement);
            $this->xml->writeAttribute("version", "1.0");

        }elseif($tipo == 3){

            $this->xml->startElement($startElement);
            $this->xml->writeAttribute("xmlns", "http://www.sii.cl/SiiDte");
            $this->xml->writeAttribute("xmlns:xsi", "http://www.w3.org/2001/XMLSchema-instance");
            $this->xml->writeAttribute("version", "1.0");
            $this->xml->writeAttribute("xsi:schemaLocation", "http://www.sii.cl/SiiDte LibroBOLETA_v10.xsd");

        }elseif($tipo == 4){

            $this->xml->startElement($startElement);
            $this->xml->writeAttribute("xmlns", "http://www.sii.cl/SiiDte");
            $this->xml->writeAttribute("xmlns:xsi", "http://www.w3.org/2001/XMLSchema-instance");
            $this->xml->writeAttribute("version", "1.0");
            $this->xml->writeAttribute("xsi:schemaLocation", "http://www.sii.cl/SiiDte LibroCV_v10.xsd");

        }elseif($tipo == 5){

            $this->xml->startElement($startElement);
            $this->xml->writeAttribute("xmlns", "http://www.sii.cl/SiiDte");
            $this->xml->writeAttribute("xmlns:xsi", "http://www.w3.org/2001/XMLSchema-instance");
            $this->xml->writeAttribute("version", "1.0");
            $this->xml->writeAttribute("xsi:schemaLocation", "http://www.sii.cl/SiiDte LibroGuia_v10.xsd");

        }elseif($tipo == 6){

            $this->xml->startElement($startElement);
            $this->xml->writeAttribute("xmlns", "http://www.sii.cl/SiiDte");
            $this->xml->writeAttribute("xmlns:xsi", "http://www.w3.org/2001/XMLSchema-instance");
            $this->xml->writeAttribute("version", "1.0");
            $this->xml->writeAttribute("xsi:schemaLocation", "http://www.sii.cl/SiiDte ConsumoFolio_v10.xsd");

        }

    }

    // Method to convert Object into XML string
    public function objToXML($obj) {
        $this->getObject2XML($this->xml, $obj);
        $this->xml->endElement();
        $this->xml->endDocument();
        return $this->xml->outputMemory(true);
    }

    // Method to convert XML string into Object
    public function xmlToObj($xmlString) {
        return simplexml_load_string($xmlString);
    }

    private function getObject2XML(\XMLWriter $xml, $data) {
        foreach($data as $key => $value) {
            if(is_object($value)) {
                $xml->startElement($key);

                if($key == "Documento" || $key == "Exportaciones"){
                    $xml->writeAttribute("ID", $this->id);
                }

                if($key == "TED"){
                    $xml->writeAttribute("version", "1.0");
                }

                if($key == "EnvioLibro"){
                    $xml->writeAttribute("ID", $this->id);
                }


                if($this->tipo == 6){

                    if($key == "DocumentoConsumoFolios"){
                        $xml->writeAttribute("ID", $this->id);
                    }

                    if($key == "Caratula"){
                        $xml->writeAttribute("version", "1.0");
                    }
                }




                $this->getObject2XML($xml, $value);
                $xml->endElement();
                continue;
            }
            else if(is_array($value)) {
                $this->getArray2XML($xml, $key, $value);
            }

            if (is_string($value)) {
                $xml->writeElement($key, $value);
            }
        }
    }

    private function getArray2XML(\XMLWriter $xml, $keyParent, $data) {
        foreach($data as $key => $value) {
            if (is_string($value)) {
                $xml->writeElement($keyParent, $value);
                continue;
            }

            if (is_numeric($key)) {
                $xml->startElement($keyParent);
            }

            if(is_object($value)) {
                $this->getObject2XML($xml, $value);
            }
            else if(is_array($value)) {
                $this->getArray2XML($xml, $key, $value);
                continue;
            }

            if (is_numeric($key)) {
                $xml->endElement();
            }
        }
    }
}

?>