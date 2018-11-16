<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrLabel
 *
 * @author gabri
 */
class AttrLabel {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function label($label, $el) {
        $rs = '';
        if (in_array($el, ['Track', 'Option', 'Optgroup'])) {

            if (is_string($label)) {
                $rs .= 'label="' . $label . '"';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo label', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo label', '0003');
        }
        return $rs;
    }

}
