<?php
class Detalle{
    public $TpoDoc;
    public $Emisor;
    public $NroDoc; // Folio del documento
    public $Anulado;
        /// <summary>
        /// #4 - Folio Anulado
        /// </summary>
        /// <example>
        /// = A (Anulado). Se registra en los documentos electr�nicos cuando se ha anulado un folio que
        /// no se ha enviado al SII. Aplica para todos los documentos no electr�nicos que se anulen.
        /// Los documentos anulados s�lo deben informar el ?Tipo de Documento?, el ?Folio (Numero de
        /// Documento)? y este campo. No se contabiliza aqu� si un documento electr�nico ha sido anulado,
        /// posterior al env�o al SII, con Una Nota de Cr�dito o Debito Electr�nica. Esos documentos deben
        /// ser informados como emitidos, con todos los datos que correspondan
        /// </example>    
    public $Operacion;
        /// <summary>
        /// #5 - OPERACION
        /// </summary>
        /// <example>
        /// S�lo en env�os de Ajuste
        /// 1= Agrega
        /// 2= Elimina
        /// Si no se indica, se supone que es 1, folio a agregar
        /// </example>    
    public $TpoImp;
        /// <summary>
        /// #6 - TIPO DE IMPUESTO
        /// </summary>
        /// <remarks>
        /// 1: IVA 
        /// 2: Ley 18.211. Se usa para documentos de Zona Franca. Tipo de Documento 108 (SRF) 
        /// Si se omite se asume 1. 
        /// </remarks>    
    public $TasaImp;
        /// <summary>
        /// #7 - Tasa de impuesto
        /// </summary>
        /// <example>19.00</example>    
    public $NumInt;
        /// <summary>
        /// #8 - NUMERO INTERNO
        /// </summary>
        /// <example>N�mero del comprobante contable </example>    
    public $FchDoc;
        /// <summary>
        /// #9 - FECHA DEL DOCUMENTO
        /// </summary>
        /// <example>AAAA-MM-DD (a�o , mes , d�a, separados por guiones)</example>    
    public $CdgSIISucur;
        /// <summary>
        /// #10 - CODIGO SUCURSAL
        /// </summary>
        /// <example>
        /// Sucursal donde se emiti� el documento. C�digo num�rico entregado por el SII, que identifica
        /// </example>    
    public $RUTDoc;
        /// <summary>
        /// #11 - RUT ASOCIADO (CLIENTE , PROVEEDOR)
        /// </summary>
        /// <example>
        /// Rut del proveedor. Con gui�n y d�gito.
        /// </example>    
    public $RznSoc;
        /// <summary>
        /// #12 - NOMBRE O RAZON SOCIAL
        /// </summary>
        /// <example>
        /// Obligatorio s�lo en los documentos NO ELECTR�NICOS
        /// </example>    
    public $MntExe;
        /// <summary>
        /// #13 - MONTO EXENTO O NO GRAVADO
        /// </summary>
        /// <remarks>
        /// Puede ser negativo s�lo si el tipo de documento es Liquidaci�n o Liquidaci�n Factura 
        /// </remarks>    
    public $MntNeto;
        /// <summary>
        /// #14 - MONTO NETO
        /// </summary>
        /// <remarks>
        /// Todos los documentos. Incluye el Monto ACTIVOFIJO. 
        /// Puede ser negativo s�lo si el tipo de documento es Liquidaci�n o Liquidaci�n Factura 
        /// </remarks>    
    public $MntIVA;
        /// <summary>
        /// #15 - MONTO IVA (RECUPERABLE)
        /// </summary>
        /// <example>
        /// IVA con derecho a cr�dito 
        /// En el caso de una compra con cr�dito Empresa constructora, se debe registrar el 100% del IVA. 
        /// El IVA total de la operaci�n se descompone en: 
        /// Tasa IVA * Monto neto = Monto IVA Recuperable + IVA no recuperable + IVA uso com�n 
        /// Si en un documento no hay IVA recuperable debe venir con cero. 
        /// Puede ser negativo s�lo si el tipo de documento es Liquidaci�n o Liquidaci�n Factura 
        /// </example>    
    public $MntActivoFijo;
        /// <summary>
        /// #16 - MONTO NETO ACTIVO FIJO 
        /// </summary>
        /// <remarks>
        /// Monto NETO activo fijo. Este monto est� incluido en el Campo Monto Neto. Se registra adicionalmente en este 
        /// campo. 
        /// </remarks>    
    public $MntIVAActivoFijo;
        /// <summary>
        /// #17 - IVA ACTIVO FIJO
        /// </summary>
        /// <remarks>
        /// Monto IVA activo fijo. 
        /// Cuando hay compra de Activo Fijo, el valor del IVA, se registra en el campo ?IVA Recuperable y tambi�n 
        /// opcionalmente en este campo. 
        /// </remarks>    
    
