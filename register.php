<?php
include 'connection.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$msg="";
$bulk = new MongoDB\Driver\BulkWrite;
if(isset($_POST['upload'])){
    $target="./assets/img/".basename($_FILES['image']['name']);
    $data=array(
        '_id' => new MongoDB\BSON\ObjectId(),
        'username' =>$_POST['username'],
        'password' =>$_POST['password'],
        'varsta' =>$_POST['varsta'],
        'user_type' => $_POST['user_type'] ?? 'user',
        'image'=>$target
    );
    $bulk->insert($data);
    $client->executeBulkWrite('Angajati.angajati',$bulk);

    if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
        header('location:administrarebaza.php');
    }else{
        $msg="Vai! Vai! Vai!!!";
    }
}

?>