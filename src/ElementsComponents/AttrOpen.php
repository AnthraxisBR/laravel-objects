<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrOpen
 *
 * @author gabri
 */
class AttrOpen {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function open($el) {
        $rs = '';
        if (in_array($el, ['Details'])) {
            $rs .= 'open';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo open', '0003');
        }
        return $rs;
    }

}