    public $IVANoRec;// C�digos 18 - 19
    public $IVAUsoComun;
        /// <summary>
        /// #20 - IVA USO COMUN
        /// </summary>
        /// <remarks>
        /// Compras que, a diferencia de los dos casos anteriores, est�n destinadas en parte a a ventas afectas y en parte a 
        /// ventas exentas. Se indica en este campo porque la determinaci�n de la parte exenta y afecta solo se puede
        /// </remarks>    
    public $OtrosImp;// C�digos 21,22,23
    public $MntSinCred;
        /// <summary>
        /// #24 - Impuestos sin derecho a cr�dito 
        /// </summary>
        /// <remarks>
        /// Totalizar el impuesto registrado en documentos que no da derecho a cr�dito para ese contribuyente 
        /// Art 37 Letras a, b y c + Art 37 letras e, h, I, l+ Art 37 Letras j+ Art 42.+ Impuestos diesel (si no hay derecho al cr�dito) 
        /// + Impuesto gasolina(siempre) 
        /// Este dato se incluye para asegurar la cuadratura con el Monto Total 
        /// </remarks>    
    public $MntTotal;
        /// <summary>
        /// #25 - MONTO TOTAL
        /// </summary>
        /// <remarks>
        /// Monto Neto + Monto Exento + IVA recuperable + IVA Uso com�n + IVA no recuperable + IVA adicional + IVA 
        /// anticipado + Garant�a envases - IVA retenido parcial y total ? Impuesto Retenido Factura de Inicio + Impuestos 
        /// adicionales + IVA Margen comercializaci�n + Impuestos sin derecho a cr�dito. 
        /// Puede ser negativo s�lo si el tipo de documento es Liquidaci�n o Liquidaci�n Factura 
        /// </remarks>   
    public $IVANoRetenido;
        /// <summary>
        /// #26 - IVA no retenido
        /// </summary>
        /// <remarks>
        /// Corresponde a la diferencia entre el IVA total y el IVA Retenido parcial . 
        /// Se usa s�lo en Facturas de Compra emitidas y Notas de Cr�dito y D�bito asociadas
        /// </remarks>    
    public $TabPuros;
        /// <summary>
        /// #27 - TABACOS (Cigarros puros) 
        /// </summary>
        /// <remarks>
        /// ART. 3 DL 828
        /// </remarks>
    public $TabCigarrillos;
        /// <summary>
        /// #28 - TABACOS (Cigarrillos)
        /// </summary>
        /// <remarks>
        /// ART. 4 DL 828
        /// </remarks>
    public $TabElaborado;
        /// <summary>
        /// #29 - TABACOS (Tabaco elaborado)  
        /// </summary>
        /// <remarks>
        /// ART. 5 DL 828
        /// </remarks>
    public $ImpVehiculo;
        /// <summary>
        /// #30 - Impuesto a Los Veh�culos Autom�viles 
        /// </summary>
        /// <remarks>
        /// Art 64 (46) D.L.824/74. Conjuntos de partes o Piezas para desarmadur�a o Ensamblaje y de autom�viles 
        /// semiterminados 
        /// </remarks>  
    
        function getTpoDoc() {
            return $this->TpoDoc;
        }

        function getEmisor() {
            return $this->Emisor;
        }

        function getNroDoc() {
            return $this->NroDoc;
        }

        function getAnulado() {
            return $this->Anulado;
        }

        function getOperacion() {
            return $this->Operacion;
        }

        function getTpoImp() {
            return $this->TpoImp;
        }

        function getTasaImp() {
            return $this->TasaImp;
        }

        function getNumInt() {
            return $this->NumInt;
        }

