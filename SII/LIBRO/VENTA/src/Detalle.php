<?php
namespace ADICHILE\DTEFACIL\SII\LIBRO\COMPRA;

/** 
 * @property OtrosImp $OtrosImp   
*/
class Detalle{
    public $TpoDoc;
    public $Emisor;
        /// <summary>
        /// #2 - EXCEPCION EMISOR/RECEPTOR
        /// </summary>
        /// <example>
        /// Ver codificaci�n en el punto 4 de este
        /// documento. No se registran en el detalle los
        /// documentos tipo resumen C�digos (35, 38, 39, 41, 105, 500, 501, 919, 920, 922 y 924).
        /// Todos los documentos, incluso los anulados
        /// </example>    
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
    public $IndServicio;
        /// <summary>
        /// #8 - Indicador Servicio peri�dico
        /// </summary>
        /// <example>
        /// 1: Facturaci�n de servicios peri�dicos domiciliarios
        /// 2: Facturaci�n de otros servicios peri�dicos
        /// 3: Facturaci�n de servicios no peri�dicos
        /// Obligatorio en caso de servicios peri�dicos domiciliarios. Si es 1, el documento se debe
        /// registrar en el mes en que se devenga el impuesto (seg�n fecha de vencimiento)
        /// </example>
    public $IndSinCosto;
        /// <summary>
        /// #9 - Indicador Venta sin costo
        /// </summary>
        /// <example>
        /// S�lo Facturas
        /// 1: Entrega gratuita
        /// </example>     
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
        /// #12 - RUT ASOCIADO (CLIENTE , PROVEEDOR)
        /// </summary>
        /// <example>
        /// Corresponde al rut del receptor excepto en facturas de compra
        /// y Liquidaciones Facturas recibidas como mandante,
        /// que corresponde al Rut del emisor. Con gui�n y d�gito verificador
        /// </example>  
    public $RznSoc;
        /// <summary>
        /// #13 - NOMBRE O RAZON SOCIAL
        /// </summary>
        /// <example>
        /// Es obligatorio en los documentos no electr�nicos. En el resto es opcional
        /// </example>
    public $NumId;
        /// <summary>
        /// #14 - N�mero identificador del Receptor extranjero
        /// </summary>
        /// <example>
        /// Para factura de exportaci�n:
        /// Corresponde al n�mero o c�digo de identificaci�n del receptor
        /// extranjero. Se deben incluir guiones y d�gitos verificadores
        /// </example>
    public $Nacionalidad;
        /// <summary>
        /// #15 - Nacionalidad del receptor extranjero
        /// </summary>
        /// <example>
        /// Para factura de exportaci�n:
        /// Corresponde a la nacionalidad del extranjero, de acuerdo al
        /// c�digo de Pa�s indicado en Tabla de Pa�ses de Aduana. 
        /// </example>
    public $TpoDocRef;
        /// <summary>
        /// #16 - Tipo de documento de referencia
        /// </summary>
        /// <example>
        /// Este campo s�lo se utiliza para Notas
        /// de Cr�dito que anulan una Factura o una Nota de
        /// D�bito en forma completa. Se debe indicar el tipo de documento anulado. S�lo es obligatorio
        /// si se ha emitido en forma excepcional una Nota de Cr�dito no electr�nica que anula una
        /// Factura Electr�nica. En otros casos es opcional
        /// </example>
    public $FolioDocRef;// #17 - Folio anulado que ya se ha enviado al SII. S�lo v�lido si viene campo anterior
    public $MntExe;// #18 - MONTO EXENTO O NO GRAVADO   
    public $MntNeto;// #19 - MONTO NETO
    public $MntIVA;
        /// <summary>
        /// #20 - MONTO IVA
        /// </summary>
        /// <example>
        /// Es un dato obligatorio y debe corresponder al total de IVA del documento.
        /// Casos especiales
        /// a) En los documentos exentos, el campo debe ir con un cero.
        /// b) En Notas de Cr�dito fuera de plazo para rebajar el d�bito; se debe registrar el IVA
        /// registrado en el documento. Este mismo dato se debe registrar en el campo siguiente,
        /// para considerar que ese IVA no se debe descontar.
        /// c) En casos de Venta por cuenta de terceros, se debe registrar el IVA expresado en el
        /// documento en este campo, en forma obl
        /// igatoria. Opcionalmente, el dato tambi�n se
        /// puede registrar en los campos IVA Terceros y/o IVA propio.
        /// d) Puede ser negativo s�lo si el tipo de documento es Liquidaci�n o Liquidaci�n Factura
        /// </example>    
    public $IVAFueraPlazo;
        /// <summary>
        /// #21 - IVA fuera de plazo
        /// </summary>
        /// <example>
        /// S�lo en Notas de Cr�dito que no deben descontar el d�bito por estar fuera de plazo.
        /// En las Notas de Cr�dito que est�n fuera de plazo para rebajar el d�bito, se debe anotar el
        /// valor completo del IVA en el campo anterior, pero el valor se debe registrar en este campo
        /// con el fin de indicar el IVA que el emisor no debe descontar del d�bito.
        /// </example>    
    public $IVAPropio;
        /// <summary>
        /// #22 - IVA Propio
        /// </summary>
        /// <example>
        /// Cuando se efect�an ventas por cuenta de terceros, se registra la parte del IVA que es propia.
        /// Puede ser negativo s�lo si el tipo de documento es Liquidaci�n o Liquidaci�n
        /// - Factura 
        /// </example>
    public $IVATerceros;
        /// <summary>
        /// #23 - IVA Terceros
        /// </summary>
        /// <example>
        /// Cuando se efect�an ventas por cuenta de terceros, se registra la parte del IVA que es
        /// responsabilidad de terceros y que se traspasar� por una Liquidaci�n.
        /// Monto IVA = IVA propio + IVA Terceros
        /// Puede ser negativo s�lo si el tipo de documento es Liquidaci�n
        /// - Factura
        /// </example>    
    public $Ley18211;// #24 - Ley 18211 - Impuesto Zona Franca
    public $OtrosImp;// #25 #26 #27 - Otros Impuestos
    public $IVARetTotal;
        /// <summary>
        /// #28 - IVA Retenido Total
        /// </summary>
        /// <example>
        /// S�lo Facturas de compra recibidas cod (45, 46) y Notas de Cr�dito y D�bito asociadas.
        /// Se genera seg�n la tasa del IVA Retenido.
        /// - Si la tasa de retenci�n es por el Total del IVA, el valor de la retenci�n debe estar en este campo
        /// </example>
    public $IVARetParcial;
        /// <summary>
        /// #29 - IVA Retenido parcial
        /// </summary>
        /// <example>
        /// S�lo Facturas de compra recibidas cod. (45, 46) y Notas de Cr�dito y D�bito asociadas.
        /// Se genera seg�n la tasa del IVA Retenido.
        /// - Si la tasa de retenci�n es menor al Total del IVA, el valor de la retenci�n debe ir en este campo
        /// </example>
    public $CredEC;
        /// <summary>
        /// #30 - Credito 65% empresas Constructoras
        /// </summary>
        /// <example>
        /// Seg�n Art�culo 21 del Decreto Ley N� 910/75
        /// </example>
    public $DepEnvase;// #31 - Garant�a Dep.Envases
    public $Liquidaciones;
        ////////////////////////////////////////////////
        //// Aqui van tablbla de liquidaciones
        //// #32 #33 #34 #35
        ////////////////////////////////////////////////    
    public $MntTotal;/// #36 - MONTO TOTAL
    public $IVANoRetenido;
        /// <summary>
        /// #37 - IVA no retenido
        /// </summary>
        /// <example>
        /// IVA no retenido = Monto IVA - IVA retenido parcial - IVA Retenido Total
        /// S�lo facturas de compra recibidas c�d. (45,46) y Notas de Cr�dito y D�bido asociadas.
        /// </example>
    public $MntNoFact;
        /// <summary>
        /// #38 - Total Monto no Facturable
        /// </summary>
        /// <example>
        /// Valor puede ser negativo
        /// </example>
    public $MntPeriodo;
        /// <summary>
        /// #39 - Total Monto Periodo
        /// </summary>
        /// <example>
        /// Valor puede ser negativo
        /// </example>
    public $PsjNac;
        /// <summary>
        /// #40 - Venta de Pasajes transporte nacional
        /// </summary>
        /// <example>
        /// S�lo ventas con Factura Exenta
        /// </example>
    public $PsjInt;
        /// <summary>
        /// #41 - Venta de Pasajes transporte internacional
        /// </summary>
        /// <example>
        /// S�lo ventas con Factura Exenta
        /// </example>    
    
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

