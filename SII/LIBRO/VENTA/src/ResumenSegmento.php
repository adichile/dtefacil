<?php
namespace ADICHILE\DTEFACIL\SII\LIBRO\COMPRA;

/** 
 * @property TotalesSegmento[] $TotalesSegmento 
*/
class ResumenSegmento{
    public $TotalesSegmento;// Corresponde al Rut del contribuyente emisor con gui�n y d�gito verificador

    function getTotalesSegmento() {
        return $this->TotalesSegmento;
    }
    
    function setTotalesSegmento($TotalesSegmento) {
        $this->TotalesSegmento[] = $TotalesSegmento;
    }

}