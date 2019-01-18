<?php
namespace ADICHILE\DTEFACIL\SII\LIBRO\GUIA;

class Totales{
    public $TpoTraslado;//2: Venta por Efectuar - 3: Consignaciones - 4: Productos en Demostracion - 5 : Traslados Internos - 6: Otros Traslados No Venta - 7: Guias de Devolucion     
    public $CantGuia;//Cantidad de Guias del Tipo
    public $MntGuia;// Monto de Guias del Tipo - Maximo 10 Digitos
    
    function getTpoTraslado() {
        return $this->TpoTraslado;
    }

    function getCantGuia() {
        return $this->CantGuia;
    }

    function getMntGuia() {
        return $this->MntGuia;
    }

    function setTpoTraslado($TpoTraslado) {
        $this->TpoTraslado = $TpoTraslado;
    }

    function setCantGuia($CantGuia) {
        $this->CantGuia = $CantGuia;
    }

    function setMntGuia($MntGuia) {
        $this->MntGuia = $MntGuia;
    }
    
}
