<?php
namespace ADICHILE\DTEFACIL\SII\BOLETAS\REPORTE_CONSUMO_FOLIOS;

/** 
 * @property DocumentoConsumoFolios $DocumentoConsumoFolios Esta propiedad referencia a la clase Documento
*/
class ConsumoFolios{
    public $DocumentoConsumoFolios;
    
    function getDocumentoConsumoFolios() {
        return $this->DocumentoConsumoFolios;
    }

    function setDocumento() {
        $this->DocumentoConsumoFolios = new DocumentoConsumoFolios();
    }  

}