<?php
namespace ADICHILE\DTEFACIL\SII\BOLETAS\LIBRO;
/**
 * @property TotalesServicio $TotalesServicio 
*/
class Totales{
    public $TpoDoc;
    public $TotAnulado;        /// <summary>
    public $TotalesServicio;

    function getTpoDoc() {
        return $this->TpoDoc;
    }

    function getTotAnulado() {
        return $this->TotAnulado;
    }

    function getTotalesServicio() {
        return $this->TotalesServicio;
    }

    function setTpoDoc($TpoDoc) {
        $this->TpoDoc = $TpoDoc;
    }

    function setTotAnulado($TotAnulado) {
        $this->TotAnulado = $TotAnulado;
    }
   
    function setTotalesServicio($TotalesServicio) {
        $this->TotalesServicio[] = $TotalesServicio;
    }     
}
