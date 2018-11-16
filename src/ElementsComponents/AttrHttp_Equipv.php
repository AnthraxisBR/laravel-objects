<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrHttp_Equipv
 *
 * @author gabri
 */
class AttrHttp_Equipv {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function http_equipv($http_equipv, $el) {
        $rs = '';
        if (in_array($el, ['Meta'])) {

            if (in_array($http_equipv, ['content-type', 'default-style', 'refresh'])) {
                $rs .= 'http-equipv="' . $http_equipv . '"';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo http_equipv', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo http_equipv', '0003');
        }
        return $rs;
    }

}
