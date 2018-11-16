<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrRowspan
 *
 * @author gabri
 */
class AttrRowspan {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function rowspan($rowspan, $el) {
        $rs = '';
        if (in_array($el, ['Th', 'Td'])) {
            if (is_numeric($rowspan)) {
                $rs .= 'rowspan="' . $rowspan . '" ';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo rowspan', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo rowspan', '0003');
        }
        return $rs;
    }

}
