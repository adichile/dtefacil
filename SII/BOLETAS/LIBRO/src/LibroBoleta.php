<?php
namespace ADICHILE\DTEFACIL\SII\BOLETAS\LIBRO;
require_once('Caratula.php');
require_once('Detalle.php');
require_once('EnvioLibro.php');
require_once('ResumenPeriodo.php');
require_once('ResumenSegmento.php');
require_once('Totales.php');
require_once('TotalesPeriodo.php');
require_once('TotalesSegmento.php');
require_once('TotalesServicio.php');
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