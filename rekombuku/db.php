<?php
$host = 'localhost';
$db = 'rekom_buku';
$user = 'root'; // sesuaikan dengan username MySQL Anda
$pass = ''; // sesuaikan dengan password MySQL Anda

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    echo 'Koneksi gagal: ' . $e->getMessage();
}
