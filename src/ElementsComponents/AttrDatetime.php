<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrDatetime
 *
 * @author gabri
 */
class AttrDatetime {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function datetime($datetime, $el) {
        $rs = '';
        if (in_array($el, ['Del', 'Ins', 'Time'])) {
            if (is_string($datetime)) {
                $rs .= 'datetime="' . $datetime . '" ';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo datetime', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo datetime', '0003');
        }
        return $rs;
    }

}
