<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrColspan
 *
 * @author gabri
 */
class AttrColspan {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function colspan($colspan, $el) {
        $rs = '';
        if (in_array($el, ['TH', 'Td'])) {
            if (is_numeric($colspan)) {
                $rs .= 'colspan="' . $colspan . '" ';
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo colspan', '0003');
        }
        return $rs;
    }

}
