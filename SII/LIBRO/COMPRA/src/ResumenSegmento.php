<?php

class ResumenSegmento{
    public $TotalesSegmento;// Corresponde al Rut del contribuyente emisor con guión y dígito verificador

    function getTotalesSegmento() {
        return $this->TotalesSegmento;
    }
    
    function setTotalesSegmento($TotalesSegmento) {
        $this->TotalesSegmento[] = $TotalesSegmento;
    }

}