<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrMethod
 *
 * @author gabri
 */
class AttrMethod {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function method($method, $el) {
        $rs = '';
        if (in_array($el, ['Form'])) {

            if (in_array($method, ['get', 'post'])) {
                $rs .= 'method="' . $method . '"';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo method', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo method', '0003');
        }
        return $rs;
    }

}
