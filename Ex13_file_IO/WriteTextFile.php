<?php

//writing to a file: fwrite() (also known as fputs)
$resource= fopen('people.txt', 'a');  //using append or it erases content
$dataName = "Marge Simpson";
$dataEmail = "marge@springfield.com";
$dataPhone = "555-332-221";
fwrite($resource, "\n$dataName\t $dataEmail\t $dataPhone\n");
fclose($resource);



//not in the exercise:

//dumping a variable into a file
$varToAdd= 14;
file_put_contents('people.txt', $varToAdd, FILE_APPEND);  //FILE_APPEND or other options

//test before use
$file= 'people.txt';
if (file_exists($file) && is_readable($file) && is_writable($file)){
    //do something
}