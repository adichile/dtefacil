<?php
namespace ADICHILE\DTEFACIL\SII\LIBRO\GUIA;

class Caratula{
    public $RutEmisorLibro;// Corresponde al Rut del contribuyente emisor con gui�n y d�gito verificador
    public $RutEnvia;// Corresponde al Rut del usuario autorizado que hace el env�o al SII.
    public $PeriodoTributario;// Per�odo tributario en formato AAAA-MM
    public $FchResol;// <example>AAAA-MM-DD</example> 
    public $NroResol;
    public $TipoLibro;// <example>ESPECIAL</example>
    public $TipoEnvio;// <example>TOTAL|PARCIAL|FINAL|AJUSTE Indica que es un Envio con Informacion para Corregir o Complementar un Libro Previamente Enviado</example> 
    public $NroSegmento;// <example>N�mero de segmento. S�lo si el TIPO ENVIO es PARCIAL</example> 
    public $FolioNotificacion;// Obligatorio si es un tipo de env�o ESPECIAL.
    
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

}