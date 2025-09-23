<?php
include 'koneksi.php';

// ambil id dari URL
$id = $_GET['id'];

// ambil data buku berdasarkan id
$result = $mysqli->query("SELECT * FROM buku WHERE id = $id");
$data = $result->fetch_assoc();

// kalau form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST['judul'];
    $nama_pengarang = $_POST['nama_pengarang'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];

    $sql = "UPDATE buku SET 
                judul='$judul',
                nama_pengarang='$nama_pengarang',
                penerbit='$penerbit',
                tahun_terbit='$tahun_terbit'
            WHERE id=$id";

    if ($mysqli->query($sql)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal update data: " . $mysqli->error;
    }
}
?>

<h2>Edit Data Buku</h2>
<form method="POST">
    Judul: <input type="text" name="judul" value="<?= $data['judul'] ?>"><br><br>
    Nama Pengarang: <input type="text" name="nama_pengarang" value="<?= $data['nama_pengarang'] ?>"><br><br>
    Penerbit: <input type="text" name="penerbit" value="<?= $data['penerbit'] ?>"><br><br>
    Tahun Terbit: <input type="text" name="tahun_terbit" value="<?= $data['tahun_terbit'] ?>"><br><br>
    <button type="submit">Update</button>
</form>