<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrDisabled
 *
 * @author gabri
 */
class AttrDisabled {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function disabled($el) {
        $rs = '';
        if (in_array($el, ['Button', 'Fieldset', 'Input', 'Optgroup', 'Option', 'Select', 'Textarea'])) {
            $rs .= 'disabled';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo disabled', '0003');
        }
        return $rs;
    }

}
