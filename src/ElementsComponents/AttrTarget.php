<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrTarget
 *
 * @author gabri
 */
class AttrTarget {

    public static function target($target, $el) {
        $rs = '';
        if (in_array($el, ['A', 'Area', 'Base', 'Form'])) {
            if (in_array($target, ['_blank', '_self', '_parent', '_top']) OR is_string($target)) {
                $rs .= 'target="' . $target . '" ';
            } else {
                throw new \Exception('O atributo target recebeu um valor inválido: ' . $target, '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo target', '0003');
        }
        return $rs;
    }

}
