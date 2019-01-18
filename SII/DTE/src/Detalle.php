<?php
namespace ADICHILE\DTEFACIL\SII\DTE;

/** 
 * @property CdgItem $CdgItem Esta propiedad referencia a la clase Documento
 * @property Retenedor $Retenedor Esta propiedad referencia a la clase Documento
*/
class Detalle{
    public $NroLinDet;
    public $CdgItem;
    public $TpoDocLiq;
    public $IndExe;
    public $Retenedor;
    public $NmbItem;
    public $DscItem;
    public $QtyRef;
    public $UnmdRef;
    public $PrcRef;
    public $QtyItem;
    public $FchElabor;
    public $FchVencim;
    public $UnmdItem;
    public $PrcItem;
    public $DescuentoPct;
    public $DescuentoMonto;
    public $RecargoPct;
    public $RecargoMonto;
    public $CodImpAdic;
    public $MontoItem;
    
    function getNroLinDet() {
        return $this->NroLinDet;
    }

    function getCdgItem() {
        return $this->CdgItem;
    }

    function getTpoDocLiq() {
        return $this->TpoDocLiq;
    }

    function getIndExe() {
        return $this->IndExe;
    }

    function getIndAgente() {
        return $this->IndAgente;
    }

    function getMntBaseFaena() {
        return $this->MntBaseFaena;
    }

    function getMntMargComer() {
        return $this->MntMargComer;
    }

    function getPrcConsFinal() {
        return $this->PrcConsFinal;
    }

    function getNmbItem() {
        return $this->NmbItem;
    }

    function getDscItem() {
        return $this->DscItem;
    }

    function getQtyRef() {
        return $this->QtyRef;
    }

    function getUnmdRef() {
        return $this->UnmdRef;
    }

    function getPrcRef() {
        return $this->PrcRef;
    }

    function getQtyItem() {
        return $this->QtyItem;
    }

    function getFchElabor() {
        return $this->FchElabor;
    }

    function getFchVencim() {
        return $this->FchVencim;
    }

    function getUnmdItem() {
        return $this->UnmdItem;
    }

    function getPrcItem() {
        return $this->PrcItem;
    }

    function getDescuentoPct() {
        return $this->DescuentoPct;
    }

    function getDescuentoMonto() {
        return $this->DescuentoMonto;
    }

    function getRecargoPct() {
        return $this->RecargoPct;
    }

    function getRecargoMonto() {
        return $this->RecargoMonto;
    }

    function getCodImpAdic() {
        return $this->CodImpAdic;
    }

    function getMontoItem() {
        return $this->MontoItem;
    }

    function setNroLinDet($NroLinDet) {
        $this->NroLinDet = $NroLinDet;
    }

    function setCdgItem() {
        $this->CdgItem = new CdgItem();
    }

    function setTpoDocLiq($TpoDocLiq) {
        $this->TpoDocLiq = $TpoDocLiq;
    }

    function setIndExe($IndExe) {
        $this->IndExe = $IndExe;
    }

    function setIndAgente($IndAgente) {
        $this->IndAgente = $IndAgente;
    }

    function setMntBaseFaena($MntBaseFaena) {
        $this->MntBaseFaena = $MntBaseFaena;
    }

    function setMntMargComer($MntMargComer) {
        $this->MntMargComer = $MntMargComer;
    }

    function setPrcConsFinal($PrcConsFinal) {
        $this->PrcConsFinal = $PrcConsFinal;
    }

    function setNmbItem($NmbItem) {
        $this->NmbItem = $NmbItem;
    }

    function setDscItem($DscItem) {
        $this->DscItem = $DscItem;
    }

    function setQtyRef($QtyRef) {
        $this->QtyRef = $QtyRef;
    }

    function setUnmdRef($UnmdRef) {
        $this->UnmdRef = $UnmdRef;
    }

    function setPrcRef($PrcRef) {
        $this->PrcRef = $PrcRef;
    }

    function setQtyItem($QtyItem) {
        $this->QtyItem = $QtyItem;
    }

    function setFchElabor($FchElabor) {
        $this->FchElabor = $FchElabor;
    }

    function setFchVencim($FchVencim) {
        $this->FchVencim = $FchVencim;
    }

    function setUnmdItem($UnmdItem) {
        $this->UnmdItem = $UnmdItem;
    }

    function setPrcItem($PrcItem) {
        $this->PrcItem = $PrcItem;
    }

    function setDescuentoPct($DescuentoPct) {
        $this->DescuentoPct = $DescuentoPct;
    }

    function setDescuentoMonto($DescuentoMonto) {
        $this->DescuentoMonto = $DescuentoMonto;
    }

    function setRecargoPct($RecargoPct) {
        $this->RecargoPct = $RecargoPct;
    }

    function setRecargoMonto($RecargoMonto) {
        $this->RecargoMonto = $RecargoMonto;
    }

    function setCodImpAdic($CodImpAdic) {
        $this->CodImpAdic[] = $CodImpAdic;
    }

    function setMontoItem($MontoItem) {
        $this->MontoItem = $MontoItem;
    }

    
}