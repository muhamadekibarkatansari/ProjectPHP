<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Mengecek apakah username sudah ada di database
    $sql = "SELECT id FROM login WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 0) {
        // Hash password sebelum menyimpan
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        // Menyimpan data pengguna ke database
        $sql = "INSERT INTO login (username, password) VALUES ('$username', '$hashed_password')";
        if ($conn->query($sql) === TRUE) {
            //header("location: login.php");
            $message = "Anda Berhasil Registrasi, Silahkan Login";
            $message = urlencode($message);
            header("Location: login.php?message={$message}");
            exit();
        } else {
            echo "Terjadi kesalahan: " . $conn->error;
        }
    } else {
        echo "Username sudah ada. Silakan pilih username lain.";
    }
}
?>
