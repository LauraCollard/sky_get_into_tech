<?php

class Hello {
    protected $lang;

    function __construct($lang){
        $this->lang= $lang;
    }

    function greet(){
        if ($this->lang == "fr") return "Bonjour";
        if ($this->lang == "es") return "Hola";
        return "Hello";
    }
}


class Social extends Hello {        //inherits everything from class Hello, including $lang
    function bye(){
        if ($this->lang == "fr") return "Au revoir";
        if ($this->lang == "es") return "Adios";
        return "Goodbye";
    }
}


$hi= new Social("es");

echo $hi->greet() . "<br>";
echo $hi->bye();