<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrStyle
 *
 * @author gabri
 */
class AttrStyle {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function style($style) {
        $rs = 'style="' . $style . '"';
        return $rs;
    }

}
