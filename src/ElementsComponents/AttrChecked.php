<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrChecked
 *
 * @author gabri
 */
class AttrChecked {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function checked($el) {
        $rs = '';
        if (in_array($el, ['Input'])) {
            $rs .= 'checked';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo checked', '0003');
        }
        return $rs;
    }

}
