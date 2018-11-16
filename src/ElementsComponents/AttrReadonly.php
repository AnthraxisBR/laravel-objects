<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrReadonly
 *
 * @author gabri
 */
class AttrReadonly {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function readonly($el) {
        $rs = '';
        if (in_array($el, ['Input', 'Textarea'])) {
            $rs .= 'readonly';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo readonly', '0003');
        }
        return $rs;
    }

}
