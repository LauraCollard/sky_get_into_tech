<?php

// Example 1
// slice the array starting at element 1
$path = array_slice(
	explode('/', 'example.com/blog/post/1'), 1);

//What does the explode function do?
//It separates the given string on the basis of "/" and puts every element into an array.
//It doesn't use the first element because we gave it 1 as a parameter.

//How would you slice the string 'example.com/blog/post/1' to return just 'post/1'?
//To return 'post/1', we could do the following:
//$path = array_slice(explode('blog/', 'example.com/blog/post/1'), 1);
//foreach($path as $element){
//    echo "$element", PHP_EOL;
//}

// merge with this array
print_r(array_merge( ['yourdomain.tld'], $path ));

// Example 2
$savedBasket = ['bread','milk','eggs'];

$extraBasketItems = ['pasta','eggs','garlic bread','salad', 'olive oil'];

$combinedBaskets = array_merge($savedBasket, $extraBasketItems);

print_r($savedBasket);
print_r($extraBasketItems);
echo "**********Array Merging**********\n";
print_r($combinedBaskets);

echo "**********Array Addition**********\n";
$AddedBasket = $savedBasket + $extraBasketItems;
print_r($AddedBasket);

//What is the difference between array_merge and array addition?
//array_merge simply concatenates the 2 arrays, which leads to elements being repeated in the final array.
//array addition only adds array 2 elements if they're not already in array 1. No repeated elements in final array.