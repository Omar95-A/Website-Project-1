<?php
$host = "localhost";
$user = "root";
$password = "";
$dbName = "hastane";


try {
    $conn = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}
