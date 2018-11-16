<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrHreflang
 *
 * @author gabri
 */
class AttrHreflang {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function hreflang($hreflang, $el) {
        $rs = '';
        if (in_array($el, ['A', 'Area', 'Link'])) {
            if (is_string($hreflang)) {
                $rs .= 'hreflang="' . $hreflang . '" ';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo hreflang', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo hreflang', '0003');
        }
        return $rs;
    }

}
