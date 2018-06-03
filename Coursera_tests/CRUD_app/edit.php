<?php

require_once "pdo.php";
session_start();
//updating record:
if (isset($_POST["id"]) && isset($_POST["name"]) 
                        && isset($_POST["email"])
                        && isset($_POST["password"])){
    $sql= "UPDATE users
            SET name= :name, email= :email, password= :password
            WHERE id= :id";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(":id" => $_POST["id"],
                         ":name" => $_POST["name"],
                         ":email" => $_POST["email"],
                         ":password" => $_POST["password"]
                        ));
    $_SESSION["success"]= "Record successfully updated.";
    header("Location: index.php");
    return;
}
//looking for the user (id passed in GET request)
$stmt= $pdo->prepare("SELECT * FROM users WHERE id= :xyz");
$stmt->execute(array(":xyz" => $_GET["id"]));
$row= $stmt->fetch(PDO::FETCH_ASSOC);
if ($row === false){
    $_SESSION["error"]= "Bad value for user ID";
    header("Location: index.php");
    return;
}
//to use in html form
$id= $row["id"];
$name= htmlentities($row["name"]);
$email= htmlentities($row["email"]);
$password= htmlentities($row["password"]);

?>

<p>Update details</p>
<form method="post">
<input type="hidden" name="id" value="<?=$id?>">
<p>Name:<input type="text" name="name" value="<?=$name?>"></p>
<p>Email:<input type="text" name="email" value="<?=$email?>"></p>
<p>Password:<input type="password" name="password" value="<?=$password?>"></p>
<p><input type="submit" value="Update details"><a href="index.php">Cancel</a></p>
</form>