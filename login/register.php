<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Login.css"/>
    <title>Daftar Akun</title>
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../login/img/logo.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                SMK PERGERAKAN NASIONAL
            </a>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="hero">
        <div class="overlay"></div>

        <form method="POST" action="register_process.php">
            <?php
            if (isset($_GET['message'])) {
                $message = $_GET['message'];
            ?>
                <div class="alert alert-success my-2 col-12">
                    <?= $message ?>
                </div>
            <?php
            }
            ?>
            
            <?php
            if (isset($_GET['message1'])) {
                $message1 = $_GET['message1'];
            ?>
                <div class="alert alert-danger my-2 col-12">
                    <?= $message1 ?>
                </div>
            <?php
            }
            ?>
            <div>
                <h1> Daftar Akun</h1>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit">DAFTAR</button>
        </form>
        <a href="login.php" class="login-button">Sudah punya akun? Login di sini</a>
        <div class="social-login mt-3">
            <a href="https://www.google.com/" target="blank">
                <img src="../login/img/instagram.jpg" alt="Google" width="30" height="30">
            </a>
            <a href="https://www.facebook.com/" target="blank">
                <img src="../login/img/facebook.jpg" alt="Google" width="30" height="30">
            </a>
            <a href="https://www.email.com/" target="blank">
                <img src="../login/img/email.jpg" alt="Google" width="30" height="30">
            </a>
        </div>
    </div>
</body>
</html>
