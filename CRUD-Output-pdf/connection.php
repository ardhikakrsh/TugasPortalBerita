<?php

$host = 'localhost';
$port = '3307';
$username = 'root';
$password = '';
$database = 'siswa';

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    exit('Connection failed: ' . $e->getMessage());
}
