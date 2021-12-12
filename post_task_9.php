<?php
session_start();
$text = $_POST['text'];
$pdo = new \PDO("mysql:host=localhost; dbname=task9", "root", "");
$sql = "INSERT INTO demo (text) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);
$_SESSION['success'] = true;
header('location: task_9.php'); exit();