<!DOCTYPE html>

<?php
session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="sessionPost.css">
        <title>Page 2</title>
    </head>
    <body>
        <?php
        //display the user's name and favourite colour and animal if $_SESSION not empty
        //+link to page 3
        if(!empty($_SESSION)){
            echo "<div class='container result'>Hello " . $_SESSION["username"] . "!<br>";
            echo "Your favourite colour is " . $_SESSION["colour"] . ".<br>";
            echo "Your favourite animal is " . $_SESSION["animal"] . ".<br>";
            echo "<a href='SessionPostPage3.php'>Logout</a><br></div>";
        }
        ?>
    </body>
</html>
