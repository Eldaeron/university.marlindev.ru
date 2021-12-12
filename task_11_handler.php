<?php
// Пароль должен храниться в базе в виде хэша. Для этого используйте функцию password_hash($password)
// password_hash($password, PASSWORD_DEFAULT) иначе ошибка!!!

session_start();

// Прямой доступ к этому файлу запрещен
if (empty($_POST)) {
    header('location: task_11.php'); exit();
}


$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$pdo = new \PDO("mysql:host=localhost; dbname=task11", "root", "");

$sql = "SELECT * FROM users WHERE email = :email";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email]);
$test = $statement->fetch(PDO::FETCH_ASSOC);

if (!empty($test)) {
    $message = 'Введенный емайл уже присутствует в базе данных!';
    $_SESSION['exist'] = $message;

    header('location: task_11.php'); exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $message = 'Введен не коректный емайл адресс';
    $_SESSION['invalid'] = $message;

    header('location: task_11.php'); exit();
}

if (empty($_POST['password'])) {
    $message = 'Вы не ввели пароль? Ничего страшного, попробуйте снова.';
    $_SESSION['invalid'] = $message;

    header('location: task_11.php'); exit();
}

$sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email, 'password' => $password]);

$message = 'Спасибо за регистрацию.';
$_SESSION['success'] = $message;

header('location: task_11.php'); exit();






