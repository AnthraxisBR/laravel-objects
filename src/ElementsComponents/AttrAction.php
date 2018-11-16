<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrAction
 *
 * @author gabri
 */
class AttrAction {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function action($action, $el) {
        $rs = '';
        if (in_array($el, ['Form'])) {
            $rs .= 'action="' . $action . '" ';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo action', '0003');
        }
        return $rs;
    }

}
