<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrCols
 *
 * @author gabri
 */
class AttrCols {
    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }
    public function cols($cols, $el) {
        $rs = '';
        if (in_array($el, ['Textarea'])) {
            if (is_numeric($cols)) {
                $rs .= 'cols="' . $cols . '" ';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo cols', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo cols', '0003');
        }
        return $rs;
    }

}
