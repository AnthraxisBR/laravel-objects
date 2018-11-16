<?php
/**
 * Created by PhpStorm.
 * User: Gabriel
 * Date: 11/12/2018
 * Time: 11:03 PM
 */

namespace GabrielMourao\LaravelObjectViews\Abstracts;

use GabrielMourao\LaravelObjectViews\Events\ObjectViewEvents;
use GabrielMourao\LaravelObjectViews\Components\Render;

abstract class ObjectViewAbstract extends ObjectViewEvents
{

    public function __construct()
    {
        //$this->events = EventsBuilder::make();
    }

    public function html(){

    }

    public function buildEvent($event,$object)
    {
        $trace = debug_backtrace();

        if($event->actualFunction === 'click')
        {
            $this->script .= '$(\'div[data-key="' . $event->currentElement . '"]\').on(\'click\',function(e){';

            if($trace[1]['function'] === 'fillWith'){
                $this->script .= '$(\'div[data-key="' . $this->currentElement . '"]\').html("' . $object->getActualElement()->text . '");';
            }

            $this->script .= '});';
        }
    }

    public function render()
    {
        $renderables = ['div','span','button','section'];
        $render = [];
        foreach ($this as $key => $element)
        {
            if(in_array($key,$renderables))
            {
                foreach ($element as $elementKey => $elementObject)
                {
                    if(isset($elementObject->render) and $elementObject->render)
                    {
                        $render[] = [ $key  => $elementObject];
                    }
                }
            }
        }
        $render['script'] = $this->script;
        return $this->view($render);
    }

    public function injectScript($object)
    {
        $this->script .= $object->script;
    }

    public function setAsRenderable()
    {

        $this->div[$this->currentElement]->render = true;
        return $this;
    }

    public function getActualElement()
    {
        if(isset($this->div[$this->currentElement])){

        }

        if(isset($this->span[$this->currentElement])){
            return $this->span[$this->currentElement];
        }
    }

    public function view($render){
        $View = new Render();
        return $View->view($render);
    }
}
