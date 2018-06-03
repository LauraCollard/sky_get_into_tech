<?php
require_once "../CRUD_app/pdo.php";
session_start();

if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["id"]) && isset($_POST["password"])){
    if(strlen($_POST["name"])<1 || strlen($_POST["email"])<1){
        $_SESSION["error"]= "Bad value for name or email";
        header("Location: index.php");
        return;
    }
    $sql= "UPDATE users SET name=:name, email=:email, password=:password
            WHERE id=:id";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(
            ":name" => $_POST["name"],
            ":email" => $_POST["email"],
            ":password" => $_POST["password"],
            ":id" => $_POST["id"]));
    $_SESSION["success"]= "Record updated";
    header("Location: index.php");
    return;
}

$stmt= $pdo->prepare("SELECT * FROM users WHERE id=:id");
$stmt->execute(array(":id" => $_GET["id"]));
$row= $stmt->fetch(PDO::FETCH_ASSOC);
if($row===false){
    $_SESSION["error"]= "Bad value for ID.";
    header("Location: index.php");
    return;
}

$name= htmlentities($row["name"]);
$email= htmlentities($row["email"]);
$password= htmlentities($row["password"]);
$id= $row["id"];

?>

<html>
    <head></head>
    <body>
        <p>Edit record</p>
        <form method="post">
            <p>Name:<input type="text" name="name" value="<?=$name?>"></p>
            <p>Email:<input type="text" name="email" value="<?=$email?>"></p>
            <p>Password:<input type="text" name="password" value="<?=$password?>"></p>
            <input type="hidden" name="id" value="<?=$id?>">
            <p>
                <input type="submit" value="Update">
                <a href="index.php">Cancel</a>
            </p>
        </form>
    </body>
</html>