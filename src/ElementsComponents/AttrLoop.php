<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrLoop
 *
 * @author gabri
 */
class AttrLoop {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function loop($el) {
        $rs = '';
        if (in_array($el, ['Audio', 'Video'])) {
            $rs .= 'loop';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo loop', '0003');
        }
        return $rs;
    }

}
