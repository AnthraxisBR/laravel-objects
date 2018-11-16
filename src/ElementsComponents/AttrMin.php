<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrMin
 *
 * @author gabri
 */
class AttrMin {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function min($min, $el) {
        $rs = '';
        if (in_array($el, ['Input', 'Meter'])) {
            if (is_numeric($min) or date($min)) {
                $rs .= 'min="' . $min . '"';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo min', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo min', '0003');
        }
        return $rs;
    }

}
