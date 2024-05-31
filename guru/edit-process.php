<?php
include 'koneksi.php';

if (isset($_POST['edit'])) {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $status = $_POST['status'];
    $keterangan = $_POST['keterangan'];

    // Update the data in the data_guru table
    $query = mysqli_query($koneksi, "UPDATE data_guru SET nip='$nip', nama='$nama', status='$status', keterangan='$keterangan' WHERE nip='$nip'");

    if ($query) {
        $message = "Data berhasil diupdate";
        $message = urlencode($message);
        header("Location: index.php?message={$message}");
        exit();
    } else {
        $message = "Data gagal diupdate";
        $message = urlencode($message);
        header("Location: edit.php?id={$id}&message={$message}");
        exit();
    }
}
?>
