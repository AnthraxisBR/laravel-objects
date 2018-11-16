<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrList
 *
 * @author gabri
 */
class AttrList {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function list_($list, $el) {
        $rs = '';
        if (in_array($el, ['Input'])) {

            if (is_string($list)) {
                $rs .= 'list="' . $list . '"';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo list', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo lists', '0003');
        }
        return $rs;
    }

}
