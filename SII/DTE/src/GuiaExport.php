<?php
namespace ADICHILE\DTEFACIL\SII\DTE;

class GuiaExport{
    public $CdgTraslado;
    public $FolioAut;
    public $FchAut;

    function getCdgTraslado() {
        return $this->CdgTraslado;
    }

    function getFolioAut() {
        return $this->FolioAut;
    }

    function getFchAut() {
        return $this->FchAut;
    }

    function setCdgTraslado($CdgTraslado) {
        $this->CdgTraslado = $CdgTraslado;
    }

    function setFolioAut($FolioAut) {
        $this->FolioAut = $FolioAut;
    }

    function setFchAut($FchAut) {
        $this->FchAut = $FchAut;
    }
 
}