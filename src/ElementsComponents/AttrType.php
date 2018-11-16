<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrType
 *
 * @author gabri
 */
class AttrType {

    /**
     * Usar lista IANA para encontrar os media_types
     * @param type $type
     * @param type $el
     * @return string
     * @throws \Exception
     */
    public function type($type, $el) {

        if (in_array($el, ['Button', 'Embed', 'Input', 'Link', 'Object', 'Script', 'Source', 'Style'])) {
            try {
                $StringValidations = new \ValidationsController\ValidationsController();
                $value = $StringValidations->check_alphanumeric_dashed_underscore($type);
                $rs = 'type="' . $value . '" ';
            } catch (\Exception $e) {
                throw new \Exception($e->getMessage(), '0002');
            }
            return $rs;
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo name', '0002');
        }
    }

}
