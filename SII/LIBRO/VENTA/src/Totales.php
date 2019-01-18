<?php
namespace ADICHILE\DTEFACIL\SII\LIBRO\COMPRA;

/**
 * @property TotLiquidaciones $TotLiquidaciones 
 * @property TotOtrosImp $TotOtrosImp  
*/
class Totales{
    public $TpoDoc;
    public $TpoImp;
    public $TotDoc;// Cantidad de documentos del tipo especificado en el campo Tipo de Documento. Incluye anulados.
    public $TotAnulado;        /// <summary>
        /// #4 - TOTAL ANULADOS
        /// </summary>
        /// <remarks>S
        /// Cantidad de documentos cuyos folios han sido anulados, previo al env�o al SII. Estos 
        /// documentos no se totalizan en los campos siguientes. 
        /// No se contabiliza aqu� si un documento electr�nico ha sido anulado posterior al env�o al SII, 
        /// con Una Nota de Cr�dito o Debito. Esos documentos deben ser informados como emitidos, 
        /// con todos los datos que correspondan. 
        /// </remarks>
   public $TotOpExe;// Cantidad de documentos en que se ha registrado Montos del tipo especificado en el campo siguiente 
   public $TotMntExe;// Suma de monto exento de todos los documentos registrados en el detalle 
   public $TotMntNeto;// Suma del monto neto de todos los documentos registrados en el detalle. Incluye el Monto Neto de Activo Fijo. 
   public $TotOpIVARec;// Cantidad de documentos en que se ha registrado Montos del tipo especificado en el campo siguiente
   public $TotMntIVA;
   public $TotIVAFueraPlazo;// S�lo aplica para Notas de Cr�dito. 
   public $TotIVAPropio;// S�lo cuando hay venta o servicio por cuenta de terceros 
   public $TotIVATerceros;// S�lo cuando hay venta o servicio por cuenta de terceros
   public $TotLey18211;
   public $TotOtrosImp;
       //////////////////////////////////////////////////////////////////
        /// Tabla Tipos de Impuesto o recargo
        /// Contiene los dos campos siguientes. Hasta 20 posibles ocurrencias. 
        /// Totaliza por c�digo para cada tipo de documento 
        /// codigos 12 - 13
        //////////////////////////////////////////////////////////////////   
   public $TotOpIVARetTotal;
        /// <summary>
        /// #14 - TOTAL OPERACIONES CON IVA RETENIDO TOTAL 
        /// </summary>
        /// <remarks>
        /// Cantidad de documentos en que se ha registrado Montos del tipo especificado en el campo 
        /// siguiente.
        /// </remarks>
   public $TotIVARetTotal;// Totales por documento
   public $TotOpIVARetParcial;// Cantidad de documentos en que se ha registrado Montos del tipo especificado en el campo 
   public $TotIVARetParcial;// Totales por documento #17 - IVA Retenido Parcial
   public $TotCredEC;// #18 - TOTAL CREDITO ESPECIAL 65% EMPRESAS CONSTRUCTORAS 
   public $TotDepEnvase;// #19 - TOTAL Dep�sito envases
   public $TotLiquidaciones;
        //////////////////////////////////////////////////////////////////
        /// Tabla liquidaciones
        /// TotLiquidaciones
        /// Contiene los dos campos siguientes. Hasta 20 posibles ocurrencias. 
        /// Totaliza por c�digo para cada tipo de documento
        /// codigos 20,21,22
        //////////////////////////////////////////////////////////////////
   public $TotMntTotal;// Suma para el tipo de documento
   public $TotOpIVANoRetenido;
        /// <summary>
        /// #24 - OPERACIONES CON IVA NO RETENIDO PARCIAL
        /// </summary>
        /// <remarks>
        /// Cantidad de documentos en que se ha registrado Montos del tipo especificado en el campo 
        /// siguiente. S�lo aplica para Factura de Compra recibidas 
        /// </remarks>
   public $TotIVANoRetenido;// #25 - TOTAL IVA no retenido
   public $TotMntNoFact;// #26 - Total Monto no facturable - Valor puede ser negativo
   public $TotMntPeriodo;// #27 - Total Monto Per�odo - Valor puede ser negativo 
   public $TotPsjNac;// #28 - TOTAL EXENTO Venta de pasajes Transporte nacional - S�lo ventas con Factura Exenta
   public $TotPsjInt;//#29 - TOTAL EXENTO Venta de pasajes Transporte internacional - S�lo ventas con Factura Exenta

   
   function getTpoDoc() {
       return $this->TpoDoc;
   }

   function getTpoImp() {
       return $this->TpoImp;
   }

   function getTotDoc() {
       return $this->TotDoc;
   }

   function getTotAnulado() {
       return $this->TotAnulado;
   }

   function getTotOpExe() {
       return $this->TotOpExe;
   }

   function getTotMntExe() {
       return $this->TotMntExe;
   }

   function getTotMntNeto() {
       return $this->TotMntNeto;
   }

   function getTotOpIVARec() {
       return $this->TotOpIVARec;
   }

   function getTotMntIVA() {
       return $this->TotMntIVA;
   }

