<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrCite
 *
 * @author gabri
 */
class AttrCite {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function cite($cite, $el) {
        $rs = '';
        if (in_array($el, ['Blockquote', 'Del', 'Ins', 'Q'])) {
            if (filter_var($cite, FILTER_VALIDATE_URL)) {
                $rs .= 'cite="' . $cite . '" ';
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo cite', '0003');
        }
        return $rs;
    }

}
