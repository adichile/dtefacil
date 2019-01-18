<?php
namespace ADICHILE\DTEFACIL\SII\DTE;

/** 
 * @property Encabezado $Encabezado Representa al tag/nodo encabezado del XML de un DTE
 * @property DscRcgGlobal $DscRcgGlobal 
 * @property Referencia $Referencia  
 * @property Detalle[] $Detalle  
 * @property TED $TED 
 * @property Comisiones[] $Comisiones 
*/
class Documento{
    public $Encabezado;
    public $Detalle;
    public $DscRcgGlobal;
    public $Referencia;
    public $Comisiones;
    public $TED;
    public $TmstFirma;
    
    function getEncabezado() {
        return $this->Encabezado;
    }

    function getDetalle() {
        return $this->Detalle;
    }

    function getDscRcgGlobal() {
        return $this->DscRcgGlobal;
    }

    function getReferencia() {
        return $this->Referencia;
    }
    
    function getComisiones() {
        return $this->Comisiones;
    }    

    function getTED() {
        return $this->TED;
    }

    function getTmstFirma() {
        return $this->TmstFirma;
    }

    function setEncabezado() {
        $this->Encabezado = new Encabezado();
    }

    function setDetalle($Detalle) {
        $this->Detalle[] = $Detalle;
    }

    function setDscRcgGlobal($DscRcgGlobal) {
        $this->DscRcgGlobal[] = $DscRcgGlobal;
    }

    function setReferencia($Referencia) {
        $this->Referencia[] = $Referencia;
    }
    
    function setComisiones($Comisiones) {
        $this->Comisiones[] = $Comisiones;
    }

    function setTED() {
        $this->TED =  new TED();
    }

    function setTmstFirma($TmstFirma) {
        $this->TmstFirma = $TmstFirma;
    }

}