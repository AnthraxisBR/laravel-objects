<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrId
 *
 * @author gabri
 */
class AttrId {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function id($id) {
        $rs = '';
        if (is_string($id)) {
            $rs .= 'id="' . $id . '" ';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo id', '0003');
        }
        return $rs;
    }

}
