<?php
require_once "pdo.php";
session_start();
//deleting record:
if (isset($_POST["delete"]) && isset($_POST["id"])){  //both set in the form below
    $sql= "DELETE FROM users WHERE id = :id";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(":id" => $_POST["id"]));
    $_SESSION["success"] = "Record succeffully deleted";
    header("Location: index.php");
    return;
}
//looking for the user (id passed in GET request)
$stmt= $pdo->prepare("SELECT id, name FROM users WHERE id= :xyz");
$stmt->execute(array(":xyz" => $_GET["id"]));
$row= $stmt->fetch(PDO::FETCH_ASSOC);
if ($row === false){
    $_SESSION["error"]= "Bad value for user ID";
    header("Location: index.php");
    return;
}
?>

<p> Confirm: deleting <?= htmlentities($row["name"]) ?></p>

<form method="post"><input type="hidden" name="id" value="<?= $row["id"]?>">
<input type="submit" value="Delete" name="delete">
<a href="index.php">Cancel</a>

