<?php

// finding re with preg_match()
$teststring= "my email address is laura@laura.com and my number is 33720.";
preg_match('/\w+@\w+.com/', $teststring, $results);
print_r($results);

if(preg_match('/\d+/', $teststring, $results2)){
    print_r($results2);
}

//replacing re with preg_replace()
echo preg_replace('/number/', 'phone number', $teststring), PHP_EOL;
echo preg_replace('/[a-zA-Z]/', '', $teststring);

//grouping and back-references
preg_match('/(.+)@(.+\.com)/', "laura@laura.com", $results3);
print_r($results3);

$teststring2= "green rabbit";
echo preg_replace('/(\w+) (\w+)/', 'The \2 is \1.', $teststring2), PHP_EOL;

//explode()
$example= "15-03-18";
$date= explode('-', $example);
echo "$date[0]th March 20$date[2]", PHP_EOL;
//with multiple delimiters: preg_split()
$example= "Python, PHP HTML";
$language= preg_split('/[\s,]+/', $example);
echo "$language[0] and $language[1] and $language[2]!", PHP_EOL;

//number format
$number= 1234.5678;
echo number_format($number), PHP_EOL; //English format
echo number_format($number, 2, ',', ' '), PHP_EOL; //French format
echo number_format($number, 2, '.', ''); //English without thousands separator