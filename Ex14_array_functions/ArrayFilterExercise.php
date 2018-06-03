<?php

function filterOnAmount($items)
{
if ($items>100){
    return true;
}
return false;
}
echo "Using a callback function\n";
$basket = ["Item1" => 75, "Item2" => 200, "Item3" => 125, "Item4" => 100];
print_r(array_filter($basket,"filterOnAmount"));

//QUESTION: What does the array_filter do?
//It filters an array on the basis of a callback function. It this case, it only prints elements >100.

// Using a closure to close-over (capture) a variable
echo "Using a callback function with a captured variable\n";
function criteria_greater_than($min)
{
    return function($item) use ($min) {
        return $item > $min;
    };
}

$minimum = 95;
// Use array_filter on a input with a selected filter function
$output = array_filter($basket, criteria_greater_than($minimum));

print_r($output); // basket items > 95

//QUESTION: how does the $min captured variable used with the criteria_greater_than function
//give you more flexibility than the filterArray callback?
//We have more flexibility because $min is not hard-coded in the callback function. We can 
//change $min every time we decide to use array_filter and criteria_greater_than.

// dereferencing functions
// functions that return functions can be used as functions directly


// calling the function directly within an if statement
if (criteria_greater_than($minimum)($basket['Item1'])) {
    echo "It's more than $minimum\n";
}
else
{
    echo "It's NOT more than $minimum\n";
}

//QUESTION: what is the purpose of the ($basket['Item1']) code within the if statement?
//We are passing the 1st element of the array as an argument to the function criteria_greater_than.
//This element only is tested.

?>

