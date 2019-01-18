<?php
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
        /// Suma del monto IVA recuperable de todos los documentos registrados en el detalle. Si el tipo de 
        /// impuesto es 2, significa cr�dito por Ley 18.211
   public $TotOpActivoFijo;// Cantidad de documentos en que se ha registrado Montos del tipo especificado en el campo siguiente
   public $TotMntActivoFijo;// Si la compra es de Activo Fijo, se debe indicar la parte del Monto Neto que corresponde a Activo Fijo.
   public $TotMntIVAActivoFijo;// Suma del monto IVA de todos los documentos registrados en el detalle. 
   public $TotIVANoRec;
   public $TotOpIVAUsoComun;// Cantidad de documentos en que se ha registrado Montos del tipo especificado en la tabla siguiente. 
   public $TotIVAUsoComun;// Suma. Si el tipo de impuesto es 2, significa cr�dito por Ley 18.211. 
   public $FctProp;/// Informa sobre el factor que se aplica al IVA Uso Com�n. Se calcula como total para el 
        /// per�odo, pero se aplica por tipo de documento.
   public $TotCredIVAUsoComun;// Factor proporcionalidad IVA * Total IVA Uso com�n
   public $TotOtrosImp;
   public $TotImpSinCredito;// Totaliza los valores del detalle
   public $TotMntTotal;// Totales del per�odo
   public $TotIVANoRetenido;
   public $TotTabPuros;// ART. 3 DL 828
   public $TotTabCigarrillos;// ART. 4 DL 828
   public $TotTabElaborado;// ART. 5 DL 828
   public $TotImpVehiculo;/// Art 64 (46) D.L.824/74. Conjuntos de partes o Piezas para desarmadur�a o Ensamblaje y de 
        /// autom�viles semiterminados 
   
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

        function getTotOpActivoFijo() {
            return $this->TotOpActivoFijo;
        }

        function getTotMntActivoFijo() {
            return $this->TotMntActivoFijo;
        }

        function getTotMntIVAActivoFijo() {
            return $this->TotMntIVAActivoFijo;
        }

        function getTotIVANoRec() {
            return $this->TotIVANoRec;
        }

        function getTotOpIVAUsoComun() {
            return $this->TotOpIVAUsoComun;
        }

        function getTotIVAUsoComun() {
            return $this->TotIVAUsoComun;
        }

        function getFctProp() {
            return $this->FctProp;
        }

        function getTotCredIVAUsoComun() {
            return $this->TotCredIVAUsoComun;
        }

        function getTotOtrosImp() {
            return $this->TotOtrosImp;
        }

        function getTotImpSinCredito() {
            return $this->TotImpSinCredito;
        }

        function getTotMntTotal() {
            return $this->TotMntTotal;
        }

        function getTotIVANoRetenido() {
            return $this->TotIVANoRetenido;
        }

        function getTotTabPuros() {
            return $this->TotTabPuros;
        }

        function getTotTabCigarrillos() {
            return $this->TotTabCigarrillos;
        }

        function getTotTabElaborado() {
            return $this->TotTabElaborado;
        }

        function getTotImpVehiculo() {
            return $this->TotImpVehiculo;
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

        function setTotOpActivoFijo($TotOpActivoFijo) {
            $this->TotOpActivoFijo = $TotOpActivoFijo;
        }

        function setTotMntActivoFijo($TotMntActivoFijo) {
            $this->TotMntActivoFijo = $TotMntActivoFijo;
        }

        function setTotMntIVAActivoFijo($TotMntIVAActivoFijo) {
            $this->TotMntIVAActivoFijo = $TotMntIVAActivoFijo;
        }

        function setTotIVANoRec($TotIVANoRec) {
            $this->TotIVANoRec[] = $TotIVANoRec;
        }

        function setTotOpIVAUsoComun($TotOpIVAUsoComun) {
            $this->TotOpIVAUsoComun = $TotOpIVAUsoComun;
        }

        function setTotIVAUsoComun($TotIVAUsoComun) {
            $this->TotIVAUsoComun = $TotIVAUsoComun;
        }

        function setFctProp($FctProp) {
            $this->FctProp = $FctProp;
        }

        function setTotCredIVAUsoComun($TotCredIVAUsoComun) {
            $this->TotCredIVAUsoComun = $TotCredIVAUsoComun;
        }

        function setTotOtrosImp($TotOtrosImp) {
            $this->TotOtrosImp[] = $TotOtrosImp;
        }

        function setTotImpSinCredito($TotImpSinCredito) {
            $this->TotImpSinCredito = $TotImpSinCredito;
        }

        function setTotMntTotal($TotMntTotal) {
            $this->TotMntTotal = $TotMntTotal;
        }

        function setTotIVANoRetenido($TotIVANoRetenido) {
            $this->TotIVANoRetenido = $TotIVANoRetenido;
        }

        function setTotTabPuros($TotTabPuros) {
            $this->TotTabPuros = $TotTabPuros;
        }

        function setTotTabCigarrillos($TotTabCigarrillos) {
            $this->TotTabCigarrillos = $TotTabCigarrillos;
        }

        function setTotTabElaborado($TotTabElaborado) {
            $this->TotTabElaborado = $TotTabElaborado;
        }

        function setTotImpVehiculo($TotImpVehiculo) {
            $this->TotImpVehiculo = $TotImpVehiculo;
        }
    
}
