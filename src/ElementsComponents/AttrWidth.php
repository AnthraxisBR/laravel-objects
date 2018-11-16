<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrWidth
 *
 * @author gabri
 */
class AttrWidth {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function width($width, $el) {
        $rs = '';
        if (in_array($el, ['Canvas', 'Embed', 'Iframe', 'Img', 'Input', 'Object', 'Video'])) {
            if (is_numeric($width)) {
                $rs .= 'width="' . $width . '"';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo width', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo width', '0003');
        }
        return $rs;
    }

}
