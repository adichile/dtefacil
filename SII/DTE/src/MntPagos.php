<?php
namespace ADICHILE\DTEFACIL\SII\DTE;

/*
 * @property date $FchPago
 * @property int $MntPago
 * @property string $GlosaPagos
 */
class MntPagos{
    public $FchPago;
    public $MntPago;
    public $GlosaPagos;
    
    function getFchPago() {
        return $this->FchPago;
    }

    function getMntPago() {
        return $this->MntPago;
    }

    function getGlosaPagos() {
        return $this->GlosaPagos;
    }

    function setFchPago($FchPago) {
        $this->FchPago = $FchPago;
    }

    function setMntPago($MntPago) {
        $this->MntPago = $MntPago;
    }

    function setGlosaPagos($GlosaPagos) {
        $this->GlosaPagos = $GlosaPagos;
    }

}
