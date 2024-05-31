<!-- <!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="login_process.php">
        <label>Username:</label>
        <input type="text" name="username" required><br><br>
        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    <br>
    <a href="register.php">Belum punya akun? Registrasi disini</a>
</body>
</html>
 -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css" />
    <title>Login</title>
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/logo.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                SMK PERGERAKAN NASIONAL
            </a>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="overlay"></div>
    <h1 class="daftar">DAFTAR LOGIN</h1>
                <?php
                if (isset($_GET['message'])) {
                    $message = $_GET['message'];
                ?>
            <div class="alert alert-success my-2 col-4">
                <?= $message ?>
            </div>
            <?php
                }
                ?>

                <?php
                if (isset($_GET['message1'])) {
                    $message1 = $_GET['message1'];
                ?>
            <div class="alert alert-danger  my-2 col-4">
                <?= $message1 ?>
            </div>
            <?php
                }
                ?>
    <form method="POST" action="login_process.php">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>
        <button type="submit" value="Login">LOGIN</button>
    </form>
    <a href="register.php" class="register-button">Daftar Akun </a>

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
</body>

</html>