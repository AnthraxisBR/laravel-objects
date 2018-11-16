<?php
/**
 * Created by PhpStorm.
 * User: Gabriel
 * Date: 11/16/2018
 * Time: 12:34 PM
 */

namespace GabrielMourao\LaravelObjectViews\Events;

use GabrielMourao\LaravelObjectViews\Contracts\ClickContract;

class Click implements ClickContract
{

    public $string = '';

    public function __construct()
    {

    }

}
