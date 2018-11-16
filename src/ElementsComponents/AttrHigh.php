<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrHigh
 *
 * @author gabri
 */
class AttrHigh {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function high($high, $el) {
        $rs = '';
        if (in_array($el, ['Meter'])) {
            if (is_numeric($high)) {
                $rs .= 'high="' . $high . '"';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo high', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo high', '0003');
        }
        return $rs;
    }

}
