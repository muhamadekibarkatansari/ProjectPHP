<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <?php
                if (isset($_GET['message'])) {
                    $message = $_GET['message'];
                ?>
                    <div class="alert alert-danger my-4"><?= $message ?></div>
                <?php
                }
                ?>
                <div class="card border-0">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h2>Edit Nilai Siswa</h2>
                            <a href="index.php" class="btn btn-primary">Nilai Siswa</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php
                        // Mendapatkan ID data yang akan diedit
                        $id = $_GET['id'];

                        // Menghubungkan dengan database
                        include 'koneksi.php';

                        // Mengambil data berdasarkan ID
                        $query = mysqli_query($koneksi, "SELECT * FROM nilai WHERE id='$id'");
                        $data = mysqli_fetch_assoc($query);
                        ?>
                        <form action="edit-process.php" method="post" enctype="multipart/form-data">
                            <!-- Menyimpan ID sebagai input tersembunyi -->
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <div class="mb-4">
                                <label for="nisn_siswa" class="form-label">NISN</label>
                                <input type="text" name="nisn_siswa" id="nisn_siswa" class="form-control" value="<?= $data['nisn_siswa'] ?>">
                            </div>
                            <div class="mb-4">
                                <label for="nama_siswa" class="form-label">Nama Siswa</label>
                                <input type="text" name="nama_siswa" id="nama_siswa" class="form-control" value="<?= $data['nama_siswa'] ?>">
                            </div>
                            <div class="mb-4">
                                <label for="smester" class="form-label">Semester</label>
                                <input type="text" name="smester" id="smester" class="form-control" value="<?= $data['smester'] ?>">
                            </div>
                            <div class="mb-4">
                                <label for="absensi" class="form-label">Nilai Absensi</label>
                                <input type="text" name="absensi" id="absensi" class="form-control" value="<?= $data['absensi'] ?>">
                            </div>
                            <div class="mb-4">
                                <label for="sikap" class="form-label">Nilai Sikap</label>
                                <input type="text" name="sikap" id="sikap" class="form-control" value="<?= $data['sikap'] ?>">
                            </div>
                            <div class="mb-4">
                                <label for="harian" class="form-label">Nilai Harian</label>
                                <input type="text" name="harian" id="harian" class="form-control" value="<?= $data['harian'] ?>">
                            </div>
                            <div class="mb-4">
                                <label for="uts" class="form-label">Nilai UTS</label>
                                <input type="text" name="uts" id="uts" class="form-control" value="<?= $data['uts'] ?>">
                            </div>
                            <div class="mb-4">
                                <label for="uas" class="form-label">Nilai UAS</label>
                                <input type="text" name="uas" id="uas" class="form-control" value="<?= $data['uas'] ?>">
                            </div>
                            <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
