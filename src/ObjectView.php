<?php
/**
 * Created by PhpStorm.
 * User: Gabriel
 * Date: 11/12/2018
 * Time: 10:28 PM
 */

namespace GabrielMourao\LaravelObjectViews;

use GabrielMourao\LaravelObjectViews\Events\Click;

interface ObjectView
{
    public function div($closure);

    public function button($text,$closure);

    public function span($text,$closure);
}
