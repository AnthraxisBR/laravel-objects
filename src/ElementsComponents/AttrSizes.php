<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrSizes
 *
 * @author gabri
 */
class AttrSizes {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    /**
     * test if is valueXvalue ex: 32x32
     * @param type $sizes
     * @param type $el
     * @return string
     * @throws \Exception
     */
    public function sizes($sizes, $el) {
        $rs = '';
        if (in_array($el, ['Input', 'Select', 'Source'])) {
            $rs .= 'sizes="' . $sizes . '" ';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo sizes', '0003');
        }
        return $rs;
    }

}
