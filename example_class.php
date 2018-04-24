<?php

class Example {
    
    //if we want a predefined block of code to run as soon as we create 
    //a new instance of the class: constructor
    //we can pass parameters to the constructor
    public function __construct($something){
        $this->saySomething($something);
    }
    
    public function saySomething($something){
        echo $something;
    }
    
}

class Dog {
    private $colour;   //var $colour;
    private $breed;    //var $breed;
    
    function __construct($colour, $breed) {
        $this->colour = $colour;
        $this->breed = $breed;
    }

}