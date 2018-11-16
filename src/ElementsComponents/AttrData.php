<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrData
 *
 * @author gabri
 */
class AttrData {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function data($data, $el) {
        $rs = '';
        if (in_array($el, ['Object'])) {
            if (filter_var($data, FILTER_VALIDATE_URL)) {
                $rs .= 'data="' . $data . '" ';
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo data', '0003');
        }
        return $rs;
    }

}
