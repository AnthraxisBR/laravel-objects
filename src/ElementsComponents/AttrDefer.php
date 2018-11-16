<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrDefer
 *
 * @author gabri
 */
class AttrDefer {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function defer($el) {
        $rs = '';
        if (in_array($el, ['Track'])) {
            $rs .= 'defer';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo default', '0003');
        }
        return $rs;
    }

}
