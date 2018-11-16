<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrSrclang
 *
 * @author gabri
 */
class AttrSrclang {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    /**
     * TODO: conseguir lista de idiomas e atalhos
     * @param type $srclang
     * @param type $el
     * @return string
     * @throws \Exception
     */
    public function srclang($srclang, $el) {
        $rs = '';
        if (in_array($el, ['Track'])) {
            $rs .= 'srclang="' . $srclang . '" ';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo srclang', '0003');
        }
        return $rs;
    }

}
