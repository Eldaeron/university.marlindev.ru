<?php
session_start();

// Прямой доступ к этому файлу запрещен
if (empty($_POST)) {
    header('location: task_13.php'); exit();
}

// В уроке не сказано на счет пустых данных, поэтому пустой POST тоже подходит!
if (isset($_POST['counter'])) {
    $_SESSION['counter'] = $_POST['counter'] + 1;
}

header('location: task_13.php'); exit();