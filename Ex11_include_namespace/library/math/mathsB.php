<?php

namespace library\math {
    
    function doMathsB($first, $second, $operator){
        switch($operator){
            case "+":
                return $first+$second;
            case "-":
                return $first-$second;
            case "*":
                return $first*$second;
            case "/":
                if ($second==0){
                    die("You can't divide by 0!");
                }
                return $first/$second;

            default:
                die("Wrong operation!");
        }
    }
    
    const TEST="hello";

}
