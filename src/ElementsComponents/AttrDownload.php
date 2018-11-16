<?php

/*
 * 
 *  * 
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrDownload
 *
 * @author gabri
 */
class AttrDownload {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function download($el) {
        $rs = '';
        if (in_array($el, ['A', 'Area'])) {
            $rs .= 'download';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo download', '0003');
        }
        return $rs;
    }

}
