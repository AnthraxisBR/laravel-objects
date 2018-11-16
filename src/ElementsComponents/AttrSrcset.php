<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrSrcset
 *
 * @author gabri
 */
class AttrSrcset {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function srcset($srcset, $el) {
        $rs = '';
        if (in_array($el, ['Img', 'Source'])) {
            if (filter_var($srcset, FILTER_VALIDATE_URL)) {
                $rs .= 'srcset="' . $srcset . '" ';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo srcset', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo srcset', '0003');
        }
        return $rs;
    }

}
