<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrAutocomplete
 *
 * @author gabri
 */
class AttrAutocomplete {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function autocomplete($action, $el) {
        $rs = '';
        if (in_array($el, ['Form', 'Input'])) {
            if (in_array(strtolower($el), ['on', 'on'])) {
                $rs .= 'autocomplete="' . $action . '" ';
            } else {

                throw new \Exception('O elemento informado não pode receber o atributo autocomplete', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo autocomplete', '0003');
        }
        return $rs;
    }

}
