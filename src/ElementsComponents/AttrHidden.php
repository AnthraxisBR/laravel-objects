<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrHidden
 *
 * @author gabri
 */
class AttrHidden {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function hidden() {
        $rs = '';
        $rs .= 'download';
        return $rs;
    }

}
