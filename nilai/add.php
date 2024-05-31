<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Nilai Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <?php
                include 'koneksi.php';
                
                // Check if there is a message from previous operations
                if (isset($_GET['message'])) {
                    $message = $_GET['message'];
                    echo "<div class='alert alert-danger my-4'>$message</div>";
                }
                ?>
                <div class="card border-0">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h2>Tambah Nilai Siswa</h2>
                            <a href="index.php" class="btn btn-primary">Nilai Siswa</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="add-process.php" method="post" enctype="multipart/form-data">
                            <div class="mb-4">
                                <label for="nisn_siswa" class="form-label">NISN Siswa</label>
                                <select name="nisn_siswa" id="nisn_siswa" class="form-control">
                                    <?php
                                    // Query to retrieve NISN and name from the siswa table
                                    $query = mysqli_query($koneksi, "SELECT nisn, nama FROM data_siswa");
                                    while ($row = mysqli_fetch_assoc($query)) {
                                        echo "<option value='" . $row['nisn'] . "'>" . $row['nisn'] . " - " . $row['nama'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="nama_siswa" class="form-label">Nama Sesuai NISN</label>
                                <select name="nama_siswa" id="nisn_siswa" class="form-control">
                                    <?php
                                    // Query to retrieve NISN from the siswa table
                                    $query = mysqli_query($koneksi, "SELECT nama FROM data_siswa");
                                    while ($row = mysqli_fetch_assoc($query)) {
                                        echo "<option value='" . $row['nama'] . "'>" . $row['nama'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="smester" class="form-label">Semester</label>
                                <input type="text" name="smester" id="smester" class="form-control">
                            </div>
                            <div class="mb-4">
                                <label for="absensi" class="form-label">Nilai Absensi</label>
                                <input type="text" name="absensi" id="absensi" class="form-control">
                            </div>
                            <div class="mb-4">
                                <label for="sikap" class="form-label">Nilai Sikap</label>
                                <input type="text" name="sikap" id="sikap" class="form-control">
                            </div>
                            <div class="mb-4">
                                <label for="harian" class="form-label">Nilai Harian</label>
                                <input type="text" name="harian" id="harian" class="form-control">
                            </div>
                            <div class="mb-4">
                                <label for="uts" class="form-label">Nilai UTS</label>
                                <input type="text" name="uts" id="uts" class="form-control">
                            </div>
                            <div class="mb-4">
                                <label for="uas" class="form-label">Nilai UAS</label>
                                <input type="text" name="uas" id="uas" class="form-control">
                            </div>
                            <button type="submit" name="add" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var nisnSelect = document.getElementById('nisn_siswa');
            var namaInput = document.getElementById('nama_siswa');

            nisnSelect.addEventListener('change', function () {
                var nisn = this.value;

                // Buat permintaan AJAX ke server
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'get-nama-siswa.php', true);
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        var response = JSON.parse(xhr.responseText);
                        // Setel nilai input nama siswa dengan respons yang diterima dari server
                        namaInput.value = response.nama;
                    }
                };
                // Kirim data NISN ke server
                xhr.send('nisn=' + nisn);
            });
        });
    </script>
</body>
</html>
