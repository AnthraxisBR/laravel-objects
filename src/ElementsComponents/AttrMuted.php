<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrMuted
 *
 * @author gabri
 */
class AttrMuted {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function muted($el) {
        $rs = '';
        if (in_array($el, ['Audio', 'Video'])) {
            $rs .= 'muted';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo muted', '0003');
        }
        return $rs;
    }

}
