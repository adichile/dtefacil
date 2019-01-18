<?php
namespace ADICHILE\DTEFACIL\SII\DTE;

class IdDoc
{
    public $TipoDTE;
    public $Folio;
    public $FchEmis;
    public $IndNoRebaja;
    public $TipoDespacho;
    public $IndTraslado;
    public $TpoImpresion;
    public $IndServicio;
    public $MntBruto;
    public $TpoTranCompra;
    public $TpoTranVenta;
    public $FmaPago;
    public $FmaPagExp;
    public $FchCancel;
    public $MntCancel;
    public $SaldoInsol;
    public $MntPagos;
    public $PeriodoDesde;
    public $PeriodoHasta;
    public $MedioPago;
    public $TipoCtaPago;
    public $NumCtaPago;
    public $BcoPago;
    public $TermPagoCdg;
    public $TermPagoGlosa;
    public $TermPagoDias;
    public $FchVenc;

    /**
     * @return mixed
     */
    public function getTpoTranCompra()
    {
        return $this->TpoTranCompra;
    }

    /**
     * @param mixed $TpoTranCompra
     */
    public function setTpoTranCompra($TpoTranCompra)
    {
        $this->TpoTranCompra = $TpoTranCompra;
    }

    /**
     * @return mixed
     */
    public function getTpoTranVenta()
    {
        return $this->TpoTranVenta;
    }

    /**
     * @param mixed $TpoTranVenta
     */
    public function setTpoTranVenta($TpoTranVenta)
    {
        $this->TpoTranVenta = $TpoTranVenta;
    }

    function getTipoDTE()
    {
        return $this->TipoDTE;
    }

    function getFolio()
    {
        return $this->Folio;
    }

    function getFchEmis()
    {
        return $this->FchEmis;
    }

    function getIndNoRebaja()
    {
        return $this->IndNoRebaja;
    }

    function getTipoDespacho()
    {
        return $this->TipoDespacho;
    }

    function getIndTraslado()
    {
        return $this->IndTraslado;
    }

    function getTpoImpresion()
    {
        return $this->TpoImpresion;
    }

    function getIndServicio()
    {
        return $this->IndServicio;
    }

    function getMntBruto()
    {
        return $this->MntBruto;
    }

    function getFmaPago()
    {
        return $this->FmaPago;
    }

    function getFmaPagExp()
    {
        return $this->FmaPagExp;
    }

    function getFchCancel()
    {
        return $this->FchCancel;
    }

    function getMntCancel()
    {
        return $this->MntCancel;
    }

    function getSaldoInsol()
    {
        return $this->SaldoInsol;
    }

    function getMntPagos()
    {
        return $this->MntPagos;
    }

    function getPeriodoDesde()
    {
        return $this->PeriodoDesde;
    }

    function getPeriodoHasta()
    {
        return $this->PeriodoHasta;
    }

    function getMedioPago()
    {
        return $this->MedioPago;
    }

    function getTipoCtaPago()
    {
        return $this->TipoCtaPago;
    }

    function getNumCtaPago()
    {
        return $this->NumCtaPago;
    }

    function getBcoPago()
    {
        return $this->BcoPago;
    }

    function getTermPagoCdg()
    {
        return $this->TermPagoCdg;
    }

    function getTermPagoGlosa()
    {
        return $this->TermPagoGlosa;
    }

    function getTermPagoDias()
    {
        return $this->TermPagoDias;
    }

    function getFchVenc()
    {
        return $this->FchVenc;
    }

    function setTipoDTE($TipoDTE)
    {
        $this->TipoDTE = $TipoDTE;
    }

    function setFolio($folio)
    {
        $this->Folio = $folio;
    }

    function setFchEmis($FchEmis)
    {
        $this->FchEmis = $FchEmis;
    }

    function setIndNoRebaja($IndNoRebaja)
    {
        $this->IndNoRebaja = $IndNoRebaja;
    }

    function setTipoDespacho($TipoDespacho)
    {
        $this->TipoDespacho = $TipoDespacho;
    }

    function setIndTraslado($IndTraslado)
    {
        $this->IndTraslado = $IndTraslado;
    }

    function setTpoImpresion($TpoImpresion)
    {
        $this->TpoImpresion = $TpoImpresion;
    }

    function setIndServicio($IndServicio)
    {
        $this->IndServicio = $IndServicio;
    }

    function setMntBruto($MntBruto)
    {
        $this->MntBruto = $MntBruto;
    }

    function setFmaPago($FmaPago)
    {
        $this->FmaPago = $FmaPago;
    }

    function setFmaPagExp($FmaPagExp)
    {
        $this->FmaPagExp = $FmaPagExp;
    }

    function setFchCancel($FchCancel)
    {
        $this->FchCancel = $FchCancel;
    }

    function setMntCancel($MntCancel)
    {
        $this->MntCancel = $MntCancel;
    }

    function setSaldoInsol($SaldoInsol)
    {
        $this->SaldoInsol = $SaldoInsol;
    }

    function setMntPagos($MntPagos)
    {
        $this->MntPagos = $MntPagos;
    }

    function setPeriodoDesde($PeriodoDesde)
    {
        $this->PeriodoDesde = $PeriodoDesde;
    }

    function setPeriodoHasta($PeriodoHasta)
    {
        $this->PeriodoHasta = $PeriodoHasta;
    }

    function setMedioPago($MedioPago)
    {
        $this->MedioPago = $MedioPago;
    }

    function setTipoCtaPago($TipoCtaPago)
    {
        $this->TipoCtaPago = $TipoCtaPago;
    }

    function setNumCtaPago($NumCtaPago)
    {
        $this->NumCtaPago = $NumCtaPago;
    }

    function setBcoPago($BcoPago)
    {
        $this->BcoPago = $BcoPago;
    }

    function setTermPagoCdg($TermPagoCdg)
    {
        $this->TermPagoCdg = $TermPagoCdg;
    }

    function setTermPagoGlosa($TermPagoGlosa)
    {
        $this->TermPagoGlosa = $TermPagoGlosa;
    }

    function setTermPagoDias($TermPagoDias)
    {
        $this->TermPagoDias = $TermPagoDias;
    }

    function setFchVenc($FchVenc)
    {
        $this->FchVenc = $FchVenc;
    }

}