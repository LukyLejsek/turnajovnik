<?php

$dsn = "mysql:host=localhost;dbname=myfirstdb";
$dbUsername = "root";
$dbPassword = "";

try {
    $pdo =  new PDO($dsn, $dbUsername, $dbPassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOExeption $e) {
     echo "connection failed: " . $e->getMessage();
}