<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrSandbox
 *
 * @author gabri
 */
class AttrSandbox {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function sandbox($el) {
        $rs = '';
        if (in_array($el, ['Iframe'])) {
            $rs .= 'sandbox';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo sandbox', '0003');
        }
        return $rs;
    }

}
