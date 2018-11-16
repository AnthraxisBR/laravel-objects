<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrReversed
 *
 * @author gabri
 */
class AttrReversed {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function reversed($el) {
        $rs = '';
        if (in_array($el, ['Ol'])) {
            $rs .= 'reversed';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo reversed', '0003');
        }
        return $rs;
    }

}
