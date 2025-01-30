<?php
include 'koneksi.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $query = "UPDATE users SET nama='$nama', email='$email' WHERE id=$id";
    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
    } else {
        echo "Gagal mengedit data!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Edit Data</title>
</head>
<body>
    <h2>Edit User</h2>
    <form method="POST">
        Nama: <input type="text" name="nama" value="<?= $row['nama']; ?>" required><br>
        Email: <input type="email" name="email" value="<?= $row['email']; ?>" required><br>
        <button type="submit" name="submit">Update</button>
    </form>
</body>
</html>
