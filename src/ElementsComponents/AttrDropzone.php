<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrDropzone
 *
 * @author gabri
 */
class AttrDropzone {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function dropzone($dropzone) {
        $rs = '';
        if (in_array($dropzone, ['copy', 'move', 'link'])) {
            $rs .= 'dropzone="' . $dropzone . '"';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo dropzone', '0003');
        }
        return $rs;
    }

}
