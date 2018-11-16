<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrAccesKey
 *
 * @author gabri
 */
class AttrAccesKey {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function acceskey($acceskey) {
        $rs = 'acceskey="' . $acceskey . '" ';
        return $rs;
    }

}
