<?php
namespace ADICHILE\DTEFACIL\SII\LIBRO\COMPRA;

/** 
 * @property Caratula $Caratula 
 * @property ResumenSegmento $ResumenSegmento  
 * @property ResumenPeriodo $ResumenPeriodo  
 * @property Detalle[] $Detalle  
*/
class EnvioLibro{
    public $Caratula;
    public $ResumenSegmento;
    public $ResumenPeriodo;
    public $Detalle;
    public $TmstFirma;
    
    function getCaratula() {
        return $this->Caratula;
    }

    function getResumenSegmento() {
        return $this->ResumenSegmento;
    }

    function getResumenPeriodo() {
        return $this->ResumenPeriodo;
    }

    function getDetalle() {
        return $this->Detalle;
    }

    function getTmstFirma() {
        return $this->TmstFirma;
    }

    function setCaratula() {
        $this->Caratula = new Caratula;
    }

    function setResumenSegmento() {
        $this->ResumenSegmento = new ResumenSegmento;
    }

    function setResumenPeriodo() {
        $this->ResumenPeriodo = new ResumenPeriodo;
    }

    function setDetalle($Detalle) {
        $this->Detalle[] = $Detalle;
    }    

    function setTmstFirma($TmstFirma) {
        $this->TmstFirma = $TmstFirma;
    }
    
}