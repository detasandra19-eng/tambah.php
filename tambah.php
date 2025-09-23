<?php
require "Koneksi.php";

$error ="";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul      =$_POST['judul'];
    $pengarang      =$_POST['nama_pengarang'];
    $penerbit     =$_POST['penerbit'];
    $tahun_terbit     =$_POST['tahun_terbit'];

    $sql = "INSERT INTO buku (judul, nama_pengarang, penerbit, tahun_terbit)
            VALUES ('$judul', '$nama_pengarang', '$penerbit', '$tahun_terbit')";
    if ($mysqli->query($sql)) {
        header("Location: index.php?succes=1");
        exit;
    } else {
        $error = "Gagal menambahkan data: " . $mysqli->error;
    }
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>
</head>

<body>
    <h1>Form Tambah Buku</h1>

    <?php if ($error): ?>
        <p style="color:red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="post">
        <label>Judul: <input type="text" name="judul"></label><br><br>
        <label>Nama Pengarang: <input type="text" name="nama_pengarang"></label><br><br>
        <label>Penerbit: <input type="text" name="penerbit"></label><br><br>
        <label>Tahun Terbit: <input type="text" name="tahun_terbit"></label><br><br>
        <button type="submit">Simpan</button>
    </form>
    <p><a href="index.php">Kembali ke Daftar Buku</a></p>
    </body>

    </html>