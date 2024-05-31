<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nilai Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .table {
            font-size: 14px;
        }

        .btn {
            width: 75px;
            height: 30px;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <!-- nav bar -->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../guru/images/logopmii.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                SMK PERGERAKAN NASIONAL
            </a>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../dashboard/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../guru/">Guru</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../siswa/">Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nilai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.html">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- table -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <?php
                if (isset($_GET['message'])) {
                    $message = $_GET['message'];
                ?>
                    <div class="alert alert-success my-4">
                        <?= $message ?>
                    </div>
                <?php
                }
                ?>
                <div class="card border-0">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h2>Nilai Siswa</h2>
                            <a href="add.php" class="btn btn-primary">Tambah</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NISN</th>
                                    <th>Nama</th>
                                    <th>Smester</th>
                                    <th>Nilai Kehadiran</th>
                                    <th>Nilai Sikap</th>
                                    <th>Nilai Harian</th>
                                    <th>Nilai UTS</th>
                                    <th>Nilai UAS</th>
                                    <th>Rata-rata</th>
                                    <th>Act</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include "koneksi.php";
                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT * FROM nilai");
                                foreach ($query as $data) {
                                    $average = ($data['absensi'] + $data['sikap'] + $data['harian'] + $data['uts'] + $data['uas']) / 5;
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data['nisn_siswa'] ?></td>
                                        <td><?= $data['nama_siswa'] ?></td>
                                        <td><?= $data['smester'] ?></td>
                                        <td><?= $data['absensi'] ?></td>
                                        <td><?= $data['sikap'] ?></td>
                                        <td><?= $data['harian'] ?></td>
                                        <td><?= $data['uts'] ?></td>
                                        <td><?= $data['uas'] ?></td>
                                        <td><?= number_format($average, 2) ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="edit.php?id=<?= $data['id'] ?>" class="btn btn-warning">Edit</a>
                                                <a href="delete.php?id=<?= $data['id'] ?>" class="btn btn-danger">Delete</a>
                                            </div>
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
        </div>
    </div>
</body>

</html>
