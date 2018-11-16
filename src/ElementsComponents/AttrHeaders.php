<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrHeaders
 *
 * @author gabri
 */
class AttrHeaders {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function headers($headers, $el) {
        $rs = '';
        if (in_array($el, ['Th', 'Td'])) {
            if (is_string($headers)) {
                $rs .= 'headers="' . $headers . '"';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo headers', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo headers', '0003');
        }
        return $rs;
    }

}
