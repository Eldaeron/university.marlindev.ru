<?php

$tmp = explode('.', $_FILES['image']['name']);
$ext = end($tmp);

$image = 'uploads/' . uniqid() . ".$ext";

$pdo = new \PDO("mysql:host=localhost; dbname=task16", "root", "");
$sql = "INSERT INTO images (image) VALUES (:image)";
$statement = $pdo->prepare($sql);
$result = $statement->execute(['image' => $image]);

move_uploaded_file($_FILES['image']['tmp_name'], $image);

header('location: task_16.php'); exit();