<?php
/**
 * Created by PhpStorm.
 * User: Gabriel
 * Date: 11/12/2018
 * Time: 11:06 PM
 */

namespace AnthraxisBR\LaravelObjectViews\Events;

use AnthraxisBR\LaravelObjectViews\Contracts\ClickContract;

class ObjectViewEvents
{

    public function click( $function){
        try {
            $this->script .= $function . '();'. PHP_EOL;
        }catch (\Exception $e){
            dd($e);
        }
    }

    public function change($function){
        try {
            $this->script .= $function . ';'. PHP_EOL;
        }catch (\Exception $e){
            dd($e);
        }
    }

}
