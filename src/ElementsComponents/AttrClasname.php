<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrClasname
 *
 * @author gabri
 */
class AttrClasname {

    public static  function classname($classnames) {
        $rs = '';
        $validation = new \ValidationsController\ValidationsController();
        try {
            $value = $validation->check_alphanumeric_dashed_underscore_space($classnames);
            $rs = 'class="' . $value . '" ';
        } catch (\Exception $e) {
            echo 'Exceção capturada classname: ', $e->getMessage(), "\n";
        }
        return $rs;
    }

}
