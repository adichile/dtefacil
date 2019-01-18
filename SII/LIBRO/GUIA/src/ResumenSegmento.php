<?php
namespace ADICHILE\DTEFACIL\SII\LIBRO\GUIA;

/**
 * @property TotTraslado[] $TotTraslado
*/
class ResumenSegmento{
    
    public $TotFolAnulado;// Corresponde al Rut del contribuyente emisor con gui�n y d�gito verificador
    public $TotGuiaAnulada;//Total Guias Anuladas (Anulado=2)
    public $TotGuiaVenta;//Total de Guias Venta
    public $TotMntGuiaVta;//Monto Total de Guias de Venta
    public $TotMntModificado;//Monto Total de Totales Modificados
    public $TotTraslado;//Totales para Diferentes Tipos de Guias No Venta

        function getTotFolAnulado() {
            return $this->TotFolAnulado;
        }

        function getTotGuiaAnulada() {
            return $this->TotGuiaAnulada;
        }

        function getTotGuiaVenta() {
            return $this->TotGuiaVenta;
        }

        function getTotMntGuiaVta() {
            return $this->TotMntGuiaVta;
        }

        function getTotMntModificado() {
            return $this->TotMntModificado;
        }

        function getTotTraslado() {
            return $this->TotTraslado;
        }

        function setTotFolAnulado($TotFolAnulado) {
            $this->TotFolAnulado = $TotFolAnulado;
        }

        function setTotGuiaAnulada($TotGuiaAnulada) {
            $this->TotGuiaAnulada = $TotGuiaAnulada;
        }

        function setTotGuiaVenta($TotGuiaVenta) {
            $this->TotGuiaVenta = $TotGuiaVenta;
        }

        function setTotMntGuiaVta($TotMntGuiaVta) {
            $this->TotMntGuiaVta = $TotMntGuiaVta;
        }

        function setTotMntModificado($TotMntModificado) {
            $this->TotMntModificado = $TotMntModificado;
        }

        function setTotTraslado($TotTraslado) {
            $this->TotTraslado[] = $TotTraslado;
        }

}