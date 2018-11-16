<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrNovalidate
 *
 * @author gabri
 */
class AttrNovalidate {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function novalidate($el) {
        $rs = '';
        if (in_array($el, ['Form'])) {
            $rs .= 'novalidate';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo novalidate', '0003');
        }
        return $rs;
    }

}
