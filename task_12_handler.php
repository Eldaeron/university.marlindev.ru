<?php
session_start();

// В уроке не сказано на счет пустых данных, поэтому пустой POST тоже подходит!
if (isset($_POST['text'])) $_SESSION['text'] = $_POST['text'];

header('location: task_12.php'); exit();