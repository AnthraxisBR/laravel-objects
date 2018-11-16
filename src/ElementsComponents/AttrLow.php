<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrLow
 *
 * @author gabri
 */
class AttrLow {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function low($low, $el) {
        $rs = '';
        if (in_array($el, ['Meter'])) {
            if (is_numeric($low)) {
                $rs .= 'low="' . $low . '"';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo low', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo low  ', '0003');
        }
        return $rs;
    }

}
