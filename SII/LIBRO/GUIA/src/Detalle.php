<?php
namespace ADICHILE\DTEFACIL\SII\LIBRO\GUIA;

class Detalle{
    public $Folio;//Identificador del Documento
    public $Anulado;//Indica que el Estado del Documento es Anulado 1: Anulado Previo a su Envio al SII - 2: Anulado Posterior a su Envio al SII - 3: Productos Recibidos Parcialmente
    public $Operacion;//Indica si Agrega o Elimina Informacion 1: Agrega - 2: Elimina
    public $TpoOper;//Tipo de Operacion Realizada 1: Operacion Constituye Venta - 2: Ventas por Efectuar - 3: Consignaciones
	//4: Productos en Demostracion - 5: Traslados Internos - 6: Otros Traslados No Venta - 7: Guias de Devolucion
    public $FchDoc;//Fecha del Documento (AAAA-MM-DD)
    public $RUTDoc;//RUT del Contraparte en la Operaci�n Comercial
    public $RznSoc;//Razon Social de la Contraparte del Documento max length 50
    public $MntNeto;//Monto Neto del Documento
    public $TasaImp;//Tasa de IVA Utilizada en la Operacion
    public $IVA;//Monto de IVA de la Operacion
    public $MntTotal;//Monto Total del Documento
    public $MntModificado;//Monto Total Modificado
    public $TpoDocRef;//Tipo de Documento de Referencia
    public $FolioDocRef;//Folio del Documento de Referencia
    public $FchDocRef;//Fecha del Documento de Referencia (AAAA-MM-DD)
    
    function getFolio() {
        return $this->Folio;
    }

    function getAnulado() {
        return $this->Anulado;
    }

    function getOperacion() {
        return $this->Operacion;
    }

    function getTpoOper() {
        return $this->TpoOper;
    }

    function getFchDoc() {
        return $this->FchDoc;
    }

    function getRUTDoc() {
        return $this->RUTDoc;
    }

    function getRznSoc() {
        return $this->RznSoc;
    }

    function getMntNeto() {
        return $this->MntNeto;
    }

    function getTasaImp() {
        return $this->TasaImp;
    }

    function getIVA() {
        return $this->IVA;
    }

    function getMntTotal() {
        return $this->MntTotal;
    }

    function getMntModificado() {
        return $this->MntModificado;
    }

    function getTpoDocRef() {
        return $this->TpoDocRef;
    }

    function getFolioDocRef() {
        return $this->FolioDocRef;
    }

    function getFchDocRef() {
        return $this->FchDocRef;
    }

    function setFolio($Folio) {
        $this->Folio = $Folio;
    }

    function setAnulado($Anulado) {
        $this->Anulado = $Anulado;
    }

    function setOperacion($Operacion) {
        $this->Operacion = $Operacion;
    }

    function setTpoOper($TpoOper) {
        $this->TpoOper = $TpoOper;
    }

    function setFchDoc($FchDoc) {
        $this->FchDoc = $FchDoc;
    }

    function setRUTDoc($RUTDoc) {
        $this->RUTDoc = $RUTDoc;
    }

    function setRznSoc($RznSoc) {
        $this->RznSoc = $RznSoc;
    }

    function setMntNeto($MntNeto) {
        $this->MntNeto = $MntNeto;
    }

    function setTasaImp($TasaImp) {
        $this->TasaImp = $TasaImp;
    }

    function setIVA($IVA) {
        $this->IVA = $IVA;
    }

    function setMntTotal($MntTotal) {
        $this->MntTotal = $MntTotal;
    }

    function setMntModificado($MntModificado) {
        $this->MntModificado = $MntModificado;
    }

    function setTpoDocRef($TpoDocRef) {
        $this->TpoDocRef = $TpoDocRef;
    }

    function setFolioDocRef($FolioDocRef) {
        $this->FolioDocRef = $FolioDocRef;
    }

    function setFchDocRef($FchDocRef) {
        $this->FchDocRef = $FchDocRef;
    }
    
}