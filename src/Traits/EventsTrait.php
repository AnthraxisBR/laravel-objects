<?php
/**
 * Created by PhpStorm.
 * User: Gabriel
 * Date: 11/16/2018
 * Time: 12:10 PM
 */

namespace AnthraxisBR\LaravelObjectViews\Traits;

use AnthraxisBR\LaravelObjectViews\Contracts\ClickContract;

trait EventsTrait
{

    public function click( $function){

        $this->actualFunction = __FUNCTION__;
        $this->script .= PHP_EOL;
        //dd($this);
        //$this->div[$this->currentDiv]->script->string = '$(document).on(\'click\',function(e){';
        /*try {

            $this->script .= $function . '();'. PHP_EOL;
        }catch (\Exception $e){
            dd($e);
        }*/
        return $function($this);
    }

    public function change($function){
        try {
            $this->script .= $function . ';'. PHP_EOL;
        }catch (\Exception $e){
            dd($e);
        }
    }


}
