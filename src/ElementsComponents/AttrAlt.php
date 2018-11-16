<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrAlt
 *
 * @author gabri
 */
class AttrAlt {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function alt($alt, $el) {
        $rs = '';
        if (in_array($el, ['Area', 'Input', 'Img'])) {
            $rs .= 'alt="' . $alt . '" ';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo alt', '0003');
        }
        return $rs;
    }

}
