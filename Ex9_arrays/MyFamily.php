<?php

// Exercise 9 - Arrays and Loops
// Part 3 - Multidimensional arrays

$family= ["Guillaume" => ["Age" => 28, "Hair colour" => "dark"],
          "Mom" => ["Age" => 58, "Hair colour" => "chestnut"],
          "Dad" => ["Age" => 58, "Hair colour" => "dark"]   
         ];

foreach ($family as $member => $details){
    echo "Member: $member, age: ", $details['Age'], ", hair colour: ", $details['Hair colour'], PHP_EOL;
}
