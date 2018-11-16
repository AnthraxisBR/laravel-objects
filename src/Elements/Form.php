<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ElementsModel;

/**
 * Description of Form
 *
 * @author root
 */
class Form {

    private $Validations;
    private $fn;
    private $data;
    private $required;
    private $authorized;

    public function __construct($fn, $data, $required, $authorized) {
        $this->fn = $fn;
        $this->data = $data;
        $this->required = $required;
        $this->authorized = $authorized;
        $this->Validations = new \ValidationsController\ValidationsController();
        return $this;
    }

    public function get($content) {
        try {
            $el = $this->Validations::validate_construct_element($this->data, $this->required, $this->authorized);
            return self::render(self::make($this->data), $content);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), $e->getCode());
        }
    }

    public static function make($data) {
        $class = __CLASS__;
        $Controller = new \ElementsComponentsController\ElementsComponentsController();
        return $Controller->attr($data, $class);
    }

    public static function render($el, $content) {
        echo '<form ' . $el . ' >' . $content . '</form>';
    }

}
