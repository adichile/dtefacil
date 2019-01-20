<?php
namespace ADICHILE\DTEFACIL\SII\DTE;

/** 
 * @property IdDoc $IdDoc 
 * @property Emisor $Emisor 
 * @property Receptor $Receptor
 * @property Transporte $Transporte
 * @property Totales $Totales
 * @property OtraMoneda $OtraMoneda
*/
class Encabezado{
    public $IdDoc; // Representa la zona de descripcion del DTE actual
    public $Emisor; // Representa la zona del emisor del DTE actual
    public $RUTMandante;//RUT a Cuenta de Quien se Emite el DTE
    public $Receptor; // Representa la zona del Receptor del DTE actual
    public $RUTSolicita;//RUT que solicita el DTE en Venta a Publico
    public $Transporte; // Representa la zona del transporte
    public $Totales; // Representa la zona totales del DTE actual
    public $OtraMoneda;
        
    function getIdDoc() {
        return $this->IdDoc;
    }

    function getEmisor() {
        return $this->Emisor;
    }

    function getRUTMandante(){
        return $this->RUTMandante;
    }

    function getReceptor() {
        return $this->Receptor;
    }

    function getRUTSolicita() {
        return $this->RUTSolicita;
    }    

    function getTransporte() {
        return $this->Transporte;
    }

    function getTotales() {
        return $this->Totales;
    }
    
    function getOtraMoneda(){
        return $this->OtraMoneda;
    }

    function setIdDoc() {
        $this->IdDoc = new IdDoc();
    }

    function setEmisor() {
        $this->Emisor = new Emisor();
    }

    function setRUTMandante($RUTMandante){
        $this->RUTMandante = $RUTMandante;
    }

    function setReceptor() {
        $this->Receptor = new Receptor();
    }

    function setRUTSolicita($RUTSolicita) {
        $this->RUTSolicita = $RUTSolicita;
    }    

    function setTransporte() {
        $this->Transporte = new Transporte();
    }

    function setTotales() {
        $this->Totales = new Totales();
    }
    
    function setOtraMoneda(){
        $this->OtraMoneda = new OtraMoneda();
    }
    
}