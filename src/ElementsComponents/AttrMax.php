<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrMax
 *
 * @author gabri
 */
class AttrMax {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function max($max, $el) {
        $rs = '';
        if (in_array($el, ['Input', 'Meter', 'Progress'])) {
            if (is_numeric($max)) {
                $rs .= 'max="' . $max . '"';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo max', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo max', '0003');
        }
        return $rs;
    }

}
