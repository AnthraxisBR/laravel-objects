<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrStep
 *
 * @author gabri
 */
class AttrStep {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function step($step, $el) {
        $rs = '';
        if (in_array($el, ['Input'])) {
            if (is_numeric($step)) {
                $rs .= 'step="' . $step . '" ';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo step', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo step', '0003');
        }
        return $rs;
    }

}
