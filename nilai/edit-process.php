<?php
include 'koneksi.php';

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nisn_siswa = $_POST['nisn_siswa'];
    $nama_siswa = $_POST['nama_siswa'];
    $smester = $_POST['smester'];
    $absensi = $_POST['absensi'];
    $sikap = $_POST['sikap'];
    $harian = $_POST['harian'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];

    // Corrected SQL query for UPDATE
    $query = mysqli_query($koneksi, "UPDATE nilai SET nisn_siswa='$nisn_siswa', nama_siswa='$nama_siswa', smester='$smester', absensi='$absensi', sikap='$sikap', harian='$harian', uts='$uts', uas='$uas' WHERE id='$id'");
    
    if ($query) {
        $message = "Data berhasil diupdate";
        $message = urlencode($message);
        header("Location: index.php?message={$message}");
        exit();
    } else {
        // Display detailed error message
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
