<?php
namespace ADICHILE\DTEFACIL\SII\BOLETAS\LIBRO;
class Detalle{
    public $TpoDoc;
    public $FolioDoc;
    public $Anulado;//Indica que el Estado del Documento es Anulado 1: Anulado Previo a su Envio al SII - 2: Anulado Posterior a su Envio al SII - 3: Productos Recibidos Parcialmente
    public $TpoServ;
    public $FchEmiDoc;
    public $FchVencDoc;
    public $PeriodoDesde;
    public $PeriodoHasta;
    public $CdgSIISucur;
    public $RUTCliente;
    public $CodIntCli;
    public $MntExe;
    public $MntTotal;
    public $MntNoFact;
    public $MntPeriodo;
    public $SaldoAnt;
    public $VlrPagar;
    public $TotTicketBoleta;
    
    function getTpoDoc() {
        return $this->TpoDoc;
    }

    function getFolioDoc() {
        return $this->FolioDoc;
    }

    function getAnulado() {
        return $this->Anulado;
    }

    function getTpoServ() {
        return $this->TpoServ;
    }

    function getFchEmiDoc() {
        return $this->FchEmiDoc;
    }

    function getFchVencDoc() {
        return $this->FchVencDoc;
    }

    function getPeriodoDesde() {
        return $this->PeriodoDesde;
    }

    function getPeriodoHasta() {
        return $this->PeriodoHasta;
    }

    function getCdgSIISucur() {
        return $this->CdgSIISucur;
    }

    function getRUTCliente() {
        return $this->RUTCliente;
    }

    function getCodIntCli() {
        return $this->CodIntCli;
    }

    function getMntExe() {
        return $this->MntExe;
    }

    function getMntTotal() {
        return $this->MntTotal;
    }

    function getMntNoFact() {
        return $this->MntNoFact;
    }

    function getMntPeriodo() {
        return $this->MntPeriodo;
    }

    function getSaldoAnt() {
        return $this->SaldoAnt;
    }

    function getVlrPagar() {
        return $this->VlrPagar;
    }

    function getTotTicketBoleta() {
        return $this->TotTicketBoleta;
    }

    function setTpoDoc($TpoDoc) {
        $this->TpoDoc = $TpoDoc;
    }

    function setFolioDoc($FolioDoc) {
        $this->FolioDoc = $FolioDoc;
    }

    function setAnulado($Anulado) {
        $this->Anulado = $Anulado;
    }

    function setTpoServ($TpoServ) {
        $this->TpoServ = $TpoServ;
    }

    function setFchEmiDoc($FchEmiDoc) {
        $this->FchEmiDoc = $FchEmiDoc;
    }

    function setFchVencDoc($FchVencDoc) {
        $this->FchVencDoc = $FchVencDoc;
    }

    function setPeriodoDesde($PeriodoDesde) {
        $this->PeriodoDesde = $PeriodoDesde;
    }

    function setPeriodoHasta($PeriodoHasta) {
        $this->PeriodoHasta = $PeriodoHasta;
    }

    function setCdgSIISucur($CdgSIISucur) {
        $this->CdgSIISucur = $CdgSIISucur;
    }

    function setRUTCliente($RUTCliente) {
        $this->RUTCliente = $RUTCliente;
    }

    function setCodIntCli($CodIntCli) {
        $this->CodIntCli = $CodIntCli;
    }

    function setMntExe($MntExe) {
        $this->MntExe = $MntExe;
    }

    function setMntTotal($MntTotal) {
        $this->MntTotal = $MntTotal;
    }

    function setMntNoFact($MntNoFact) {
        $this->MntNoFact = $MntNoFact;
    }

    function setMntPeriodo($MntPeriodo) {
        $this->MntPeriodo = $MntPeriodo;
    }

    function setSaldoAnt($SaldoAnt) {
        $this->SaldoAnt = $SaldoAnt;
    }

    function setVlrPagar($VlrPagar) {
        $this->VlrPagar = $VlrPagar;
    }

    function setTotTicketBoleta($TotTicketBoleta) {
        $this->TotTicketBoleta = $TotTicketBoleta;
    }
   
}