<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrScope
 *
 * @author gabri
 */
class AttrScope {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function scope($scope, $el) {
        $rs = '';
        if (in_array($el, ['Th'])) {
            if (in_array($scope, ['col', 'row', 'colgroup', 'rowgroup'])) {
                $rs .= 'scope="' . $scope . '" ';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo scope', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo scope', '0003');
        }
        return $rs;
    }

}
