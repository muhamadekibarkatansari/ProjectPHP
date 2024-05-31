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
                            <h2>Tambah Data Guru</h2>
                            <a href="index.php" class="btn btn-primary">Data Guru</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="add-process.php" method="post" enctype="multipart/form-data">
                            <div class="mb-4">
                                <label for="nip" class="form-label">NIP</label>
                                <input type="text" name="nip" id="nip" class="form-control">
                            </div>
                            <div class="mb-4">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control">
                            </div>
                            <div class="mb-4">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" id="status" class="form-select">
                                    <option value="Guru Tetap">Guru Tetap</option>
                                    <option value="Guru Honorer">Guru Honorer</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <input type="text" name="keterangan" id="keterangan" class="form-control">
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