<?php
namespace ADICHILE\DTEFACIL\SII\DTE;

/** 
 * @property ImpRetOtrMnda $ImpRetOtrMnda
*/
class OtraMoneda{
    public $TpoMoneda;
    public $TpoCambio;//Tipo de Cambio fijado por el Banco Central de Chile
    public $MntNetoOtrMnda;
    public $MntExeOtrMnda;
    public $MntFaeCarneOtrMnda;
    public $MntMargComOtrMnda;
    public $IVAOtraMnda;
    public $IVANoRetOtrMnda;
    public $MntTotOtrMnda;
    
    function getTpoMoneda() {
        return $this->TpoMoneda;
    }

    function getTpoCambio() {
        return $this->TpoCambio;
    }

    function getMntNetoOtrMnda() {
        return $this->MntNetoOtrMnda;
    }

    function getMntExeOtrMnda() {
        return $this->MntExeOtrMnda;
    }

    function getMntFaeCarneOtrMnda() {
        return $this->MntFaeCarneOtrMnda;
    }

    function getMntMargComOtrMnda() {
        return $this->MntMargComOtrMnda;
    }

    function getIVAOtraMnda() {
        return $this->IVAOtraMnda;
    }

    function getIVANoRetOtrMnda() {
        return $this->IVANoRetOtrMnda;
    }

    function getMntTotOtrMnda() {
        return $this->MntTotOtrMnda;
    }

    function setTpoMoneda($TpoMoneda) {
        $this->TpoMoneda = $TpoMoneda;
    }

    function setTpoCambio($TpoCambio) {
        $this->TpoCambio = $TpoCambio;
    }

    function setMntNetoOtrMnda($MntNetoOtrMnda) {
        $this->MntNetoOtrMnda = $MntNetoOtrMnda;
    }

    function setMntExeOtrMnda($MntExeOtrMnda) {
        $this->MntExeOtrMnda = $MntExeOtrMnda;
    }

    function setMntFaeCarneOtrMnda($MntFaeCarneOtrMnda) {
        $this->MntFaeCarneOtrMnda = $MntFaeCarneOtrMnda;
    }

    function setMntMargComOtrMnda($MntMargComOtrMnda) {
        $this->MntMargComOtrMnda = $MntMargComOtrMnda;
    }

    function setIVAOtraMnda($IVAOtraMnda) {
        $this->IVAOtraMnda = $IVAOtraMnda;
    }

    function setIVANoRetOtrMnda($IVANoRetOtrMnda) {
        $this->IVANoRetOtrMnda = $IVANoRetOtrMnda;
    }

    function setMntTotOtrMnda($MntTotOtrMnda) {
        $this->MntTotOtrMnda = $MntTotOtrMnda;
    }


}