   function getTotIVAFueraPlazo() {
       return $this->TotIVAFueraPlazo;
   }

   function getTotIVAPropio() {
       return $this->TotIVAPropio;
   }

   function getTotIVATerceros() {
       return $this->TotIVATerceros;
   }

   function getTotLey18211() {
       return $this->TotLey18211;
   }

   function getTotOtrosImp() {
       return $this->TotOtrosImp;
   }

   function getTotOpIVARetTotal() {
       return $this->TotOpIVARetTotal;
   }

   function getTotIVARetTotal() {
       return $this->TotIVARetTotal;
   }

   function getTotOpIVARetParcial() {
       return $this->TotOpIVARetParcial;
   }

   function getTotIVARetParcial() {
       return $this->TotIVARetParcial;
   }

   function getTotCredEC() {
       return $this->TotCredEC;
   }

   function getTotDepEnvase() {
       return $this->TotDepEnvase;
   }

   function getTotLiquidaciones() {
       return $this->TotLiquidaciones;
   }

   function getTotMntTotal() {
       return $this->TotMntTotal;
   }

   function getTotOpIVANoRetenido() {
       return $this->TotOpIVANoRetenido;
   }

   function getTotIVANoRetenido() {
       return $this->TotIVANoRetenido;
   }

   function getTotMntNoFact() {
       return $this->TotMntNoFact;
   }

   function getTotMntPeriodo() {
       return $this->TotMntPeriodo;
   }

   function getTotPsjNac() {
       return $this->TotPsjNac;
   }

   function getTotPsjInt() {
       return $this->TotPsjInt;
   }

   function setTpoDoc($TpoDoc) {
       $this->TpoDoc = $TpoDoc;
   }

   function setTpoImp($TpoImp) {
       $this->TpoImp = $TpoImp;
   }

   function setTotDoc($TotDoc) {
       $this->TotDoc = $TotDoc;
   }

   function setTotAnulado($TotAnulado) {
       $this->TotAnulado = $TotAnulado;
   }

   function setTotOpExe($TotOpExe) {
       $this->TotOpExe = $TotOpExe;
   }

   function setTotMntExe($TotMntExe) {
       $this->TotMntExe = $TotMntExe;
   }

   function setTotMntNeto($TotMntNeto) {
       $this->TotMntNeto = $TotMntNeto;
   }

   function setTotOpIVARec($TotOpIVARec) {
       $this->TotOpIVARec = $TotOpIVARec;
   }

   function setTotMntIVA($TotMntIVA) {
       $this->TotMntIVA = $TotMntIVA;
   }

   function setTotIVAFueraPlazo($TotIVAFueraPlazo) {
       $this->TotIVAFueraPlazo = $TotIVAFueraPlazo;
   }

   function setTotIVAPropio($TotIVAPropio) {
       $this->TotIVAPropio = $TotIVAPropio;
   }

   function setTotIVATerceros($TotIVATerceros) {
       $this->TotIVATerceros = $TotIVATerceros;
   }

   function setTotLey18211($TotLey18211) {
       $this->TotLey18211 = $TotLey18211;
   }

    function setTotOtrosImp($TotOtrosImp) {
        $this->TotOtrosImp[] = $TotOtrosImp;
    }

   function setTotOpIVARetTotal($TotOpIVARetTotal) {
       $this->TotOpIVARetTotal = $TotOpIVARetTotal;
   }

   function setTotIVARetTotal($TotIVARetTotal) {
       $this->TotIVARetTotal = $TotIVARetTotal;
   }

   function setTotOpIVARetParcial($TotOpIVARetParcial) {
       $this->TotOpIVARetParcial = $TotOpIVARetParcial;
   }

   function setTotIVARetParcial($TotIVARetParcial) {
       $this->TotIVARetParcial = $TotIVARetParcial;
   }

   function setTotCredEC($TotCredEC) {
       $this->TotCredEC = $TotCredEC;
   }

   function setTotDepEnvase($TotDepEnvase) {
       $this->TotDepEnvase = $TotDepEnvase;
   }

   function setTotLiquidaciones($TotLiquidaciones) {
       $this->TotLiquidaciones[] = $TotLiquidaciones;
   }

   function setTotMntTotal($TotMntTotal) {
       $this->TotMntTotal = $TotMntTotal;
   }

   function setTotOpIVANoRetenido($TotOpIVANoRetenido) {
       $this->TotOpIVANoRetenido = $TotOpIVANoRetenido;
   }

   function setTotIVANoRetenido($TotIVANoRetenido) {
       $this->TotIVANoRetenido = $TotIVANoRetenido;
   }

   function setTotMntNoFact($TotMntNoFact) {
       $this->TotMntNoFact = $TotMntNoFact;
   }

   function setTotMntPeriodo($TotMntPeriodo) {
       $this->TotMntPeriodo = $TotMntPeriodo;
   }

   function setTotPsjNac($TotPsjNac) {
       $this->TotPsjNac = $TotPsjNac;
   }

   function setTotPsjInt($TotPsjInt) {
       $this->TotPsjInt = $TotPsjInt;
   }

     
}
