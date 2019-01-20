<?php
namespace ADICHILE\DTEFACIL\SII\BOLETAS\LIBRO;

/** 
 * @property EnvioLibro $EnvioLibro Esta propiedad referencia a la clase Documento
*/
class LibroBoleta{
    public $EnvioLibro;
    
    function getEnvioLibro() {
        return $this->EnvioLibro;
    }

    function setEnvioLibro() {
        $this->EnvioLibro = new EnvioLibro();
    }

}