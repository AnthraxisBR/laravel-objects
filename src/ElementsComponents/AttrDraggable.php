<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrDraggable
 *
 * @author gabri
 */
class AttrDraggable {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function draggable($draggable) {
        $rs = '';
        if (in_array($draggable, ['true', 'false'])) {
            $rs .= 'draggable="' . $draggable . '"';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo draggable', '0003');
        }
        return $rs;
    }

}
