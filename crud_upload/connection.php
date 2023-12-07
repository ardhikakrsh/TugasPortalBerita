<?php

$host = 'localhost';
$port = '3307';
$username = 'root';
$password = '';
$database = 'siswa';

$connect = mysqli_connect($host, $username, $password, $database, $port);
if (!$connect) {
    exit('Koneksi gagal: '.mysqli_connect_error());
}