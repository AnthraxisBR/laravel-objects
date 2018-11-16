<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrAutoplay
 *
 * @author gabri
 */
class AttrAutoplay {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function autoplay($el) {
        $rs = '';
        if (in_array($el, ['Audio', 'Video'])) {
            $rs .= 'autoplay';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo autoplay', '0003');
        }
        return $rs;
    }

}
