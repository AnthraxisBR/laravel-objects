<?php
/**
 * Created by PhpStorm.
 * User: Gabriel
 * Date: 11/16/2018
 * Time: 1:59 PM
 */

namespace AnthraxisBR\LaravelObjectViews\Components;


class Render
{

    protected $renderables = ['div','button'];

    public function view($object)
    {
        $this->html = '';
        $this->scripts = $object['script'];
        unset($object['script']);


        foreach ($object as $elementName => $element) {

            /*
            if(is_string($element))
            {
                $object['title'] = $element;
                return false;
            }
*/
            if(is_string($element)){

            }else{

                if (in_array(key($element), $this->renderables))
                {
                    $open = true;

                    $this->html .= '<' . key($element) . ' data-key="' . $element[key($element)]->key . '">';
                }


                foreach ($element as  $subElementName => $subElement)
                {
                    if(is_object($subElement))
                    {
                        $subElement = (array) $subElement;
                    }
                    foreach ($subElement as $itemKey => $item)
                    {

                        if (in_array($itemKey, $this->renderables))
                        {
                            $subOpen = true;
                            if($itemKey === 'button'){
                                if(isset($item->type)){
                                    $this->html .= '<' . $itemKey . ' class="btn btn-' . $item->type . '" >';
                                }else{
                                    $this->html .= '<' . $itemKey . ' class="btn btn-default" >';
                                }
                            }else{

                                $this->html .= '<' . $itemKey . '>';
                            }
                        }

                        if (in_array($itemKey, $this->renderables))
                        {
                            foreach ($subElement[$itemKey] as $subItemKey => $subItem)
                            {
                                if($subItemKey === 'text')
                                {
                                    $this->html .= $subItem;
                                }
                            }
                        }
                        if (in_array($itemKey, $this->renderables) and $open)
                        {
                            $this->html .= '</' . $itemKey . '>';
                            $subOpen  = false;
                        }
                    }
                }

                if (in_array(key($element), $this->renderables) and $open) {
                    $this->html .= '</' . key($element) . '>';
                    $open = false;
                }
            }
        }
        $this->html .= '<script>';
        $this->html .= $this->scripts;
        $this->html .= '</script>';
        return $this->html;
    }


}