        function getFchDoc() {
            return $this->FchDoc;
        }

        function getCdgSIISucur() {
            return $this->CdgSIISucur;
        }

        function getRUTDoc() {
            return $this->RUTDoc;
        }

        function getRznSoc() {
            return $this->RznSoc;
        }

        function getMntExe() {
            return $this->MntExe;
        }

        function getMntNeto() {
            return $this->MntNeto;
        }

        function getMntIVA() {
            return $this->MntIVA;
        }

        function getMntActivoFijo() {
            return $this->MntActivoFijo;
        }

        function getMntIVAActivoFijo() {
            return $this->MntIVAActivoFijo;
        }

        function getIVANoRec() {
            return $this->IVANoRec;
        }

        function getIVAUsoComun() {
            return $this->IVAUsoComun;
        }

        function getOtrosImp() {
            return $this->OtrosImp;
        }

        function getMntSinCred() {
            return $this->MntSinCred;
        }

        function getMntTotal() {
            return $this->MntTotal;
        }

        function getIVANoRetenido() {
            return $this->IVANoRetenido;
        }

        function getTabPuros() {
            return $this->TabPuros;
        }

        function getTabCigarrillos() {
            return $this->TabCigarrillos;
        }

        function getTabElaborado() {
            return $this->TabElaborado;
        }

        function getImpVehiculo() {
            return $this->ImpVehiculo;
        }

        function setTpoDoc($TpoDoc) {
            $this->TpoDoc = $TpoDoc;
        }

        function setEmisor($Emisor) {
            $this->Emisor = $Emisor;
        }

        function setNroDoc($NroDoc) {
            $this->NroDoc = $NroDoc;
        }

        function setAnulado($Anulado) {
            $this->Anulado = $Anulado;
        }

        function setOperacion($Operacion) {
            $this->Operacion = $Operacion;
        }

        function setTpoImp($TpoImp) {
            $this->TpoImp = $TpoImp;
        }

        function setTasaImp($TasaImp) {
            $this->TasaImp = $TasaImp;
        }

        function setNumInt($NumInt) {
            $this->NumInt = $NumInt;
        }

        function setFchDoc($FchDoc) {
            $this->FchDoc = $FchDoc;
        }

        function setCdgSIISucur($CdgSIISucur) {
            $this->CdgSIISucur = $CdgSIISucur;
        }

        function setRUTDoc($RUTDoc) {
            $this->RUTDoc = $RUTDoc;
        }

        function setRznSoc($RznSoc) {
            $this->RznSoc = $RznSoc;
        }

        function setMntExe($MntExe) {
            $this->MntExe = $MntExe;
        }

        function setMntNeto($MntNeto) {
            $this->MntNeto = $MntNeto;
        }

        function setMntIVA($MntIVA) {
            $this->MntIVA = $MntIVA;
        }

        function setMntActivoFijo($MntActivoFijo) {
            $this->MntActivoFijo = $MntActivoFijo;
        }

        function setMntIVAActivoFijo($MntIVAActivoFijo) {
            $this->MntIVAActivoFijo = $MntIVAActivoFijo;
        }

        function setIVANoRec($IVANoRec) {
            $this->IVANoRec[] = $IVANoRec;
        }

        function setIVAUsoComun($IVAUsoComun) {
            $this->IVAUsoComun = $IVAUsoComun;
        }

        function setOtrosImp($OtrosImp) {
            $this->OtrosImp[] = $OtrosImp;
        }

        function setMntSinCred($MntSinCred) {
            $this->MntSinCred = $MntSinCred;
        }

        function setMntTotal($MntTotal) {
            $this->MntTotal = $MntTotal;
        }

        function setIVANoRetenido($IVANoRetenido) {
            $this->IVANoRetenido = $IVANoRetenido;
        }

        function setTabPuros($TabPuros) {
            $this->TabPuros = $TabPuros;
        }

        function setTabCigarrillos($TabCigarrillos) {
            $this->TabCigarrillos = $TabCigarrillos;
        }

        function setTabElaborado($TabElaborado) {
            $this->TabElaborado = $TabElaborado;
        }

        function setImpVehiculo($ImpVehiculo) {
            $this->ImpVehiculo = $ImpVehiculo;
        }


}