<?php
require_once "../CRUD_app/pdo.php";
session_start();
header("Content-type: application/json; charset=utf-8");
$stmt= $pdo->query("SELECT * FROM users");
$rows= array();
while ($row= $stmt->fetch(PDO::FETCH_ASSOC)){
    $rows[]= $row;
}

echo json_encode($rows, JSON_PRETTY_PRINT);