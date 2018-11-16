<?php


namespace ElementsComponentsModel;

class AttrAccept {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
        
    }

    public function accept($accepted, $el) {
        if (in_array($el, ['Input'])) {
            $rs = '';
            if (in_array($accepted, \ComponentsModel\ParseConfigFile::get_values_accepted(__CLASS__ . '\\' . __FUNCTION__))) {
                try {
                    $value = $this->StringValidations->check_alphanumeric_dashed_underscore_asterisk_slash($accepted);
                    $rs = 'accept="' . $value . '" ';
                } catch (\Exception $e) {
                    echo 'Exceção capturada em accept: ', $e->getMessage(), "\n";
                }
                return $rs;
            } else {
                throw new \Exception('O elemento informado não pode receber o valor em accept', '0004');
            }
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo accept', '0003');
        }
    }

}
