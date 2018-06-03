<?php

// Exercise 9 - Arrays and Loops
// Part 2 - Associative arrays

$basket=["White Bread" => 1.05,
         "Brown Bread" => 1.25,
         "Milk" => 1.00,
         "Cheese" => 2.75];

foreach ($basket as $item => $price){
    echo "$item costs £$price.", PHP_EOL;
}


