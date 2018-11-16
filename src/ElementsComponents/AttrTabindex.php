<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrTabindex
 *
 * @author gabri
 */
class AttrTabindex {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function tabindex($tabindex) {
        $rs = '';
        if (is_numeric($tabindex)) {
            $rs .= 'tabindex="' . $tabindex . '" ';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo tabindex', '0003');
        }
        return $rs;
    }

}
