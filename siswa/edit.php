<?php
include 'koneksi.php';

// Fetch the data to be edited
if (isset($_GET['nisn'])) {
    $nisn = $_GET['nisn'];
    $result = mysqli_query($koneksi, "SELECT * FROM data_siswa WHERE nisn='$nisn'");
    $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Data Siswa</title>
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
                            <h2>Edit Data Siswa</h2>
                            <a href="index.php" class="btn btn-primary">Data Siswa</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="edit-process.php" method="post">
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <div class="mb-4">
                                <label for="nisn" class="form-label">Nisn</label>
                                <input type="text" name="nisn" id="nisn" class="form-control" value="<?= $row['nisn'] ?>" required>
                            </div>
                            <div class="mb-4">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control" value="<?= $row['nama'] ?>" required>
                            </div>
                            <div class="mb-4">
                                <label for="kelas" class="form-label">Kelas</label>
                                <select name="kelas" id="kelas" class="form-select" required>
                                    <option value="10" <?= $row['kelas'] == '10' ? 'selected' : '' ?>>10</option>
                                    <option value="11" <?= $row['kelas'] == '11' ? 'selected' : '' ?>>11</option>
                                    <option value="12" <?= $row['kelas'] == '12' ? 'selected' : '' ?>>12</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="jurusan" class="form-label">Jurusan</label>
                                <select name="jurusan" id="jurusan" class="form-select" required>
                                    <option value="Teknik Komputer Dan Jaringan" <?= $row['jurusan'] == 'Teknik Komputer Dan Jaringan' ? 'selected' : '' ?>>Teknik Komputer Dan Jaringan</option>
                                    <option value="Teknik Mesin" <?= $row['jurusan'] == 'Teknik Mesin' ? 'selected' : '' ?>>Teknik Mesin</option>
                                    <option value="Teknik Elektro" <?= $row['jurusan'] == 'Teknik Elektro' ? 'selected' : '' ?>>Teknik Elektro</option>
                                </select>
                            </div>
                            <button type="submit" name="edit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
