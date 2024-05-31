<?php
if (isset($_GET['nip'])) {
    include "koneksi.php";
    $nip = $_GET['nip'];
    $query = mysqli_query($koneksi, "DELETE FROM data_guru WHERE
nip='$nip'");
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
