<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrSrcdoc
 *
 * @author gabri
 */
class AttrSrcdoc {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function srcdoc($srcdoc, $el) {
        $rs = '';
        if (in_array($el, ['Iframe'])) {
            if ($srcdoc != strip_tags($srcdoc)) {
                $rs .= 'srcdoc="' . $srcdoc . '" ';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo srcdoc', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo srcdoc', '0003');
        }
        return $rs;
    }

}
