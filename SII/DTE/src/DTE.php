<?php
namespace ADICHILE\DTEFACIL\SII\DTE;
/** 
 * @property Documento $Documento Esta propiedad referencia a la clase Documento
 * @property Exportaciones $Exportaciones Esta propiedad referencia a la clase Exportaciones
*/
class DTE{
    public $Documento;
    public $Exportaciones;
    
    function getDocumento() {
        return $this->Documento;
    }

    function setDocumento() {
        $this->Documento = new Documento();
    }

    function getExportaciones(){
    	return $this->Exportaciones;
    }

    function setExportaciones($Exportaciones){
    	$this->Exportaciones = $Exportaciones;
    }

}