<?php
if (isset($_GET['nisn'])) {
    include "koneksi.php";
    $nisn = $_GET['nisn'];
    $query = mysqli_query($koneksi, "DELETE FROM data_siswa WHERE
nisn='$nisn'");
    if ($query) {
        $message = "Data berhasil dihapus";
        $message = urlencode($message);
        header("Location:index.php?message={$message}");
    } else {
        $message = "Data gagal dihapus";
        $message = urlencode($message);
        header("Location:add.php?message={$message}");
    }
}
