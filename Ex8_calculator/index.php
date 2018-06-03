<?php

// Exercise 8 - creating a simple calculator

echo "Please enter the operation:\n";
$operation = stream_get_line(STDIN, 100, "\n");
echo "Enter the first number:\n";
$numOne = stream_get_line(STDIN, 100, "\n");
echo "Enter the second number:\n";
$numTwo = stream_get_line(STDIN, 100, "\n");

switch($operation){
    case "+":
        echo "Your result is: ", $numOne + $numTwo, ".";
        break;
    
    case "-":
        echo "Your result is: ", $numOne - $numTwo, ".";
        break;
    
    case "*":
        echo "Your result is: ", $numOne * $numTwo, ".";
        break;
    
    case "/":
        if ($numTwo==0){
            die("You can't divide by zero!");
            break;
        }
        echo "Your result is: ", $numOne / $numTwo, ".";
        break;
        
    default:
        die("Wrong operation!\n");
}

?>
