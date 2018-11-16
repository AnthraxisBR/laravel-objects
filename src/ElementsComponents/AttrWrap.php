<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrWrap
 *
 * @author gabri
 */
class AttrWrap {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function wrap($wrap, $el) {
        $rs = '';
        if (in_array($el, ['Textarea'])) {
            if (in_array($wrap, ['soft', 'hard'])) {
                $rs .= 'wrap="' . $wrap . '" ';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo wrap', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo wrap ', '0003');
        }
        return $rs;
    }

}
