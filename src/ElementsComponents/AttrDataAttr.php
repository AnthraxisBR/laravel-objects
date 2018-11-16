<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrDataAttr
 *
 * @author gabri
 */
class AttrDataAttr {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function dataAttr($dataAttr) {
        if (count($dataAttr) > 0) {
            $rs = '';
            foreach ($dataAttr as $attrs) {
                $attr = key($attrs);
                $value = $attrs[$attr];
                $rs .= 'data-' . $attr . '="' . $value . '" ';
            }
            return $rs;
        } else {
            throw new \Exception('O atributo data-attr recebeu um valor inválido' . $attr, '0003');
        }
    }

}
