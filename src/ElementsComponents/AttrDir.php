<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrDir
 *
 * @author gabri
 */
class AttrDir {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function dir($dir) {
        $rs = '';
        if (in_array(strtolower($dir), ['ltr', 'rtl', 'auto'])) {
            $rs .= 'dir="' . $dir . '"';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo dir', '0003');
        }
        return $rs;
    }

}
