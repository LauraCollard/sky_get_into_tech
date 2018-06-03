<?php

//reading line by line
$resource= fopen('people.txt', 'r');
while ( !feof($resource) && $line=fgets($resource)){ //while not at end of file (eof) && fgets returns a line
    //echo $line;
    echo explode("\t", $line)[0];   //printing the 1st element of the array
    echo "<br>";
}
fclose($resource);
echo str_repeat("-", 20), "<br>";

//other reading methods: fread() -> read n bytes from a file
$n= 100;
$resource= fopen('people.txt', 'r');
$data= fread($resource, $n);
echo $data, "<br>", str_repeat("-", 20), "<br>";
fclose($resource);

//other reading methods: file_get_contents() -> called slurping
$data2= file_get_contents('people.txt');
echo $data2, "<br>", str_repeat("-", 20), "<br>";

//other reading methods: file() -> called slurping as well
$lines= file('people.txt');
echo $lines[1];    //echoing the 2nd line of the file
