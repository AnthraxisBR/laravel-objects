<?php
/**
 * Created by PhpStorm.
 * User: Gabriel
 * Date: 11/16/2018
 * Time: 12:50 PM
 */

namespace GabrielMourao\LaravelObjectViews\Traits;


trait JavaScriptTrait
{
    public function fill($object)
    {
        $this->div[$object->key]->html->append($object->html());
    }
}
