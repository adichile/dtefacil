<?php
namespace ADICHILE\DTEFACIL\SII\DTE;

/** 
 * @property ImptoReten[] $ImptoReten
 * @property Comisiones $Comisiones
*/
class Totales{
    public $TpoMoneda;
    public $MntNeto;
    public $MntExe;
    public $MntBase;
    public $MntMargenCom;
    public $TasaIVA;
    public $IVA;
    public $IVAProp;
    public $IVATerc;
    public $ImptoReten;
    public $IVANoRet;
    public $CredEC;
    public $GrntDep;
    public $Comisiones;
    public $MntTotal;
    public $MontoNF;
    public $MontoPeriodo;
    public $SaldoAnterior;
    public $VlrPagar;

    function getTpoMoneda() {
        return $this->TpoMoneda;
    }

    function getMntNeto() {
        return $this->MntNeto;
    }

    function getMntExe() {
        return $this->MntExe;
    }

    function getMntBase() {
        return $this->MntBase;
    }

    function getMntMargenCom() {
        return $this->MntMargenCom;
    }

    function getTasaIVA() {
        return $this->TasaIVA;
    }

    function getIVA() {
        return $this->IVA;
    }

    function getIVAProp() {
        return $this->IVAProp;
    }

    function getIVATerc() {
        return $this->IVATerc;
    }

    function getImptoReten() {
        return $this->ImptoReten;
    }

    function getIVANoRet() {
        return $this->IVANoRet;
    }

    function getCredEC() {
        return $this->CredEC;
    }

    function getGrntDep() {
        return $this->GrntDep;
    }
    
    function getComisiones() {
        return $this->Comisiones;
    }

    function getMntTotal() {
        return $this->MntTotal;
    }

    function getMontoNF() {
        return $this->MontoNF;
    }

    function getMontoPeriodo() {
        return $this->MontoPeriodo;
    }

    function getSaldoAnterior() {
        return $this->SaldoAnterior;
    }

    function getVlrPagar() {
        return $this->VlrPagar;
    }

    function setTpoMoneda($TpoMoneda) {
        $this->TpoMoneda = $TpoMoneda;
    }

    function setMntNeto($MntNeto) {
        $this->MntNeto = $MntNeto;
    }

    function setMntExe($MntExe) {
        $this->MntExe = $MntExe;
    }

    function setMntBase($MntBase) {
        $this->MntBase = $MntBase;
    }

    function setMntMargenCom($MntMargenCom) {
        $this->MntMargenCom = $MntMargenCom;
    }

    function setTasaIVA($TasaIVA) {
        $this->TasaIVA = $TasaIVA;
    }

    function setIVA($IVA) {
        $this->IVA = $IVA;
    }

    function setIVAProp($IVAProp) {
        $this->IVAProp = $IVAProp;
    }

    function setIVATerc($IVATerc) {
        $this->IVATerc = $IVATerc;
    }

    function setImptoReten($ImptoReten) {
        $this->ImptoReten[] = $ImptoReten;
    }

    function setIVANoRet($IVANoRet) {
        $this->IVANoRet = $IVANoRet;
    }

    function setCredEC($CredEC) {
        $this->CredEC = $CredEC;
    }

    function setGrntDep($GrntDep) {
        $this->GrntDep = $GrntDep;
    }
    
    function setComisiones() {
        $this->Comisiones = new Comisiones();
    }

    function setMntTotal($MntTotal) {
        $this->MntTotal = $MntTotal;
    }

    function setMontoNF($MontoNF) {
        $this->MontoNF = $MontoNF;
    }

    function setMontoPeriodo($MontoPeriodo) {
        $this->MontoPeriodo = $MontoPeriodo;
    }

    function setSaldoAnterior($SaldoAnterior) {
        $this->SaldoAnterior = $SaldoAnterior;
    }

    function setVlrPagar($VlrPagar) {
        $this->VlrPagar = $VlrPagar;
    }

 
}