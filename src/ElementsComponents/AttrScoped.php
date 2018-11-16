<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrScoped
 *
 * @author gabri
 */
class AttrScoped {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function scoped($el) {
        $rs = '';
        if (in_array($el, ['Style'])) {
            $rs .= 'scoped';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo scoped', '0003');
        }
        return $rs;
    }

}
