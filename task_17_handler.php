<?php

if (isset($_GET['delete'])) {

    $id = $_GET['delete'];

    $pdo = new \PDO("mysql:host=localhost; dbname=task16", "root", "");
    $sql = "SELECT * FROM images WHERE id = :id";
    $statement = $pdo->prepare($sql);
    $statement->execute(['id' => $id]);
    $file = $statement->fetch(PDO::FETCH_ASSOC);

    if( file_exists($file['image'])) unlink($file['image']);

    $sql = "DELETE FROM images WHERE id = :id";
    $statement = $pdo->prepare($sql);
    $statement->execute(['id' => $id]);

    header('location: task_17.php'); exit();
}

$file = pathinfo($_FILES['image']['name']);
$ext = $file['extension'];

$image = 'uploads/' . uniqid() . ".$ext";

$pdo = new \PDO("mysql:host=localhost; dbname=task16", "root", "");
$sql = "INSERT INTO images (image) VALUES (:image)";
$statement = $pdo->prepare($sql);
$result = $statement->execute(['image' => $image]);

move_uploaded_file($_FILES['image']['tmp_name'], $image);

header('location: task_17.php'); exit();