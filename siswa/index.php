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
                  <a class="nav-link active" aria-current="page" href="../dashboard/">Beranda</a>
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
                            <h2>Data Siswa</h2>
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
                                    <th>Kelas</th>
                                    <th>Jurusan</th>
                                    <th>Act</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include "koneksi.php";
                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT * FROM data_siswa");
                                foreach ($query as $data) {
                                ?>
                                <tr>
                                    <td>
                                        <?= $no++ ?>
                                    </td>
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

                                    <td>
                                        <div class="btn-group">
                                            <a href="edit.php?nisn=<?= $data['nisn'] ?>" class="btn btn-warning">Edit</a>
                                            <a href="delete.php?nisn=<?= $data['nisn'] ?>" class="btn btn-danger">Delete</a>
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