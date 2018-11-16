<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrAutofocus
 *
 * @author gabri
 */
class AttrAutofocus {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function autofocus($el) {
        $rs = '';
        if (in_array($el, ['Button', 'Input', 'Select', 'Textarea'])) {
            $rs .= 'autofocus';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo autofocus', '0003');
        }
        return $rs;
    }

}
