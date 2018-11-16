<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrUsemap
 *
 * @author gabri
 */
class AttrUsemap {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function usemap($usemap, $el) {
        $rs = '';
        if (in_array($el, ['Img', 'Object'])) {
            if (is_string($usemap)) {
                $rs .= 'usemap="' . $usemap . '" ';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo usemap', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo usemap', '0003');
        }
        return $rs;
    }

}
