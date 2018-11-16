<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrCharset
 *
 * @author gabri
 */
class AttrCharset {
    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function charset($accepted, $el) {
        if (in_array($el, ['Meta', 'Script'])) {
            $rs = '';
            if (in_array($accepted, mb_list_encodings())) {
                $rs = 'charset="' . $accepted . '" ';
                return $rs;
            } else {
                throw new \Exception('O elemento informado não pode receber o valor em charset', '0004');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo charset', '0003');
        }
    }

}
