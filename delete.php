<?php
(int)$id = $_GET['id'];
$pdo = new \PDO("mysql:host=localhost; dbname=task8", "root", "");
$statement = $pdo->prepare("DELETE FROM team WHERE id = $id");
$statement->execute();
header('location: task_8.php'); exit();
?>