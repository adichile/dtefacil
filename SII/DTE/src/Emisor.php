<?php
namespace ADICHILE\DTEFACIL\SII\DTE;

/** 
 * @property GuiaExport $GuiaExport Representa al tag GuiaExport
*/
class Emisor{
    public $RUTEmisor;
    public $RznSoc;
    public $GiroEmis;
    public $Telefono;
    public $CorreoEmisor;
    public $Acteco;
    public $GuiaExport;
    public $CdgTraslado;
    public $FolioAut;
    public $FchAut;
    public $Sucursal;
    public $CdgSIISucur;
    public $CodAdicSucur;
    public $DirOrigen;
    public $CmnaOrigen;
    public $CiudadOrigen;
    public $CdgVendedor;
    public $IdAdicEmisor;
    
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

    function getRUTEmisor() {
        return $this->RUTEmisor;
    }

    function getRznSoc() {
        return $this->RznSoc;
    }

    function getGiroEmis() {
        return $this->GiroEmis;
    }

    function getTelefono() {
        return $this->Telefono;
    }

    function getCorreoEmisor() {
        return $this->CorreoEmisor;
    }

    function getActeco() {
        return $this->Acteco;
    }

    function getGuiaExport(){
        return $this->GuiaExport;
    }

    function getSucursal() {
        return $this->Sucursal;
    }

    function getCdgSIISucur() {
        return $this->CdgSIISucur;
    }

    function getCodAdicSucur() {
        return $this->CodAdicSucur;
    }

    function getDirOrigen() {
        return $this->DirOrigen;
    }

    function getCmnaOrigen() {
        return $this->CmnaOrigen;
    }

    function getCiudadOrigen() {
        return $this->CiudadOrigen;
    }

    function getCdgVendedor() {
        return $this->CdgVendedor;
    }

    function getIdAdicEmisor() {
        return $this->IdAdicEmisor;
    }

    function setRUTEmisor($RUTEmisor) {
        $this->RUTEmisor = $RUTEmisor;
    }

    function setRznSoc($RznSoc) {
        $this->RznSoc = $RznSoc;
    }

    function setGiroEmis($GiroEmis) {
        $this->GiroEmis = $GiroEmis;
    }

    function setTelefono($Telefono) {
        $this->Telefono = $Telefono;
    }

    function setCorreoEmisor($CorreoEmisor) {
        $this->CorreoEmisor = $CorreoEmisor;
    }

    function setActeco($Acteco) {
        $this->Acteco[] = $Acteco;
    }

    function setGuiaExport() {
        $this->GuiaExport =  new GuiaExport();
    }    

    function setSucursal($Sucursal) {
        $this->Sucursal = $Sucursal;
    }

    function setCdgSIISucur($CdgSIISucur) {
        $this->CdgSIISucur = $CdgSIISucur;
    }

    function setCodAdicSucur($CodAdicSucur) {
        $this->CodAdicSucur = $CodAdicSucur;
    }

    function setDirOrigen($DirOrigen) {
        $this->DirOrigen = $DirOrigen;
    }

    function setCmnaOrigen($CmnaOrigen) {
        $this->CmnaOrigen = $CmnaOrigen;
    }

    function setCiudadOrigen($CiudadOrigen) {
        $this->CiudadOrigen = $CiudadOrigen;
    }

    function setCdgVendedor($CdgVendedor) {
        $this->CdgVendedor = $CdgVendedor;
    }

    function setIdAdicEmisor($IdAdicEmisor) {
        $this->IdAdicEmisor = $IdAdicEmisor;
    }

 
}