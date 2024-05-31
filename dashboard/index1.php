<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- nav bar -->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../guru/images/logopmii.png" alt="Logo" width="30" height="24" 
                    class="d-inline-block align-text-top">
                SMK PERGERAKAN NASIONAL
            </a>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../guru/">Guru</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../siswa/">Siswa</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../nilai">Nilai</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../index.html">Logout</a>
                </li>
              </ul>
        </div>
    </nav>
    <?php
// Informasi koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sekolah";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk menghitung jumlah guru
$sql = "SELECT COUNT(*) AS jumlah_guru FROM data_guru";
$result = $conn->query($sql);

// Memeriksa dan menampilkan hasil
if ($result->num_rows > 0) {
    // Mengambil data dari hasil query
    $row = $result->fetch_assoc();
    echo "Jumlah guru: " . $row['jumlah_guru'];
} else {
    echo "Tidak ada data guru.";
}


// Query untuk menghitung jumlah siswa
$sql = "SELECT COUNT(*) AS jumlah_siswa FROM data_siswa";
$result = $conn->query($sql);

// Memeriksa dan menampilkan hasil
if ($result->num_rows > 0) {
    // Mengambil data dari hasil query
    $row = $result->fetch_assoc();
    echo "Jumlah siswa: " . $row['jumlah_siswa'];
} else {
    echo "Tidak ada data siswa.";
}

// Menutup koneksi
$conn->close();
?>



</body>

</html>