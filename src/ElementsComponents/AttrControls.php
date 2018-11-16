<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrControls
 *
 * @author gabri
 */
class AttrControls {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function controls($el) {
        $rs = '';
        if (in_array($el, ['Audio', 'Video'])) {
            $rs .= 'controls';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo controls', '0003');
        }
        return $rs;
    }

}
