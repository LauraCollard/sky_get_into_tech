<?php

// Exercise 9 - Arrays and Loops
// Part 1 - Sequential / indexed arrays

$favourites=[];

echo 'What is your favourite colour? ';
$favourites[]= stream_get_line(STDIN, 100, "\n");

echo 'What is your favourite food? ';
$favourites[]= stream_get_line(STDIN, 100, "\n");

echo 'What is your favourite place? ';
$favourites[]= stream_get_line(STDIN, 100, "\n");

echo str_repeat('-', 20), PHP_EOL;

//for loop
echo "For loop:", PHP_EOL;
for ($i=0; $i<count($favourites); $i++){
    echo "$favourites[$i]\n";
}

echo str_repeat('-', 20), PHP_EOL;

//foreach loop
echo "Foreach loop:", PHP_EOL;
foreach ($favourites as $favourite){
    echo "$favourite \n";
}

?>

