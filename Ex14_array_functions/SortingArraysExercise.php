<?php

// Sorting Arrays Exercise
// TODO: 1
// Attempt to directly sort an array with the values of [8,3,6,5,4]
// YOUR CODE HERE
$arr1= [8,3,6,5,4];
sort($arr1);
print_r($arr1);
echo PHP_EOL;

// TODO: 2 
// Run the file. Add a comment to describe the outcome 
// YOUR COMMENT HERE
//Prints the sorted array (ascending order). We can also do this:
//$arr1= [8,3,6,5,4];
//sort($arr1);
//foreach($arr1 as $element){
//    echo "$element", PHP_EOL;
//}

// TODO: 3 
// Use the following array and sort as specified
$numbers = [8, 6, 3, 0, 2, -4, 9];
echo "Original array values:\n";
var_dump($numbers);

echo "Sorting in ascending order\n";
// YOUR CODE HERE
sort($numbers);
var_dump($numbers);

echo "Sorting in descending order\n";
// YOUR CODE HERE
rsort($numbers);
var_dump($numbers);

// TODO: 4 
// Use the following array and sort as specified

$ages = ['Mr. S. Holmes' => 27, 
         'Mr. M. Holmes' => 34, 
	   'Ms. Hudson' => 70];

// Sort an associative array by its values in descending order
echo "Sorted by values, descending\n";
// YOUR CODE HERE
arsort($ages);
var_dump($ages); 

// TODO: 5 
// Sort an associative array by its keys
echo "Sorted by keys, ascending\n";
// YOUR CODE HERE
ksort($ages);
var_dump($ages);