<?php
$host = "localhost"; // Nama host
$user = "root";      // Username database
$pass = "";          // Password database
$db   = "buku tamu"; // Nama database

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
