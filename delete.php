<?php
include 'connection.php';
$bulk = new MongoDB\Driver\BulkWrite;
$id = new \MongoDB\BSON\ObjectId($_GET['id']);
$filter = ['_id'=>$id];
$bulk->delete($filter);
$client->executeBulkWrite('Angajati.angajati',$bulk);
header('location:administrarebaza.php');
?>