<?php
namespace ADICHILE\DTEFACIL\SII\BOLETAS\REPORTE_CONSUMO_FOLIOS;
/** 
 * @property RangoUtilizados[] $RangoUtilizados 
 * @property RangoAnulados[] $RangoAnulados  
*/

class Resumen{
    public $TipoDocumento;
    public $MntNeto;
    public $MntIva;
    public $TasaIVA;
    public $MntExento;
    public $MntTotal;
    public $FoliosEmitidos;
    public $FoliosAnulados;
    public $FoliosUtilizados;
    public $RangoUtilizados;
    public $RangoAnulados;
    
    function getTipoDocumento() {
        return $this->TipoDocumento;
    }

    function getMntNeto() {
        return $this->MntNeto;
    }

    function getMntIva() {
        return $this->MntIva;
    }

    function getTasaIVA() {
        return $this->TasaIVA;
    }

    function getMntExento() {
        return $this->MntExento;
    }

    function getMntTotal() {
        return $this->MntTotal;
    }

    function getFoliosEmitidos() {
        return $this->FoliosEmitidos;
    }

    function getFoliosAnulados() {
        return $this->FoliosAnulados;
    }

    function getFoliosUtilizados() {
        return $this->FoliosUtilizados;
    }

    function getRangoUtilizados() {
        return $this->RangoUtilizados;
    }

    function getRangoAnulados() {
        return $this->RangoAnulados;
    }

    function setTipoDocumento($TipoDocumento) {
        $this->TipoDocumento = $TipoDocumento;
    }

    function setMntNeto($MntNeto) {
        $this->MntNeto = $MntNeto;
    }

    function setMntIva($MntIva) {
        $this->MntIva = $MntIva;
    }

    function setTasaIVA($TasaIVA) {
        $this->TasaIVA = $TasaIVA;
    }

    function setMntExento($MntExento) {
        $this->MntExento = $MntExento;
    }

    function setMntTotal($MntTotal) {
        $this->MntTotal = $MntTotal;
    }

    function setFoliosEmitidos($FoliosEmitidos) {
        $this->FoliosEmitidos = $FoliosEmitidos;
    }

    function setFoliosAnulados($FoliosAnulados) {
        $this->FoliosAnulados = $FoliosAnulados;
    }

    function setFoliosUtilizados($FoliosUtilizados) {
        $this->FoliosUtilizados = $FoliosUtilizados;
    }

    function setRangoUtilizados() {
        $this->RangoUtilizados[] = new RangoUtilizados();
    }

    function setRangoAnulados() {
        $this->RangoAnulados[] = new RangoAnulados();
    }
    
}
