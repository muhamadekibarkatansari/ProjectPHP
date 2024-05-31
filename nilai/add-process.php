<?php
include 'koneksi.php';

if (isset($_POST['add'])) {
    $nisn_siswa = $_POST['nisn_siswa'];
    $nama_siswa = $_POST['nama_siswa'];
    $smester = $_POST['smester'];
    $absensi = $_POST['absensi'];
    $sikap = $_POST['sikap'];
    $harian = $_POST['harian'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];

    // Corrected SQL query
    $query = mysqli_query($koneksi, "INSERT INTO nilai (nisn_siswa, nama_siswa, smester, absensi, sikap, harian, uts, uas) VALUES ('$nisn_siswa', '$nama_siswa', '$smester', '$absensi', '$sikap', '$harian', '$uts', '$uas')");
    
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
