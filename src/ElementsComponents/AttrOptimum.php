<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrOptimum
 *
 * @author gabri
 */
class AttrOptimum {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function optimum($optimum, $el) {
        $rs = '';
        if (in_array($el, ['Meter'])) {
            if (is_numeric($optimum)) {
                $rs .= 'optimum="' . $optimum . '"';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo optimum', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo optimum', '0003');
        }
        return $rs;
    }

}
