<?php
namespace ADICHILE\DTEFACIL\SII\DTE;

class Comisiones{
    public $NroLinCom;
    public $TipoMovim;
    public $Glosa;
    public $TasaComision;
    public $ValComNeto;
    public $ValComExe;
    public $ValComIVA;

    function getNroLinCom() {
        return $this->NroLinCom;
    }

    function getTipoMovim() {
        return $this->TipoMovim;
    }

    function getGlosa() {
        return $this->Glosa;
    }

    function getTasaComision() {
        return $this->TasaComision;
    }

    function getValComNeto() {
        return $this->ValComNeto;
    }

    function getValComExe() {
        return $this->ValComExe;
    }

    function getValComIVA() {
        return $this->ValComIVA;
    }

    function setNroLinCom($NroLinCom) {
        $this->NroLinCom = $NroLinCom;
    }

    function setTipoMovim($TipoMovim) {
        $this->TipoMovim = $TipoMovim;
    }

    function setGlosa($Glosa) {
        $this->Glosa = $Glosa;
    }

    function setTasaComision($TasaComision) {
        $this->TasaComision = $TasaComision;
    }

    function setValComNeto($ValComNeto) {
        $this->ValComNeto = $ValComNeto;
    }

    function setValComExe($ValComExe) {
        $this->ValComExe = $ValComExe;
    }

    function setValComIVA($ValComIVA) {
        $this->ValComIVA = $ValComIVA;
    }



 
}