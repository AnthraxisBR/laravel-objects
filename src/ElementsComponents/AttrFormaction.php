<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrFormaction
 *
 * @author gabri
 */
class AttrFormaction {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function formaction($formaction, $el) {
        $rs = '';
        if (in_array($el, ['Button', 'Input'])) {
            $rs .= 'formaction="' . $formaction . '';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo formactions', '0003');
        }
        return $rs;
    }

}
