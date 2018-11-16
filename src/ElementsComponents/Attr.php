<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ElementsComponentsModel;

/**
 * Description of AttrAlt
 *
 * @author root
 */
class Attr {

    protected $StringValidations;

    public function __construct() {
        $this->StringValidations = new \ValidationsController\ValidationsController();
    }

    public function attr($attrs,$el) {
        $rs = '';
        foreach ($attrs as $attr => $value) {
            $Components = new \ComponentsController\ComponentsController();
            $ElComponents = new \ElementsComponentsController\ElementsComponentsController();
            $fn = $Components->functions_aliases($attr);
            $rs .= $ElComponents->$fn($value, $Components->get_class_from_full_namespace($el));
        }
        return $rs;
    }

}

/*
     * Não funciona
     * 
     * @param type $contextmenu
     * @return string
     * @throws \Exception     

    public function contextmenu($contextmenu) {
        $rs = '';
        if (in_array(strtolower($contextmenu), ['true', 'false'])) {
            $rs .= '$contextmenu="' . $contextmenu . '" ';
        } else {
            throw new \Exception('O elemento informado não pode receber o atributo $contextmenu', '0003');
        }
        return $rs;
    }[
 * 
 * 

    /**
     * TODO: fazer media
    public function media() {
        
    }
*/