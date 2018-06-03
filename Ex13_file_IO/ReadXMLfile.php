<?php

$path="Books.xml";
$data= simplexml_load_file($path) or die("Error: can't create object");

//printing everything
print_r($data);
echo "<br>", str_repeat("-", 20), "<br>";


//accessing specific children
foreach ($data->children() as $book){    //using -> skinny/single arrow instead of dot/square brackets as in other languages
    echo $book->title, ", ";
    echo $book->author, ", ";
    if ($book->author[1]!=""){
        echo $book->author[1], ", ";
    }
    echo $book->year, ", ";
    echo "£", $book->price, "<br>";
}
echo str_repeat("-", 20), "<br>";


//direct attributes
foreach($data as $book){
    echo "Category: ", $book["category"], "<br>";
}
echo str_repeat("-", 20), "<br>";

//deeper attributes
foreach($data->children() as $book){
    echo "Language: ", $book->title["lang"], "<br>";
}
