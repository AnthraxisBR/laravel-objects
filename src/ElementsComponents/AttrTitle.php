<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrTitle
 *
 * @author gabri
 */
class AttrTitle {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function title($title) {
        if (is_string($title)) {
            $rs = 'title="' . $title . '"';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo title', '0003');
        }
        return $rs;
    }

}
