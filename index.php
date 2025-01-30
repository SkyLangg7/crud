<?php
include 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Data Users</title>
</head>
<body>
    <h2>Data Users</h2>
    <a href="tambah.php">Tambah Data</a>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['email']; ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> |
                <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Hapus data?');">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
