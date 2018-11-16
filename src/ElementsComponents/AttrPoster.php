<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrPoster
 *
 * @author gabri
 */
class AttrPoster {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function poster($poster, $el) {
        $rs = '';
        if (in_array($el, ['Video'])) {
            if (filter_var($poster, FILTER_VALIDATE_URL)) {
                $rs .= 'poster="' . $poster . '" ';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo poster', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo poster', '0003');
        }
        return $rs;
    }

}
