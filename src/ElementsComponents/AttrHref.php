<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrHref
 *
 * @author gabri
 */
class AttrHref {

    public static function href($href, $el) {
        $rs = '';
        if (in_array($el, ['A', 'Area', 'Base', 'Link'])) {
            if (filter_var($href, FILTER_VALIDATE_URL) OR $href= '#') {
                $rs .= 'href="' . $href . '" ';
            } else {
                throw new \Exception('O atributo href recebeu um valor inválido'.$href, '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo href', '0002');
        }
        return $rs;
    }

}
