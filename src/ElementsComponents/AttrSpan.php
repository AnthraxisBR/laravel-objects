<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrSpan
 *
 * @author gabri
 */
class AttrSpan {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function span($span, $el) {
        $rs = '';
        if (in_array($el, ['Col', 'Colgroup'])) {
            if (is_numeric($span)) {
                $rs .= 'span="' . $span . '" ';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo span', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo span', '0003');
        }
        return $rs;
    }

}
