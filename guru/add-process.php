<?php
include 'koneksi.php';

if (isset($_POST['add'])) {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $status = $_POST['status'];
    $keterangan = $_POST['keterangan'];

    // Insert the data into the data_guru table
    $query = mysqli_query($koneksi, "INSERT INTO data_guru (nip, nama, status, keterangan) VALUES ('$nip', '$nama', '$status', '$keterangan')");
    
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
