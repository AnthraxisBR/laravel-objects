<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrRows
 *
 * @author gabri
 */
class AttrRows {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function rows($rows, $el) {
        $rs = '';
        if (in_array($el, ['Textarea'])) {
            if (is_numeric($rows)) {
                $rs .= 'rows="' . $rows . '" ';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo rows', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo rows', '0003');
        }
        return $rs;
    }

}
