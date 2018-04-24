<?php
//from tutorial here: https://www.youtube.com/watch?v=Q5pPGYnxiTI

include "example_class.php";

//without constructor:
//$example= new Example();
//$example->saySomething();      //calling the function manually

//with constructor + parameter
$example= new Example("Hello world!");

$dog1= new Dog("blue", "German shepherd");
print_r($dog1);
