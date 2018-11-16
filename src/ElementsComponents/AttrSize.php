<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrSize
 *
 * @author gabri
 */
class AttrSize {
    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function size($size, $el) {
        $rs = '';
        if (in_array($el, ['Input', 'Select'])) {
            if (is_numeric($size)) {
                $rs .= 'size="' . $size . '" ';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo size', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo size', '0003');
        }
        return $rs;
    }

}
