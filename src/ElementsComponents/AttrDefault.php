<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrDefault
 *
 * @author gabri
 */
class AttrDefault {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function default_($el) {
        $rs = '';
        if (in_array($el, ['Track'])) {
            $rs .= 'default';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo default', '0003');
        }
        return $rs;
    }

}
