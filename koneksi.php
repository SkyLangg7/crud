<?php
$host = "127.0.0.1";
$user = "root"; // Username default MySQL
$pass = "@AdminElangCrud"; // Kosongkan jika tidak ada password
$db   = "db_crud";

// Koneksi ke database
$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
