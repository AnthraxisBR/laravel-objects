<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrRequired
 *
 * @author gabri
 */
class AttrRequired {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function required($el) {
        $rs = '';
        if (in_array($el, ['Input', 'Select', 'Textarea'])) {
            $rs .= 'required';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo required', '0003');
        }
        return $rs;
    }

}
