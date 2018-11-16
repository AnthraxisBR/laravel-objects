<?php

namespace ElementsComponentsModel;

class AttrAcceptCharset {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function accept_charset($accepted, $el) {
        if (in_array($el, ['Form'])) {
            $rs = '';
            if (in_array($accepted, mb_list_encodings())) {
                $rs = 'accept-charset="' . $accepted . '" ';
                return $rs;
            } else {
                throw new \Exception('O elemento informado não pode receber o valor em accept-charset', '0004');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo accept-charset', '0003');
        }
    }

}
