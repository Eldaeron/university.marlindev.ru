<?php
session_start();
$text = $_POST['text'];

$pdo = new \PDO("mysql:host=localhost; dbname=task9", "root", "");
$sql = "SELECT * FROM demo WHERE text = :text";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);
$test = $statement->fetch(PDO::FETCH_ASSOC);

if (!empty($test)) {
    $message = 'Введенная запись уже присутствует в базе данных!';
    $_SESSION['error'] = $message;

    header('location: task_10.php'); exit();
}

$sql = "INSERT INTO demo (text) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);

$message = 'Введенные данные записано в базу данных!';
$_SESSION['success'] = $message;

header('location: task_10.php'); exit();