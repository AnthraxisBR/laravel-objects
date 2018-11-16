<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrHeight
 *
 * @author gabri
 */
class AttrHeight {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function height($height, $el) {
        $rs = '';
        if (in_array($el, ['Canvas', 'Embed', 'Iframe', 'Img', 'Input', 'Object', 'Video'])) {
            if (is_numeric($height)) {
                $rs .= 'height="' . $height . '"';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo height', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo height', '0003');
        }
        return $rs;
    }

}
