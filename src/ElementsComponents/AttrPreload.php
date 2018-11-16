<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrPreload
 *
 * @author gabri
 */
class AttrPreload {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function preload($preload, $el) {
        $rs = '';
        if (in_array($el, ['Video', 'Audio'])) {
            if (n_array($preload, ['auto', 'metadata', 'none'])) {
                $rs .= 'preload="' . $preload . '" ';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo preload', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo preload', '0003');
        }
        return $rs;
    }

}
