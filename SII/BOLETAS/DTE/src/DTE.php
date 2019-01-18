<?php
namespace ADICHILE\DTEFACIL\SII\BOLETAS\DTE;

/** 
 * @property Documento $Documento Esta propiedad referencia a la clase Documento
*/
class DTE{
    private $Documento;
    
    function getDocumento() {
        return $this->Documento;
    }

    function setDocumento() {
        $this->Documento = new Documento();
    }  

}