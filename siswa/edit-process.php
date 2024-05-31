<?php
include 'koneksi.php';

if (isset($_POST['edit'])) {
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    // Update the data in the data_siswa table
    $query = mysqli_query($koneksi, "UPDATE data_siswa SET nisn='$nisn', nama='$nama', kelas='$kelas', jurusan='$jurusan' WHERE nisn='$nisn'");

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
