<?php
namespace ADICHILE\DTEFACIL\SII\DTE;
/** 
 * @property TipoBultos[] $TipoBultos  
*/

class Aduana{

    public $CodModVenta;
    public $CodClauVenta;
    public $TotClauVenta;
    public $CodViaTransp;
    public $NombreTransp;
    public $RUTCiaTransp;
    public $NombreCiaTransp;
    public $IdAdicTransp;
    public $Booking;
    public $Operador;
    public $CodPtoEmbarque;
    public $IdAdicPtoEmb;
    public $CodPtoDesemb;
    public $IdAdicPtoDesemb;
    public $Tara;
    public $CodUnidMedTara;
    public $PesoBruto;
    public $CodUnidPesoBruto;
    public $PesoNeto;
    public $CodUnidPesoNeto;
    public $TotItems;
    public $TotBultos;
    public $TipoBultos;
    public $MntFlete;
    public $MntSeguro;
    public $CodPaisRecep;
    public $CodPaisDestin;
    
    function getCodModVenta() {
        return $this->CodModVenta;
    }

    function getCodClauVenta() {
        return $this->CodClauVenta;
    }

    function getTotClauVenta() {
        return $this->TotClauVenta;
    }

    function getCodViaTransp() {
        return $this->CodViaTransp;
    }

    function getNombreTransp() {
        return $this->NombreTransp;
    }

    function getRUTCiaTransp() {
        return $this->RUTCiaTransp;
    }

    function getNombreCiaTransp() {
        return $this->NombreCiaTransp;
    }

    function getIdAdicTransp() {
        return $this->IdAdicTransp;
    }

    function getBooking() {
        return $this->Booking;
    }

    function getOperador() {
        return $this->Operador;
    }

    function getCodPtoEmbarque() {
        return $this->CodPtoEmbarque;
    }

    function getIdAdicPtoEmb() {
        return $this->IdAdicPtoEmb;
    }

    function getCodPtoDesemb() {
        return $this->CodPtoDesemb;
    }

    function getIdAdicPtoDesemb() {
        return $this->IdAdicPtoDesemb;
    }

    function getTara() {
        return $this->Tara;
    }

    function getCodUnidMedTara() {
        return $this->CodUnidMedTara;
    }

    function getPesoBruto() {
        return $this->PesoBruto;
    }

    function getCodUnidPesoBruto() {
        return $this->CodUnidPesoBruto;
    }

    function getPesoNeto() {
        return $this->PesoNeto;
    }

    function getCodUnidPesoNeto() {
        return $this->CodUnidPesoNeto;
    }

    function getTotItems() {
        return $this->TotItems;
    }

    function getTotBultos() {
        return $this->TotBultos;
    }

    function getTipoBultos() {
        return $this->TipoBultos;
    }

    function getMntFlete() {
        return $this->MntFlete;
    }

    function getMntSeguro() {
        return $this->MntSeguro;
    }

    function getCodPaisRecep() {
        return $this->CodPaisRecep;
    }

    function getCodPaisDestin() {
        return $this->CodPaisDestin;
    }

    function setCodModVenta($CodModVenta) {
        $this->CodModVenta = $CodModVenta;
    }

    function setCodClauVenta($CodClauVenta) {
        $this->CodClauVenta = $CodClauVenta;
    }

    function setTotClauVenta($TotClauVenta) {
        $this->TotClauVenta = $TotClauVenta;
    }

    function setCodViaTransp($CodViaTransp) {
        $this->CodViaTransp = $CodViaTransp;
    }

    function setNombreTransp($NombreTransp) {
        $this->NombreTransp = $NombreTransp;
    }

    function setRUTCiaTransp($RUTCiaTransp) {
        $this->RUTCiaTransp = $RUTCiaTransp;
    }

    function setNombreCiaTransp($NombreCiaTransp) {
        $this->NombreCiaTransp = $NombreCiaTransp;
    }

    function setIdAdicTransp($IdAdicTransp) {
        $this->IdAdicTransp = $IdAdicTransp;
    }

    function setBooking($Booking) {
        $this->Booking = $Booking;
    }

    function setOperador($Operador) {
        $this->Operador = $Operador;
    }

    function setCodPtoEmbarque($CodPtoEmbarque) {
        $this->CodPtoEmbarque = $CodPtoEmbarque;
    }

    function setIdAdicPtoEmb($IdAdicPtoEmb) {
        $this->IdAdicPtoEmb = $IdAdicPtoEmb;
    }

    function setCodPtoDesemb($CodPtoDesemb) {
        $this->CodPtoDesemb = $CodPtoDesemb;
    }

    function setIdAdicPtoDesemb($IdAdicPtoDesemb) {
        $this->IdAdicPtoDesemb = $IdAdicPtoDesemb;
    }

    function setTara($Tara) {
        $this->Tara = $Tara;
    }

    function setCodUnidMedTara($CodUnidMedTara) {
        $this->CodUnidMedTara = $CodUnidMedTara;
    }

    function setPesoBruto($PesoBruto) {
        $this->PesoBruto = $PesoBruto;
    }

    function setCodUnidPesoBruto($CodUnidPesoBruto) {
        $this->CodUnidPesoBruto = $CodUnidPesoBruto;
    }

    function setPesoNeto($PesoNeto) {
        $this->PesoNeto = $PesoNeto;
    }

    function setCodUnidPesoNeto($CodUnidPesoNeto) {
        $this->CodUnidPesoNeto = $CodUnidPesoNeto;
    }

    function setTotItems($TotItems) {
        $this->TotItems = $TotItems;
    }

    function setTotBultos($TotBultos) {
        $this->TotBultos = $TotBultos;
    }
    
    function setTipoBultos($TipoBultos) {
        $this->TipoBultos[] = $TipoBultos;
    }    

    function setMntFlete($MntFlete) {
        $this->MntFlete = $MntFlete;
    }

    function setMntSeguro($MntSeguro) {
        $this->MntSeguro = $MntSeguro;
    }

    function setCodPaisRecep($CodPaisRecep) {
        $this->CodPaisRecep = $CodPaisRecep;
    }

    function setCodPaisDestin($CodPaisDestin) {
        $this->CodPaisDestin = $CodPaisDestin;
    }

}
