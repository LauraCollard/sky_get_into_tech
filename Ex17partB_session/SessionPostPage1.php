<!DOCTYPE html>

<?php
session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="sessionPost.css">
        <title>Page 1</title>
    </head>
    <body>
        <div class="container welcome">
            <h1>Welcome!</h1>
            <hr>
        </div>
        <div class="container">
                <form action="" method="post">
                    <div class="input-field">Username:<br><input type="text" name="username" autofocus></div>
                    <div class="input-field">Password:<br><input type="password" name="password"></div>
                    <div class="input-field">Colour:<br><input type="text" name="colour"></div>
                    <div class="input-field">Animal:<br><input type="text" name="animal"></div>
                    <br>
                    <input class="btn btn-primary" type="submit" value="Login">
                </form>
        </div>
        
        
        <?php
        //set the session variables if $_POST is not empty:
        if (!empty($_POST)){
            $_SESSION["username"]= $_POST["username"];
            $_SESSION["colour"]= $_POST["colour"];
            $_SESSION["animal"]= $_POST["animal"];
        }
        //display the user's name and favourite colour and animal if $_SESSION not empty
        //+link to page 2
        if(!empty($_SESSION)){
            echo "<div class='container result'>Welcome " . $_SESSION["username"] . "!<br>";
            echo "Your favourite colour is " . $_SESSION["colour"] . ".<br>";
            echo "Your favourite animal is " . $_SESSION["animal"] . ".<br>";
            echo "<a href='SessionPostPage2.php'>Go to page 2</a><br></div>";
        }
        ?>
    </body>
</html>
