<?php

include 'library/math/mathsB.php';

//with use statement
use library\math;
echo "With use statement: ", math\TEST, PHP_EOL;

//with use const statement
use const library\math\TEST;
echo "With use const statement: ", TEST, PHP_EOL;

//with set_include_path
set_include_path('library/math/mathsB.php');
echo "With set_include_path: ", TEST, PHP_EOL;

// with set_include_path and get_include_path
$path= 'library/math/mathsB.php';
set_include_path(get_include_path().PATH_SEPARATOR.$path);
echo "With set_include_path and get_include_path: ", TEST, PHP_EOL;