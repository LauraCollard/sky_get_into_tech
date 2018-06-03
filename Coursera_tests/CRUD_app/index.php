<?php
require_once "pdo.php";
session_start();
?>

<html>
    <head>
        <title>Welcome</title>
    </head>
    <body>
        <?php
        if (isset($_SESSION["error"])){
            echo "<p style='color:red'>" . $_SESSION["error"] . "</p><br>";
            unset($_SESSION["error"]);
        }
        if (isset($_SESSION["success"])){
            echo "<p style='color:green'>" . $_SESSION["success"] . "</p><br>";
            unset($_SESSION["success"]);
        }
        ?>
        
        <table border='1'>

        <?php
        $stmt= $pdo->query("SELECT id,name,email,password FROM users");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo("<tr><td>");
            echo(htmlentities($row["name"]));
            echo("</td><td>");
            echo(htmlentities($row["email"]));
            echo("</td><td>");
            echo(htmlentities($row["password"]));
            echo("</td><td>");
            echo("<a href='edit.php?id=" . $row["id"] . "'>Edit</a> / ");
            echo("<a href='delete.php?id=" . $row["id"] . "'>Delete user</a>");
        }
        ?>
        
        </table>
        <a href="add.php">Add new user</a>
    </body>
</html>