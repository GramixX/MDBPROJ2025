<?php
require_once "connection.php"; 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['upload'])) {
    if ($_FILES['image']['error'] !== UPLOAD_ERR_OK) {
        echo " Eroare la upload: " . $_FILES['image']['error'];
        exit;
    }

    $target = "./assets/img/" . md5(uniqid(time())) . basename($_FILES['image']['name']);
    
    if (!move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        echo " Imaginea nu a putut fi salvată.";
        exit;
    }

    $nume = $_POST['username'];
    $parola = $_POST['password'];
    $functie = $_POST['user_type'];
    $nrani = $_POST['varsta'];

    $bulk = new MongoDB\Driver\BulkWrite;
    $data = [
        '_id' => new MongoDB\BSON\ObjectId(),
        'username' => $nume,
        'password' => $parola,
        'varsta' => $nrani,
        'user_type' => $functie,
        'image' => $target
    ];
    
    try {
        $bulk->insert($data);
        $client->executeBulkWrite("Angajati.angajati", $bulk);
        header('Location: administrarebaza.php');
        exit;
    } catch (MongoDB\Driver\Exception\Exception $e) {
        echo "Eroare la inserare MongoDB: " . $e->getMessage();
        exit;
    }
}
?>
