<?php

//$arr1= [8,3,6,5,4];
//sort($arr1);
//
//foreach($arr1 as $element){
//    echo "$element", PHP_EOL;
//}
//
//echo str_repeat("-", 20), PHP_EOL;
//
//for($i=0; $i<count($arr1); $i++){
//    echo $arr1[$i], PHP_EOL;
//}

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