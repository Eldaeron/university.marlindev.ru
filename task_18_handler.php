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

    header('location: task_18.php'); exit();
}

for ($i = 0; $i < count($_FILES['images']); $i++) {

    $file = $_FILES['images']['name'][$i];
    $image = 'uploads/' . uniqid() . ".$ext";

    $file_info = pathinfo($file);
    $ext = $file_info['extension'];
    
    $image = 'uploads/' . uniqid() . ".$ext";

    $pdo = new \PDO("mysql:host=localhost; dbname=task16", "root", "");
    $sql = "INSERT INTO images (image) VALUES (:image)";
    $statement = $pdo->prepare($sql);
    $result = $statement->execute(['image' => $image]);

    move_uploaded_file($_FILES['images']['tmp_name'][$i], $image);
}

header('location: task_18.php'); exit();