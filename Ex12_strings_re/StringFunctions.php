<?php

//str_split() converts a string into an array -> array_unique() works
print_r(array_unique(str_split('aabbcc')));

$test= "Hello my name is Laura";
echo strtoupper($test), PHP_EOL; //uppercase
echo strtolower($test), PHP_EOL; //lowercase
echo ucwords($test), PHP_EOL;    //title case
echo ucfirst("hello my name is laura"), PHP_EOL;  //uppercase 1st letter

//nl2br(): new line to break
$test1= "Line 1.\nLine 2.\nLine 3.";
echo nl2br($test1), PHP_EOL;

//trim(), ltrim() and rtrim()
$test2= " Hello world ";
echo trim($test2), "!", PHP_EOL;   //trim both sides
echo ltrim($test2), "!", PHP_EOL;  //left trim
echo rtrim($test2), "!", PHP_EOL;  //right trim
$test3= "Hello";
echo rtrim($test3, "o"), " yeah!", PHP_EOL;  //trimming non-space characters

//strpos(): 1st occurrence of a string within another string
echo strpos($test, "m"), PHP_EOL;
echo strpos($test, "z"), PHP_EOL;

//strlen(): length of a string
echo strlen($test), PHP_EOL;

//printf vs. sprintf
$num=5;
$location="tree";
$sentence="There are %d monkeys in the %s.";
printf($sentence, $num, $location);
echo PHP_EOL;
echo sprintf($sentence, $num, $location), PHP_EOL;

//substr()
echo substr($test, -5), PHP_EOL;
echo substr($test, 6, 10), PHP_EOL; //note: 10 is the length of the substring

//str_replace() optional 4th parameter = #replacements
$test4= "I like PHP";
echo str_replace("PHP", "Python!", $test4), PHP_EOL;
//str_ireplace(): case-insensitive
echo str_ireplace("php", "Python!", $test4), PHP_EOL;
$test5= "I #verb# #day# very much.";
echo str_replace(["#verb#", "#day#"], ["like", "Saturdays"], $test5), PHP_EOL;

//comparing strings: strcmp(), strncmp(), strcasecmp(), strncasecmp()
$test5= "Hello world";
$test6= "Hello world!!!";
echo strcmp($test5, $test5), PHP_EOL;  //returns 0 because they're equal
echo strcmp($test5, $test6), PHP_EOL;  //returns negative value because $test5 shorter than $test6
echo strcmp($test6, $test5), PHP_EOL;  //returns positive value because $test6 shorter than $test5

echo strncmp($test5, $test6, 5), PHP_EOL;   //returns 0 (equal) because only comparing the 1st 5 characters

$test7= "HELLO WORLD";
echo strcasecmp($test5, $test7);   //case-insensitive