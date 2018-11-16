<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrName
 *
 * @author gabri
 */
class AttrName {

    public function name($name, $el) {
        if (in_array($el, ['Button', 'Fieldset', 'Form', 'Iframe', 'Input', 'Map', 'Meta', 'Object', 'Output', 'Param', 'Select', 'Textarea'])) {
            try {
                $StringValidations = new \ValidationsController\ValidationsController();
                $value = $StringValidations->check_alphanumeric_dashed_underscore($name);
                $rs = 'name="' . $value . '" ';
            } catch (\Exception $e) {
                throw new \Exception($e->getMessage(), '0002');
            }
            return $rs;
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo name', '0002');
        }
    }

    public static function classname($classnames) {
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
