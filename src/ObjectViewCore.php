<?php
/**
 * Created by PhpStorm.
 * User: Gabriel
 * Date: 11/12/2018
 * Time: 10:29 PM
 */

namespace AnthraxisBR\LaravelObjectViews;

use AnthraxisBR\LaravelObjectViews\RenderResources;

use AnthraxisBR\LaravelObjectViews\Abstracts\ObjectViewAbstract;
use AnthraxisBR\LaravelObjectViews\Traits\EventsTrait;
use AnthraxisBR\LaravelObjectViews\Traits\JavaScriptTrait;


class ObjectViewCore extends ObjectViewAbstract implements ObjectView
{

    use EventsTrait, JavaScriptTrait;

    /**
     * @var int
     */
    public $currentElement = 0;

    /**
     * @var string
     */
    public $script = '';

    /**
     * @var int
     */
    private $elementsCount = 0;

    /**
     * @var array
     */
    public $div = [];

    public function __construct()
    {

        $this->title = getenv('TITLE');

        parent::__construct();
    }

    public function div($closure = '')
    {

        $this->elementsCount += 1;

        $this->currentElement = $this->elementsCount;

        $this->div[$this->elementsCount] = new \stdClass() ;

        $this->div[$this->elementsCount]->key = $this->elementsCount;

        if(!empty($closure)){
            return $closure($this);
        }
        return $this;
    }

    public function button($text,$closure){

        $this->div[$this->elementsCount]->button = new \stdClass();
        $this->div[$this->elementsCount]->button->text = $text;

        return $closure($this);
    }

    public function a($text,$closure){

        $this->div[$this->elementsCount]->a = new \stdClass();
        $this->div[$this->elementsCount]->a->text = $text;

        return $closure($this);
    }

    public function span($text,$closure = ''){

        $this->elementsCount += 1;

        $this->currentElement = $this->elementsCount;

        if(!isset($this->span)){
            $this->span = [];
            $this->span[$this->elementsCount] = new \stdClass();
            $this->span[$this->elementsCount]->text = $text;
        }else{

            $this->div[$this->elementsCount]->span = new \stdClass();
            $this->div[$this->elementsCount]->span->text = $text;
        }


        if(!empty($closure)){
            return $closure($this);
        }
        return $this;
    }

    public function setSuccessButton()
    {

        $this->div[$this->elementsCount]->button->type = 'success';
    }

    public function fillWith($event, $object)
    {
        $this->buildEvent($event,$object);

    }
}
