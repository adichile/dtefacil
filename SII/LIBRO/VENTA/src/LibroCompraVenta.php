<?php
namespace ADICHILE\DTEFACIL\SII\LIBRO\COMPRA;

/** 
 * @property EnvioLibro $EnvioLibro Esta propiedad referencia a la clase Documento
*/
class LibroCompraVenta{
    public $EnvioLibro;
    
    function getEnvioLibro() {
        return $this->EnvioLibro;
    }

    function setEnvioLibro() {
        $this->EnvioLibro = new EnvioLibro();
    }

}