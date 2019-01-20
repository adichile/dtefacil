<?php
namespace ADICHILE\DTEFACIL\SII\DTE;

/** 
 * @property Chofer $Chofer 
 * @property Aduana $Aduana 
*/
class Transporte{
    public $Patente;
    public $RUTTrans;
    public $Chofer;
    public $DirDest;
    public $CmnaDest;
    public $CiudadDest;
    public $Aduana;
    
    function getPatente(){
        return $this->Patente;
    }

    function getRUTTrans() {
        return $this->RUTTrans;
    }

    function getChofer() {
        return $this->Chofer;
    }

    function getDirDest() {
        return $this->DirDest;
    }

    function getCmnaDest() {
        return $this->CmnaDest;
    }

    function getCiudadDest() {
        return $this->CiudadDest;
    }

    function getAduana(){
        return $this->Aduana;
    }

    function setPatente($Patente) {
        $this->Patente = $Patente;
    }

    function setRUTTrans($RUTTrans) {
        $this->RUTTrans = $RUTTrans;
    }

    function setChofer() {
        $this->Chofer = new Chofer();
    }

    function setDirDest($DirDest) {
        $this->DirDest = $DirDest;
    }

    function setCmnaDest($CmnaDest) {
        $this->CmnaDest = $CmnaDest;
    }

    function setCiudadDest($CiudadDest) {
        $this->CiudadDest = $CiudadDest;
    }

    function setAduana(){
        $this->Aduana = new Aduana();
    }

}
