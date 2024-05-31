<?php
include 'koneksi.php';

if (isset($_POST['add'])) {
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    // Insert the data into the data_siswa table
    $query = mysqli_query($koneksi, "INSERT INTO data_siswa (nisn, nama, kelas, jurusan) VALUES ('$nisn', '$nama', '$kelas', '$jurusan')");
    
    if ($query) {
        $message = "Data berhasil ditambahkan";
        $message = urlencode($message);
        header("Location: index.php?message={$message}");
        exit();
    } else {
        // Display detailed error message
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
