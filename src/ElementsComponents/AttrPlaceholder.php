<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrPlaceholder
 *
 * @author gabri
 */
class AttrPlaceholder {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function placeholder($placeholder, $el) {
        $rs = '';
        if (in_array($el, ['Input', 'Textarea'])) {
            if (is_string($placeholder, '')) {
                $rs .= 'placeholder="' . $placeholder . '"';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo placeholder', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo placeholder', '0003');
        }
        return $rs;
    }

}
