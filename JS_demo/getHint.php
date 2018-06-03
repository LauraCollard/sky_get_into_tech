<?php
// Array with names
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Yursa";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Victoria";
$a[] = "Jo";
$a[] = "Clare";
$a[] = "Jenny";
$a[] = "Jenna";
$a[] = "Jennifer";
$a[] = "Peter";
$a[] = "Faye";
$a[] = "Alice";
$a[] = "Jess";
$a[] = "Gayathri";
$a[] = "Foluke";
$a[] = "Naomi";
$a[] = "Lucy";
$a[] = "Claudia";
$a[] = "Josie";
$a[] = "Ione";
$a[] = "Penny";
$a[] = "Laura";
$a[] = "Lauren";
$a[] = "Amber";
$a[] = "Alia";
// get the q parameter from the URL
// you could use $_GET here or the more general $_REQUEST superglobal
$q = $_REQUEST["q"];
$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}
// Output "no suggestion" if no hint was found or output the suggestions
// that match the input string
echo $hint === "" ? "no suggestion" : $hint;
?>
