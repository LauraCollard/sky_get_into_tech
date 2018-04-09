<!DOCTYPE html>

<?php
session_start();
session_unset();
session_destroy();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="sessionPost.css">
        <title>Page 3</title>
    </head>
    <body>
        <?php
        if(empty($_SESSION)){
            echo "<div class='container result'>Welcome Guest!<br>";
            echo "<a href='SessionPostPage1.php'>Login</a><br></div>";
        }
        ?>
    </body>
</html>
