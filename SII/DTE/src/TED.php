<?php
namespace ADICHILE\DTEFACIL\SII\DTE;

require_once('DD.php');
/** 
 * @property DD $DD
*/
class TED{
    public $DD;
    
    function getDD() {
        return $this->DD;
    }

    function setDD() {
        $this->DD = new \DTE_SERIALIZACION\DD();
    }

}