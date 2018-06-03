<?php
require_once "../CRUD_app/pdo.php";
session_start();

if(isset($_POST["delete"]) && isset($_POST["id"])){
    $sql= "DELETE FROM users WHERE id=:id";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(":id" => $_POST["id"]));
    $_SESSION["success"]= "Record successfully deleted.";
    header("Location: index.php");
    return;
}

$stmt= $pdo->prepare("SELECT * FROM users WHERE id=:id");
$stmt->execute(array(":id" => $_GET["id"]));
$row= $stmt->fetch(PDO::FETCH_ASSOC);
if ($row===false){
    $_SESSION["error"]= "Bad value for ID.";
    header("Location: index.php");
    return;
}

echo("<p>Confirm: deleting " . htmlentities($row["name"]) . "</p>\n");

echo("<form method='post'><input type='hidden' name='id' value='" .$row["id"]. "'>\n");
echo("<input type='submit' name='delete' value='Delete'>");
echo("<a href='index.php'>Cancel</a>");
echo("</form>");