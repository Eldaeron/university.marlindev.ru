<?php
$sql = "UPDATE team SET firstname = :firstname, lastname = :firstname, username = :username WHERE id = :id";
$pdo = new \PDO("mysql:host=localhost; dbname=task8", "root", "");
$statement = $pdo->prepare($sql);
$statement->execute($_POST);
header('location: task_8.php'); exit();
