<?php
//connection
$pdo= new PDO("mysql:host=localhost;dbname=Pusheen_library", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//query
//require connection php file: require_once "pdo.php";
// $stmt= $pdo->query("SELECT *
//                     FROM books b
//                     JOIN authors_books ab on ab.book_id = b.book_id
//                     JOIN authors a on a.author_id = ab.author_id
//                     WHERE a.author_name LIKE '%rowling%';"
//                     );

$stmt= $pdo->query("SELECT * FROM genres");

// //query avoiding SQL injection
// $sql= "SELECT image_url FROM books WHERE title = :title";    // :title = placeholder
// $stmt= $pdo->prepare($sql);
// $stmt->execute(array(":title" => $_POST["title"] ));


while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    
    foreach($row as $genre){
        print_r($genre);
        echo "<br>";
    }
    // $result=$row["image_url"];
    // print_r($result);
    // echo "<br><img src=$result>";
}


?>