<?php
namespace ADICHILE\DTEFACIL\SII\DTE;

class Retenedor{
    public $IndAgente;
    public $MntBaseFaena;
    public $MntMargComer;
    public $PrcConsFinal;

    function getIndAgente() {
        return $this->IndAgente;
    }

    function getMntBaseFaena() {
        return $this->MntBaseFaena;
    }

    function getMntMargComer() {
        return $this->MntMargComer;
    }

    function getPrcConsFinal() {
        return $this->PrcConsFinal;
    }
    
    function setIndAgente($IndAgente) {
        $this->IndAgente = $IndAgente;
    }

    function setMntBaseFaena($MntBaseFaena) {
        $this->MntBaseFaena = $MntBaseFaena;
    }

    function setMntMargComer($MntMargComer) {
        $this->MntMargComer = $MntMargComer;
    }

    function setPrcConsFinal($PrcConsFinal) {
        $this->PrcConsFinal = $PrcConsFinal;
    }
    
}