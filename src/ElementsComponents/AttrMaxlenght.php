<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrMaxlenght
 *
 * @author gabri
 */
class AttrMaxlenght {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function maxlengh($maxlenght, $el) {
        $rs = '';
        if (in_array($el, ['Input', 'Textarea'])) {
            if (is_numeric($maxlenght)) {
                $rs .= 'maxlenght="' . $maxlenght . '"';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo maxlenght', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo maxlenght', '0003');
        }
        return $rs;
    }

}
