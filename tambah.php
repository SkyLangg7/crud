<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $query = "INSERT INTO users (nama, email) VALUES ('$nama', '$email')";
    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
    } else {
        echo "Gagal menambahkan data!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tambah Data</title>
</head>
<body>
    <h2>Tambah User</h2>
    <form method="POST">
        Nama: <input type="text" name="nama" required><br>
        Email: <input type="email" name="email" required><br>
        <button type="submit" name="submit">Tambah</button>
    </form>
</body>
</html>