        function getIndServicio() {
            return $this->IndServicio;
        }

        function getIndSinCosto() {
            return $this->IndSinCosto;
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

        function getNumId() {
            return $this->NumId;
        }

        function getNacionalidad() {
            return $this->Nacionalidad;
        }

        function getTpoDocRef() {
            return $this->TpoDocRef;
        }

        function getFolioDocRef() {
            return $this->FolioDocRef;
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

        function getIVAFueraPlazo() {
            return $this->IVAFueraPlazo;
        }

        function getIVAPropio() {
            return $this->IVAPropio;
        }

        function getIVATerceros() {
            return $this->IVATerceros;
        }

        function getLey18211() {
            return $this->Ley18211;
        }

        function getOtrosImp() {
            return $this->OtrosImp;
        }

        function getIVARetTotal() {
            return $this->IVARetTotal;
        }

        function getIVARetParcial() {
            return $this->IVARetParcial;
        }

        function getCredEC() {
            return $this->CredEC;
        }

        function getDepEnvase() {
            return $this->DepEnvase;
        }

        function getLiquidaciones() {
            return $this->Liquidaciones;
        }

        function getMntTotal() {
            return $this->MntTotal;
        }

        function getIVANoRetenido() {
            return $this->IVANoRetenido;
        }

        function getMntNoFact() {
            return $this->MntNoFact;
        }

        function getMntPeriodo() {
            return $this->MntPeriodo;
        }

        function getPsjNac() {
            return $this->PsjNac;
        }

        function getPsjInt() {
            return $this->PsjInt;
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

        function setIndServicio($IndServicio) {
            $this->IndServicio = $IndServicio;
        }

        function setIndSinCosto($IndSinCosto) {
            $this->IndSinCosto = $IndSinCosto;
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

        function setNumId($NumId) {
            $this->NumId = $NumId;
        }

        function setNacionalidad($Nacionalidad) {
            $this->Nacionalidad = $Nacionalidad;
        }

        function setTpoDocRef($TpoDocRef) {
            $this->TpoDocRef = $TpoDocRef;
        }

        function setFolioDocRef($FolioDocRef) {
            $this->FolioDocRef = $FolioDocRef;
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

        function setIVAFueraPlazo($IVAFueraPlazo) {
            $this->IVAFueraPlazo = $IVAFueraPlazo;
        }

        function setIVAPropio($IVAPropio) {
            $this->IVAPropio = $IVAPropio;
        }

        function setIVATerceros($IVATerceros) {
            $this->IVATerceros = $IVATerceros;
        }

        function setLey18211($Ley18211) {
            $this->Ley18211 = $Ley18211;
        }

        function setOtrosImp($OtrosImp) {
            $this->OtrosImp[] = $OtrosImp;
        }

        function setIVARetTotal($IVARetTotal) {
            $this->IVARetTotal = $IVARetTotal;
        }

        function setIVARetParcial($IVARetParcial) {
            $this->IVARetParcial = $IVARetParcial;
        }

        function setCredEC($CredEC) {
            $this->CredEC = $CredEC;
        }

        function setDepEnvase($DepEnvase) {
            $this->DepEnvase = $DepEnvase;
        }

        function setLiquidaciones($Liquidaciones) {
            $this->Liquidaciones[] = $Liquidaciones;
        }

        function setMntTotal($MntTotal) {
            $this->MntTotal = $MntTotal;
        }

        function setIVANoRetenido($IVANoRetenido) {
            $this->IVANoRetenido = $IVANoRetenido;
        }

        function setMntNoFact($MntNoFact) {
            $this->MntNoFact = $MntNoFact;
        }

        function setMntPeriodo($MntPeriodo) {
            $this->MntPeriodo = $MntPeriodo;
        }

        function setPsjNac($PsjNac) {
            $this->PsjNac = $PsjNac;
        }

        function setPsjInt($PsjInt) {
            $this->PsjInt = $PsjInt;
        }
    
}