<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrSpellcheck
 *
 * @author gabri
 */
class AttrSpellcheck {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function spellcheck() {
        $rs = 'spellcheck';
        return $rs;
    }

}
