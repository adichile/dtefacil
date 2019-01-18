<?php
namespace ADICHILE\DTEFACIL\SII\LIBRO\GUIA;

/**
 * @property EnvioLibro $EnvioLibro Esta propiedad referencia a la clase Documento
*/
class LibroGuia{
    public $EnvioLibro;
    
    function getEnvioLibro() {
        return $this->EnvioLibro;
    }

    function setEnvioLibro() {
        $this->EnvioLibro = new EnvioLibro();
    }

}