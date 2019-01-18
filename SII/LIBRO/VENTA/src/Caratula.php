<?php
namespace ADICHILE\DTEFACIL\SII\LIBRO\VENTA;

class Caratula{
    public $RutEmisorLibro;// Corresponde al Rut del contribuyente emisor con gui�n y d�gito verificador
    public $RutEnvia;// Corresponde al Rut del usuario autorizado que hace el env�o al SII.
    public $PeriodoTributario;// Per�odo tributario en formato AAAA-MM
    public $FchResol;// <example>AAAA-MM-DD</example> 
    public $NroResol;
    public $TipoOperacion;// <example>VENTA|COMPRA</example> 
    public $TipoLibro;// <example>MENSUAL|ESPECIAL|RECTIFICA</example>
    public $TipoEnvio;// <example>TOTAL|PARCIAL|FINAL|AJUSTE</example> 
    public $NroSegmento;// <example>N�mero de segmento. S�lo si el TIPO ENVIO es PARCIAL</example> 
    public $FolioNotificacion;// Obligatorio si es un tipo de env�o ESPECIAL.
    public $CodAutRec;// #11 - C�digo de Autorizaci�n de Reemplazo de Libro Electr�nico, obtenido por un Representante
        /// Legal de la empresa, para permitir el reemplazo de un libro recibido OK por SII para un
        /// per�odo y
        /// tipo de libro espec�fico
        /// </summary>

    
        function getRutEmisorLibro() {
            return $this->RutEmisorLibro;
        }

        function getRutEnvia() {
            return $this->RutEnvia;
        }

        function getPeriodoTributario() {
            return $this->PeriodoTributario;
        }

        function getFchResol() {
            return $this->FchResol;
        }

        function getNroResol() {
            return $this->NroResol;
        }

        function getTipoOperacion() {
            return $this->TipoOperacion;
        }

        function getTipoLibro() {
            return $this->TipoLibro;
        }

        function getTipoEnvio() {
            return $this->TipoEnvio;
        }

        function getNroSegmento() {
            return $this->NroSegmento;
        }

        function getFolioNotificacion() {
            return $this->FolioNotificacion;
        }

        function getCodAutRec() {
            return $this->CodAutRec;
        }

        function setRutEmisorLibro($RutEmisorLibro) {
            $this->RutEmisorLibro = $RutEmisorLibro;
        }

        function setRutEnvia($RutEnvia) {
            $this->RutEnvia = $RutEnvia;
        }

        function setPeriodoTributario($PeriodoTributario) {
            $this->PeriodoTributario = $PeriodoTributario;
        }

        function setFchResol($FchResol) {
            $this->FchResol = $FchResol;
        }

        function setNroResol($NroResol) {
            $this->NroResol = $NroResol;
        }

        function setTipoOperacion($TipoOperacion) {
            $this->TipoOperacion = $TipoOperacion;
        }

        function setTipoLibro($TipoLibro) {
            $this->TipoLibro = $TipoLibro;
        }

        function setTipoEnvio($TipoEnvio) {
            $this->TipoEnvio = $TipoEnvio;
        }

        function setNroSegmento($NroSegmento) {
            $this->NroSegmento = $NroSegmento;
        }

        function setFolioNotificacion($FolioNotificacion) {
            $this->FolioNotificacion = $FolioNotificacion;
        }

        function setCodAutRec($CodAutRec) {
            $this->CodAutRec = $CodAutRec;
        }


}