<?php
namespace ADICHILE\DTEFACIL\SII\BOLETAS\LIBRO;
class TotalesServicio{
    public $TpoServ;// 1 => Servicio Periodico, 2 => Servicio Periodico Domiciliario, 3 => Venta y Servicio, 4 => Boleta de Espectáculo emitida por cuenta de Terceros
    public $PeriodoDevengado; //Periodo (AAAA-MM) en que  Vencen los Documentos
    public $TotDoc;//Numero de Documentos del Tipo Incluidos en el Libro Electronico
    public $TotMntExe;//Total de los Montos Exentos
    public $TotMntNeto;//Total de los Montos Netos
    public $TasaIVA;//Tasa de IVA Aplicada a los Documentos
    public $TotMntIVA;//Total de los Montos de IVA
    public $TotMntTotal;//Total de los Montos Totales
    public $TotMntNoFact;//Total Monto No Facturable
    public $TotMntPeriodo;//Total Monto Periodo
    public $TotSaldoAnt;//Total Saldo Anterior 
    public $TotVlrPagar;//Total Valor a Pagar
    public $TotTicket;//Total de Ticket informados en el Segmento
    
    function getTpoServ() {
        return $this->TpoServ;
    }

    function getPeriodoDevengado() {
        return $this->PeriodoDevengado;
    }

    function getTotDoc() {
        return $this->TotDoc;
    }

    function getTotMntExe() {
        return $this->TotMntExe;
    }

    function getTotMntNeto() {
        return $this->TotMntNeto;
    }

    function getTasaIVA() {
        return $this->TasaIVA;
    }

    function getTotMntIVA() {
        return $this->TotMntIVA;
    }

    function getTotMntTotal() {
        return $this->TotMntTotal;
    }

    function getTotMntNoFact() {
        return $this->TotMntNoFact;
    }

    function getTotMntPeriodo() {
        return $this->TotMntPeriodo;
    }

    function getTotSaldoAnt() {
        return $this->TotSaldoAnt;
    }

    function getTotVlrPagar() {
        return $this->TotVlrPagar;
    }

    function getTotTicket() {
        return $this->TotTicket;
    }

    function setTpoServ($TpoServ) {
        $this->TpoServ = $TpoServ;
    }

    function setPeriodoDevengado($PeriodoDevengado) {
        $this->PeriodoDevengado = $PeriodoDevengado;
    }

    function setTotDoc($TotDoc) {
        $this->TotDoc = $TotDoc;
    }

    function setTotMntExe($TotMntExe) {
        $this->TotMntExe = $TotMntExe;
    }

    function setTotMntNeto($TotMntNeto) {
        $this->TotMntNeto = $TotMntNeto;
    }

    function setTasaIVA($TasaIVA) {
        $this->TasaIVA = $TasaIVA;
    }

    function setTotMntIVA($TotMntIVA) {
        $this->TotMntIVA = $TotMntIVA;
    }

    function setTotMntTotal($TotMntTotal) {
        $this->TotMntTotal = $TotMntTotal;
    }

    function setTotMntNoFact($TotMntNoFact) {
        $this->TotMntNoFact = $TotMntNoFact;
    }

    function setTotMntPeriodo($TotMntPeriodo) {
        $this->TotMntPeriodo = $TotMntPeriodo;
    }

    function setTotSaldoAnt($TotSaldoAnt) {
        $this->TotSaldoAnt = $TotSaldoAnt;
    }

    function setTotVlrPagar($TotVlrPagar) {
        $this->TotVlrPagar = $TotVlrPagar;
    }

    function setTotTicket($TotTicket) {
        $this->TotTicket = $TotTicket;
    }


}