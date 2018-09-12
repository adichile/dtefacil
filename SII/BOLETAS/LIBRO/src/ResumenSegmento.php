<?php
namespace ADICHILE\DTEFACIL\SII\BOLETAS\LIBRO;
/**
 * @property TotalesSegmento[] $TotalesSegmento 
*/
class ResumenSegmento{
    public $TotalesSegmento;

    function getTotalesSegmento() {
        return $this->TotalesSegmento;
    }
    
    function setTotalesSegmento($TotalesSegmento) {
        $this->TotalesSegmento[] = $TotalesSegmento;
    }

}