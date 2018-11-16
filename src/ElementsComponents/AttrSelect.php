<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrSelect
 *
 * @author gabri
 */
class AttrSelect {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function select($el) {
        $rs = '';
        if (in_array($el, ['Select'])) {
            $rs .= 'select';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo select', '0003');
        }
        return $rs;
    }

}
