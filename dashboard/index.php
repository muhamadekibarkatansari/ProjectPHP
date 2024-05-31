<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dasboard.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <title>Dasbor</title>
</head>

<body>
    <nav class="navbar bg-body-tertiary navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../login/img/logo.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                SMK PERGERAKAN NASIONAL
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="nav collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../guru/">Guru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../siswa/">Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../nilai/">Nilai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="card text-white bg-primary">
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Siswa</h5>
                        <p class="card-text" id="jumlahSiswa">
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

                            // Query untuk menghitung jumlah siswa
                            $sql = "SELECT COUNT(*) AS jumlah_siswa FROM data_siswa";
                            $result = $conn->query($sql);

                            // Memeriksa dan menampilkan hasil
                            if ($result->num_rows > 0) {
                                // Mengambil data dari hasil query
                                $row = $result->fetch_assoc();
                                echo $row['jumlah_siswa'];
                            } else {
                                echo "Tidak ada data siswa.";
                            }

                            // Menutup koneksi
                            $conn->close();
                        ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card text-white bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Guru</h5>
                        <p class="card-text" id="jumlahGuru">
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
                                    echo  $row['jumlah_guru'];
                                } else {
                                    echo "Tidak ada data guru.";
                                }

                                // Menutup koneksi
                                $conn->close();
                            ?>
                            </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-3" style="margin-bottom: 0;">
                    <div class="card-body">
                        <h5 class="card-title">Rekap Guru</h5>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>NIP</th>
                                    <th>Nama guru</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include "koneksi.php";
                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT * FROM data_guru");
                                foreach ($query as $data) {
                                ?>
                                <tr>
                                    <td>
                                        <?= $data['nip'] ?>
                                    </td>
                                    <td>
                                        <?= $data['nama'] ?>
                                    </td>
                                    <td>
                                        <?= $data['keterangan'] ?>
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card mb-3" style="margin-top: 0;">
                    <div class="card-body siswa">
                        <h5 class="card-title">Rekap Siswa</h5>
                        <table class="table table-striped siswa">
                            <thead>
                                <tr>
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>Kelas</th>
                                    <th>Jurusan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include "koneksi.php";
                                $query = mysqli_query($koneksi, "SELECT * FROM data_siswa");
                                foreach ($query as $data) {
                                ?>
                                <tr>
                                    <td>
                                        <?= $data['nisn'] ?>
                                    </td>
                                    <td>
                                        <?= $data['nama'] ?>
                                    </td>
                                    <td>
                                        <?= $data['kelas'] ?>
                                    </td>
                                    <td>
                                        <?= $data['jurusan'] ?>
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <img src="../img/logo.jpg" alt="" width="150px" style="margin-bottom: 10px;">
                        <!-- Tambahkan konten lain di sini -->
                        <p class="card-text"><strong>Profil Sekolah:</strong></p>
                        <p class="card-text">SMK Pergerakan Nasional adalah sekolah yang berfokus pada pendidikan kejuruan di bidang teknologi dan rekayasa. Didirikan pada tahun 1995, sekolah ini telah meluluskan banyak siswa yang kompeten dan siap kerja di berbagai industri.</p>
                        <p class="card-text"><strong>Misi Sekolah:</strong></p>
                        <ul>
                            <li>Menyediakan pendidikan berkualitas tinggi.</li>
                            <li>Mengembangkan keterampilan praktis yang dibutuhkan di dunia kerja.</li>
                        </ul>
                    </div>
                </div>
                <!-- Kalender -->
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kalender</h5>
                        <input type="text" class="form-control" id="calendar">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        // Initialize Flatpickr
        flatpickr("#calendar", {
            dateFormat: "Y-m-d",
            defaultDate: new Date()
        });
    </script>
</body>

</html>
