<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrShape
 *
 * @author gabri
 */
class AttrShape {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function shape($shape, $el) {
        $rs = '';
        if (in_array($el, ['Area'])) {
            if (in_array($shape, ['default', 'rect', 'circle', 'poly'])) {
                $rs .= 'scope="' . $shape . '" ';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo scope', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo scope', '0003');
        }
        return $rs;
    }

}
