<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrPattern
 *
 * @author gabri
 */
class AttrPattern {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function pattern($pattern, $el) {
        $rs = '';
        if (in_array($el, ['Input'])) {
            if (preg_match($pattern, '') == (int) 0) {
                $rs .= 'pattern="' . $pattern . '"';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo pattern', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo pattern', '0003');
        }
        return $rs;
    }

}
