<?php
// Gantilah nilai-nilai ini sesuai dengan pengaturan database Anda
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'login';

// Koneksi ke database
$conn = new mysqli($host, $user, $pass, $db);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}

?>
