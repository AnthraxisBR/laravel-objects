<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrCoords
 *
 * @author gabri
 */
class AttrCoords {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    /**
     * 
     * @param string $coords -> deve conter as coordenadas  de exibição
     * @param string $el -> Capturado autmaticamente, contém os elemento em coord pode ser aplicado
     * @return string -> coord attr
     * @throws \Exception
     */
    public function coords($coords, $el) {
        $rs = '';
        if (in_array($el, ['Area'])) {
            if (is_string($coords)) {
                $rs .= 'coords="' . $coords . '" ';
            } else {
                throw new \Exception('O elemento informado não pode receber o atributo coords', '0003');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo coords', '0003');
        }
        return $rs;
    }

}
