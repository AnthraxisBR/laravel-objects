<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrContentEditable
 *
 * @author gabri
 */
class AttrContentEditable {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function contenteditable($contenteditable) {
        $rs = '';
        if (in_array(strtolower($contenteditable), ['true', 'false'])) {
            $rs .= 'contenteditable="' . $contenteditable . '" ';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo contenteditable', '0003');
        }
        return $rs;
    }

}
