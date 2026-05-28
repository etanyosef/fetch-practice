<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'ascc';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo json_encode('Could not connect. ' . $e->getMessage());
}