<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrForm
 *
 * @author gabri
 */
class AttrForm {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function form($form, $el) {
        $rs = '';
        if (in_array($el, ['Button', 'Fieldset', 'Input', 'Label', 'Meter', 'Object', 'Output', 'Select', 'Textarea'])) {
            $rs .= 'form="' . $form . '';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo form', '0003');
        }
        return $rs;
    }

}
