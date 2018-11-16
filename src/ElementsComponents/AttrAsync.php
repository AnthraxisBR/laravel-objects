<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrAsync
 *
 * @author gabri
 */
class AttrAsync {
    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function async($el) {
        $rs = '';
        if (in_array($el, ['Script'])) {
            $rs .= 'async';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo async', '0003');
        }
        return $rs;
    }
}
