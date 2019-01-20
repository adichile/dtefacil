<?php
namespace ADICHILE\DTEFACIL\SII\DTE;
/** 
 * @property Extranjero $Extranjero 
*/
class Receptor{
    public $RUTRecep;
    public $CdgIntRecep;
    public $RznSocRecep;
    public $Extranjero;
    public $IdAdicRecep;
    public $GiroRecep;
    public $Contacto;//Telefono o E-mail de Contacto del Receptor
    public $CorreoRecep;
    public $DirRecep;
    public $CmnaRecep;
    public $CiudadRecep;
    public $DirPostal;
    public $CmnaPostal;
    public $CiudadPostal;
    public $RUTSolicita;
    
    function getRUTRecep() {
        return $this->RUTRecep;
    }

    function getCdgIntRecep() {
        return $this->CdgIntRecep;
    }

    function getRznSocRecep() {
        return $this->RznSocRecep;
    }

    function getExtranjero() {
        return $this->Extranjero;
    }

    function getIdAdicRecep() {
        return $this->IdAdicRecep;
    }

    function getGiroRecep() {
        return $this->GiroRecep;
    }

    function getContacto() {
        return $this->Contacto;
    }

    function getCorreoRecep() {
        return $this->CorreoRecep;
    }

    function getDirRecep() {
        return $this->DirRecep;
    }

    function getCmnaRecep() {
        return $this->CmnaRecep;
    }

    function getCiudadRecep() {
        return $this->CiudadRecep;
    }

    function getDirPostal() {
        return $this->DirPostal;
    }

    function getCmnaPostal() {
        return $this->CmnaPostal;
    }

    function getCiudadPostal() {
        return $this->CiudadPostal;
    }

    function getRUTSolicita() {
        return $this->RUTSolicita;
    }

    function setRUTRecep($RUTRecep) {
        $this->RUTRecep = $RUTRecep;
    }

    function setCdgIntRecep($CdgIntRecep) {
        $this->CdgIntRecep = $CdgIntRecep;
    }

    function setRznSocRecep($RznSocRecep) {
        $this->RznSocRecep = $RznSocRecep;
    }
    
    function setExtranjero(){
        $this->Extranjero = new Extranjero();
    }

    function setIdAdicRecep($IdAdicRecep) {
        $this->IdAdicRecep = $IdAdicRecep;
    }

    function setGiroRecep($GiroRecep) {
        $this->GiroRecep = $GiroRecep;
    }

    function setContacto($Contacto) {
        $this->Contacto = $Contacto;
    }

    function setCorreoRecep($CorreoRecep) {
        $this->CorreoRecep = $CorreoRecep;
    }

    function setDirRecep($DirRecep) {
        $this->DirRecep = $DirRecep;
    }

    function setCmnaRecep($CmnaRecep) {
        $this->CmnaRecep = $CmnaRecep;
    }

    function setCiudadRecep($CiudadRecep) {
        $this->CiudadRecep = $CiudadRecep;
    }

    function setDirPostal($DirPostal) {
        $this->DirPostal = $DirPostal;
    }

    function setCmnaPostal($CmnaPostal) {
        $this->CmnaPostal = $CmnaPostal;
    }

    function setCiudadPostal($CiudadPostal) {
        $this->CiudadPostal = $CiudadPostal;
    }

}