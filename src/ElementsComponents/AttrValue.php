<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrValue
 *
 * @author gabri
 */
class AttrValue {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function value($value, $el) {
        $rs = '';
        if (in_array($el, ['Button', 'Input', 'Li', 'Option', 'Progress', 'Param'])) {
            if (is_string($value)) {
                $rs .= 'value="' . $value . '" ';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo value', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo value', '0003');
        }
        return $rs;
    }

}
