<?php
namespace ADICHILE\DTEFACIL\SII\DTE;

class Referencia{
    public $NroLinRef;//Representa el numero de linea del documento referenciado
    public $TpoDocRef; //Representa el tipo de documento referenciado
    public $IndGlobal; // Ejemplo factura de todas las guias del mes valor 1 o nulo, + de 20 documentos del mismo tipo, explicar en razon referencia
    public $FolioRef; //Representa el folio del documento referenciado
    public $FchRef; //Representa la fecha de emision del documento referenciado
    public $CodRef; //Representa el codigo de la referencia 1- Anula documento  2- Corrige texto del documento referenciado  3- Corrige montos
    public $RazonRef; //Representa la razon de la referencia
    
    function getNroLinRef() {
        return $this->NroLinRef;
    }

    function getTpoDocRef() {
        return $this->TpoDocRef;
    }

    function getIndGlobal(){
	return $this->IndGlobal;
    }

    function getFolioRef() {
        return $this->FolioRef;
    }

    function getFchRef() {
        return $this->FchRef;
    }

    function getCodRef() {
        return $this->CodRef;
    }

    function getRazonRef() {
        return $this->RazonRef;
    }

    function setNroLinRef($NroLinRef) {
        $this->NroLinRef = $NroLinRef;
    }

    function setTpoDocRef($TpoDocRef) {
        $this->TpoDocRef = $TpoDocRef;
    }

    function setIndGlobal($IndGlobal) {
        $this->IndGlobal = $IndGlobal; 
    }

    function setFolioRef($FolioRef) {
        $this->FolioRef = $FolioRef;
    }

    function setFchRef($FchRef) {
        $this->FchRef = $FchRef;
    }

    function setCodRef($CodRef) {
        $this->CodRef = $CodRef;
    }

    function setRazonRef($RazonRef) {
        $this->RazonRef = $RazonRef;
    }

}