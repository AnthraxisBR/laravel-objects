<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrIsmap
 *
 * @author gabri
 */
class AttrIsmap {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function ismap($el) {
        $rs = '';
        if (in_array($el, ['Img'])) {
            $rs .= 'ismap';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo img', '0003');
        }
        return $rs;
    }

}
