<?php

include 'library/math/mathsA.php';
include 'library/math/mathsB.php';

echo "Please enter your first number", PHP_EOL;
$numOne= stream_get_line(STDIN, 100, "\n");

echo "Please enter your second number", PHP_EOL;
$numTwo= stream_get_line(STDIN, 100, "\n");

echo "Please enter your operator", PHP_EOL;
$operator= stream_get_line(STDIN, 100, "\n");

//ex11 part A
//echo "Your result is: ", doMathsA($numOne, $numTwo, $operator);

//ex11 part B - without use statement
//echo "Your result is: ", library\math\doMathsB($numOne, $numTwo, $operator);

//ex11 part B - with use statement
//use library\math;
//echo "Your result is: ", math\doMathsB($numOne, $numTwo, $operator);

//ex11 part B - with use function statement
use function library\math\doMathsB;
echo "Your result is: ", doMathsB($numOne, $numTwo, $operator), PHP_EOL;

//ex11 part C - with set_include_path and get_include_path
$path= 'library/math/mathsB.php';
set_include_path(get_include_path().PATH_SEPARATOR.$path);
echo "With set_include_path and get_include_path, your result is: ", doMathsB($numOne, $numTwo, $operator);