<?php
session_start();
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Mengambil data pengguna dari database
    $sql = "SELECT * FROM login WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        // Memeriksa password yang di-hash
        if (password_verify($password, $row['password'])) {
            $_SESSION['login_user'] = $username;
            header("location: ../dashboard/index.php");
        } else {
            $message1 = "username atau password salah";
            $message1 = urlencode($message1);
            header("Location: login.php?message1={$message1}");
            exit();
            //echo "Password salah.";
        }
    } else {
        echo "Username tidak ditemukan.";
    }
}
?>
