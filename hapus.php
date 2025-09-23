<?php
require "koneksi.php";

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $sql = "DELETE FROM buku WHERE id = $id";
    if ($mysqli->query($sql)) {
        header("Location: index.php?deleted=1");
    } else {
        header("Location: index.php?error=1");
    }
} else {
    header("Location: index.php");
}
exit;