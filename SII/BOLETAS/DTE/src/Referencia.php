<?php
namespace ADICHILE\DTEFACIL\SII\BOLETAS\DTE;

class Referencia{
    public $NroLinRef;
    public $TpoDocRef;
    public $FolioRef;
    public $CodRef;
    public $RazonRef;
    public $CodVndor;
    public $CodCaja;
    
    function getNroLinRef() {
        return $this->NroLinRef;
    }

    function getCodRef() {
        return $this->CodRef;
    }

    function getRazonRef() {
        return $this->RazonRef;
    }

    function getCodVndor() {
        return $this->CodVndor;
    }

    function getCodCaja() {
        return $this->CodCaja;
    }

    function setNroLinRef($NroLinRef) {
        $this->NroLinRef = $NroLinRef;
    }

    function setCodRef($CodRef) {
        $this->CodRef = $CodRef;
    }

    function setRazonRef($RazonRef) {
        $this->RazonRef = $RazonRef;
    }

    function setCodVndor($CodVndor) {
        $this->CodVndor = $CodVndor;
    }

    function setCodCaja($CodCaja) {
        $this->CodCaja = $CodCaja;
    }

    /**
     * @return mixed
     */
    function getTpoDocRef()
    {
        return $this->TpoDocRef;
    }

    /**
     * @param mixed $TpoDocRef
     */
    function setTpoDocRef($TpoDocRef)
    {
        $this->TpoDocRef = $TpoDocRef;
    }

    /**
     * @return mixed
     */
    function getFolioRef()
    {
        return $this->FolioRef;
    }

    /**
     * @param mixed $FolioRef
     */
    function setFolioRef($FolioRef)
    {
        $this->FolioRef = $FolioRef;
    }

    
}