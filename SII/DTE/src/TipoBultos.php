<?php
namespace ADICHILE\DTEFACIL\SII\DTE;

class TipoBultos{

    public $CodTpoBultos;
    public $CantBultos;
    public $Marcas;
    public $IdContainer;
    public $Sello;
    public $EmisorSello;
 
    function getCodTpoBultos() {
        return $this->CodTpoBultos;
    }

    function getCantBultos() {
        return $this->CantBultos;
    }

    function getMarcas() {
        return $this->Marcas;
    }

    function getIdContainer() {
        return $this->IdContainer;
    }

    function getSello() {
        return $this->Sello;
    }

    function getEmisorSello() {
        return $this->EmisorSello;
    }

    function setCodTpoBultos($CodTpoBultos) {
        $this->CodTpoBultos = $CodTpoBultos;
    }

    function setCantBultos($CantBultos) {
        $this->CantBultos = $CantBultos;
    }

    function setMarcas($Marcas) {
        $this->Marcas = $Marcas;
    }

    function setIdContainer($IdContainer) {
        $this->IdContainer = $IdContainer;
    }

    function setSello($Sello) {
        $this->Sello = $Sello;
    }

    function setEmisorSello($EmisorSello) {
        $this->EmisorSello = $EmisorSello;
    }


}
