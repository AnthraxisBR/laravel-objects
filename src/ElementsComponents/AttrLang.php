<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrLang
 *
 * @author gabri
 */
class AttrLang {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function lang($lang) {
        $rs = '';
        //TODO: VALIDAR PARA IDIOMAS ISO https://www.w3schools.com/tags/ref_language_codes.asp
        if (is_string($lang)) {
            $rs .= 'lang="' . $lang . '"';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo lang', '0003');
        }
        return $rs;
    }

}
