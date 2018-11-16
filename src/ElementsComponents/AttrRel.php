<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrRel
 *
 * @author gabri
 */
class AttrRel {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function rel($rel, $el) {
        $rs = '';
        if (in_array($el, ['A', 'Area', 'Link'])) {
            if (n_array($rel, ['alternate', 'author', 'bookmark', 'help', 'license', 'next', 'nofollow', 'noreferrer', 'prefetch', 'prev', 'search', 'tag'])) {
                $rs .= 'rel="' . $rel . '" ';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo rel', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo rel', '0003');
        }
        return $rs;
    }

}
