<?php
namespace ADICHILE\DTEFACIL\SII\BOLETAS\REPORTE_CONSUMO_FOLIOS;
class Caratula{
    public $RutEmisor;// Corresponde al Rut del contribuyente emisor con gui�n y d�gito verificador
    public $RutEnvia;// Corresponde al Rut del usuario autorizado que hace el env�o al SII.
    public $FchResol;// <example>AAAA-MM-DD</example> 
    public $NroResol;
    public $FchInicio;
    public $FchFinal;
    public $Correlativo;
    public $SecEnvio;
    public $TmstFirmaEnv;// <example>TOTAL|PARCIAL|FINAL|AJUSTE Indica que es un Envio con Informacion para Corregir o Complementar un Libro Previamente Enviado</example> 
    
    function getRutEmisor() {
        return $this->RutEmisor;
    }

    function getRutEnvia() {
        return $this->RutEnvia;
    }

    function getFchResol() {
        return $this->FchResol;
    }

    function getNroResol() {
        return $this->NroResol;
    }

    function getFchInicio() {
        return $this->FchInicio;
    }

    function getFchFinal() {
        return $this->FchFinal;
    }

    function getCorrelativo() {
        return $this->Correlativo;
    }

    function getSecEnvio() {
        return $this->SecEnvio;
    }

    function getTmstFirmaEnv() {
        return $this->TmstFirmaEnv;
    }

    function setRutEmisor($RutEmisor) {
        $this->RutEmisor = $RutEmisor;
    }

    function setRutEnvia($RutEnvia) {
        $this->RutEnvia = $RutEnvia;
    }

    function setFchResol($FchResol) {
        $this->FchResol = $FchResol;
    }

    function setNroResol($NroResol) {
        $this->NroResol = $NroResol;
    }

    function setFchInicio($FchInicio) {
        $this->FchInicio = $FchInicio;
    }

    function setFchFinal($FchFinal) {
        $this->FchFinal = $FchFinal;
    }

    function setCorrelativo($Correlativo) {
        $this->Correlativo = $Correlativo;
    }

    function setSecEnvio($SecEnvio) {
        $this->SecEnvio = $SecEnvio;
    }

    function setTmstFirmaEnv($TmstFirmaEnv) {
        $this->TmstFirmaEnv = $TmstFirmaEnv;
    }


}