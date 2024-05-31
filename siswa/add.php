<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add</title>
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
                            <h2>Tambah Data Siswa</h2>
                            <a href="index.php" class="btn btn-primary">Data Siswa</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="add-process.php" method="post" enctype="multipart/form-data">
                            <div class="mb-4">
                                <label for="nisn" class="form-label">NISN</label>
                                <input type="text" name="nisn" id="nisn" class="form-control">
                            </div>
                            <div class="mb-4">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control">
                            </div>
                            <div class="mb-4">
                                <label for="kelas" class="form-label">Kelas</label>
                                <select name="kelas" id="kelas" class="form-select">
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="jurusan" class="form-label">Jurusan</label>
                                <select name="jurusan" id="jurusan" class="form-select">
                                    <option value="Teknik Komputer Dan Jaringan">Teknik Komputer Dan Jaringan</option>
                                    <option value="Teknik Mesin">Teknik Mesin</option>
                                    <option value="Teknik elektro">Teknik elektro</option>
                                </select>
                            </div>
                            <button type="submit" name="add" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>