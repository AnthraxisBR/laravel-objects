<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrSrc
 *
 * @author gabri
 */
class AttrSrc {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function src($src, $el) {
        $rs = '';
        if (in_array($el, ['Audio', 'Embed', 'Iframe', 'Img', 'Input', 'Script', 'Source', 'Track', 'Video'])) {
            if (filter_var($src, FILTER_VALIDATE_URL)) {
                $rs .= 'src="' . $src . '" ';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo src', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo src', '0003');
        }
        return $rs;
    }

}
