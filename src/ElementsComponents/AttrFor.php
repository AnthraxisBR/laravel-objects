<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrFor
 *
 * @author gabri
 */
class AttrFor {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function for_($for, $el) {
        $rs = '';
        if (in_array($el, ['Label', 'Output'])) {
            if (is_string($for)) {
                $rs .= 'for="' . $for . '"';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo for', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo for', '0003');
        }
        return $rs;
    }

}
