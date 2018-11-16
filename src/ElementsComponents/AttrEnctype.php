<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrEnctype
 *
 * @author gabri
 */
class AttrEnctype {
    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }
    public function enctype($enctype, $el) {
        $rs = '';
        if (in_array($el, ['Form'])) {

            if (in_array($enctype, ['application/x-www-form-urlencoded', 'multipart/form-data', 'text/plain'])) {
                $rs .= 'enctype="' . $enctype . '"';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo enctype', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo enctype', '0003');
        }
        return $rs;
    }
}
