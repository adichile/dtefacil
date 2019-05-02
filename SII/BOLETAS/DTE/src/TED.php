<?php
namespace ADICHILE\DTEFACIL\SII\BOLETAS\DTE;
/** 
 * @property DD $DD
*/
class TED{
    public $DD;
    
    function getDD() {
        return $this->DD;
    }

    function setDD() {
        $this->DD = new DD();
    }

}