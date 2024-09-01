<?php

namespace App;

use Attribute;

class HtmlElement {

    private $name;

    private $content;

    private $attributes;

    public function __construct(string $name, array $attributes = [], $content = null)
    {

        $this->name = $name;
        $this->attributes = $attributes;
        $this->content = $content;


    }

    public function render (){

        //si el elemento tiene atributos
        if (! empty($this->attributes)) {
            $htmlAttributes = '';

            foreach ($this->attributes as $attribute => $value){
                if(is_numeric($attribute)){
                    $htmlAttributes .= ' '.$value;
                } else {
                    $htmlAttributes .= ' '.$attribute.'="'.htmlentities($value, ENT_QUOTES, 'UTF-8').'"'; //name="value"
                }
            }

            //abrir la etiqueta con atributos
            $result = '<'.$this->name.$htmlAttributes.'>';

        } else {

            //abrir la puerta sin atributos
            $result = '<'.$this->name.'>';

        }

        //si el elemento es void
        if (in_array($this->name, ['br', 'hr', 'img', 'input', 'meta'])) {
            return $result;
        }

        //imprimir el contenido
        $result .= htmlentities($this->content, ENT_QUOTES, 'UTF-8');
        //cerrar la etiqueta
        $result .= '</'.$this->name.'>';

        return $result;

    }
}