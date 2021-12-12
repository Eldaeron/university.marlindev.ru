<?php
session_start();
// Прямой доступ к этому файлу запрещен
if (empty($_POST)) {
    header('location: task_14.php'); exit();
}

$email = $_POST['email'];
$password = $_POST['password'];

$pdo = new \PDO("mysql:host=localhost; dbname=task11", "root", "");

$sql = "SELECT * FROM users WHERE email = :email";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email]);
$test = $statement->fetch(PDO::FETCH_ASSOC);

if (empty($test)) {
    $message = 'Неверный логин или пароль.';
    $_SESSION['no_user'] = $message;
} elseif (!password_verify($password, $test['password'])) {
    $message = 'Неверный пароль.';
    $_SESSION['no_password'] = $message;
} else {
    $_SESSION['user'] = $test;
}

header('location: task_14.php'); exit();
