<?php
include 'koneksi.php';

$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST['judul'];
    $pengarang = $_POST['nama_pengarang'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];

    $sql = "UPDATE buku
     SET judul='$judul', nama_pengarang='$pengarang',penerbit='$penerbit',tahun_terbit='$tahun_terbit'
            WHERE id=$id";

    if ($mysqli->query($sql)) {
        header("Location: index.php");
}

$result = $mysqli->query($sql);
header("Location: index.php");
}

$result  = $mysqli->query("SELECT * FROM buku WHERE id=$id");
$data = $result->fetch_assoc();
?>
<!DOCTYPE html >
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit Buku</title>
</head>
<body>
<h1>Edit Buku</h1>

<form method="POST">
   <label> Judul: <input type="text" name="judul" value="<?= $data['judul'] ?>"><br><br>
    <label> Nama Pengarang: <input type="text" name="nama_pengarang" value="<?= $data['nama_pengarang'] ?>"><br><br>
   <label>  Penerbit: <input type="text" name="penerbit" value="<?= $data['penerbit'] ?>"><br><br>
   <label>  Tahun Terbit: <input type="text" name="tahun_terbit" value="<?= $data['tahun_terbit'] ?>"><br><br>
    <button type="submit">Update</button>
</form>

<p><a href="index.php">Kembali ke Daftar Buku</a></p>
</body>

</html>
