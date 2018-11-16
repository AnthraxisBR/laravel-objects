<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrMultiple
 *
 * @author gabri
 */
class AttrMultiple {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function multiple($el) {
        $rs = '';
        if (in_array($el, ['Input', 'Select'])) {
            $rs .= 'multiple';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo multiple', '0003');
        }
        return $rs;
    }

}
