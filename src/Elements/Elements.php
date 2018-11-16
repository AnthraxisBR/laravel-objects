<?php

namespace ElementsModel;

class Elements {

    protected $Validations;
    protected $Attr;

    public function __construct() {
        $this->Attr = new \ElementsComponentsController\ElementsComponentsController();
        $this->Validations = new \ValidationsController\ValidationsController();
        return $this;
    }

    public function a($data) {
        $innerText = $data['innerText'];
        unset($data['innerText']);
        $authorized = ['download', 'href', 'hreflang', 'media', 'ping', 'rel', 'target', 'type'];
        $required = ['href'];
        $A = new \ElementsModel\A(__FUNCTION__, $data, $required, $authorized);
        return $A->get($innerText);
    }


    public function div($data) {
        $innerHTML = $data['innerHTML'];
        unset($data['innerHTML']);
        $authorized = ['acceskey', 'autocapitalize', 'class', 'contenteditable', 'contextemenu', 'dataAttr', 'dir', 'draggable', 'dropzone', 'hidden', 'id', 'is', 'itemid', 'itemref', 'itemscope', 'itemtype', 'lang', 'slot', 'spellcheck', 'style', 'tabindex', 'translate'];
        $required = [null];
        $Div = new \ElementsModel\Div(__FUNCTION__, $data, $required, $authorized);
        return $Div->get($innerHTML);
    }

    public function cite($data) {
        $innerHTML = $data['innerHTML'];
        unset($data['innerHTML']);
        $authorized = ['acceskey', 'autocapitalize', 'class', 'contenteditable', 'contextemenu', 'dataAttr', 'dir', 'draggable', 'dropzone', 'hidden', 'id', 'is', 'itemid', 'itemref', 'itemscope', 'itemtype', 'lang', 'slot', 'spellcheck', 'style', 'tabindex', 'translate'];
        $required = [null];
        $A = new \ElementsModel\Cite(__FUNCTION__, $data, $required, $authorized);
        return $A->get($innerHTML);
    }

    public function em($data) {
        $innerHTML = $data['innerHTML'];
        unset($data['innerHTML']);
        $authorized = ['acceskey', 'autocapitalize', 'class', 'contenteditable', 'contextemenu', 'dataAttr', 'dir', 'draggable', 'dropzone', 'hidden', 'id', 'is', 'itemid', 'itemref', 'itemscope', 'itemtype', 'lang', 'slot', 'spellcheck', 'style', 'tabindex', 'translate'];
        $required = [null];
        $A = new \ElementsModel\Em(__FUNCTION__, $data, $required, $authorized);
        return $A->get($innerHTML);
    }

    public function form($data) {
        $innerHTML = $data['innerHTML'];
        unset($data['innerHTML']);
        $global = ['type', 'accesskey', 'autocomplete', 'autofocus', 'autosave', 'checked', 'form', 'formaction', 'formenctype', 'formmethod', 'formnovalidate', 'formtarget', 'height', 'list', 'max', 'maxlenght', 'min', 'minlenght', 'multiple', 'name', 'pattern', 'placeholder', 'readonly', 'required', 'sectionDirection', 'size', 'spellcheck', 'src', 'step', 'tabindex', 'usemap', 'value', 'width'];
        $authorized = ['accept', 'accept-charset', 'action', 'autocomplete', 'entype', 'method', 'name', 'novalidate', 'target'];
        $required = [null];
        $Input = new \ElementsModel\Form(__FUNCTION__, $data, $required, array_merge($global, $authorized));
        return $Input->get($innerHTML);
    }

    public function input($data) {
        $authorized = ['type', 'accesskey', 'autocomplete', 'autofocus', 'autosave', 'checked', 'form', 'formaction', 'formenctype', 'formmethod', 'formnovalidate', 'formtarget', 'height', 'list', 'max', 'maxlenght', 'min', 'minlenght', 'multiple', 'name', 'pattern', 'placeholder', 'readonly', 'required', 'sectionDirection', 'size', 'spellcheck', 'src', 'step', 'tabindex', 'usemap', 'value', 'width'];
        $required = ['type', 'name'];
        $Input = new \ElementsModel\Input(__FUNCTION__, $data, $required, $authorized);
        return $Input->get();
    }

    public function s($data) {
        $innerHTML = $data['innerHTML'];
        unset($data['innerHTML']);
        $authorized = ['acceskey', 'autocapitalize', 'class', 'contenteditable', 'contextemenu', 'dataAttr', 'dir', 'draggable', 'dropzone', 'hidden', 'id', 'is', 'itemid', 'itemref', 'itemscope', 'itemtype', 'lang', 'slot', 'spellcheck', 'style', 'tabindex', 'translate'];
        $required = [null];
        $A = new \ElementsModel\S(__FUNCTION__, $data, $required, $authorized);
        return $A->get($innerHTML);
    }

    public function small($data) {
        $innerHTML = $data['innerHTML'];
        unset($data['innerHTML']);
        $authorized = ['acceskey', 'autocapitalize', 'class', 'contenteditable', 'contextemenu', 'dataAttr', 'dir', 'draggable', 'dropzone', 'hidden', 'id', 'is', 'itemid', 'itemref', 'itemscope', 'itemtype', 'lang', 'slot', 'spellcheck', 'style', 'tabindex', 'translate'];
        $required = [null];
        $A = new \ElementsModel\Small(__FUNCTION__, $data, $required, $authorized);
        return $A->get($innerHTML);
    }

    public function strong($data) {
        $innerHTML = $data['innerHTML'];
        unset($data['innerHTML']);
        $authorized = ['acceskey', 'autocapitalize', 'class', 'contenteditable', 'contextemenu', 'dataAttr', 'dir', 'draggable', 'dropzone', 'hidden', 'id', 'is', 'itemid', 'itemref', 'itemscope', 'itemtype', 'lang', 'slot', 'spellcheck', 'style', 'tabindex', 'translate'];
        $required = [null];
        $A = new \ElementsModel\Strong(__FUNCTION__, $data, $required, $authorized);
        return $A->get($innerHTML);
    }

}

?>
