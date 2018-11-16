<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrStart
 *
 * @author gabri
 */
class AttrStart {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function start($start, $el) {
        $rs = '';
        if (in_array($el, ['Ol'])) {
            if (is_numeric($start)) {
                $rs .= 'start="' . $start . '" ';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo start', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo start', '0003');
        }
        return $rs;
    }

}
