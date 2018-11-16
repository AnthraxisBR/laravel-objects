<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrContent
 *
 * @author gabri
 */
class AttrContent {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function content($content, $el) {
        $rs = '';
        if (in_array($el, ['Meta'])) {
            if (is_string($content)) {
                $rs .= 'content="' . $content . '" ';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo content', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo content', '0003');
        }
        return $rs;
    }

}
