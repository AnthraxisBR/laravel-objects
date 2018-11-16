<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrKind
 *
 * @author gabri
 */
class AttrKind {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function kind($kind, $el) {
        $rs = '';
        if (in_array($el, ['Track'])) {

            if (in_array($kind, ['captions', 'chapters', 'descriptions', 'metadata', 'subtitiles'])) {
                $rs .= 'kind="' . $kind . '"';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo kind', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo kind', '0003');
        }
        return $rs;
    }

}
