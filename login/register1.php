<!-- <!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
</head>
<body>
    <h2>Registrasi</h2>
    <form method="post" action="register_process.php">
        <label>Username:</label>
        <input type="text" name="username" required><br><br>
        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Register">
    </form>
    <br>
    <a href="login.php">Sudah punya akun? Login disini</a>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css"/>
    <title>Registrasi</title>
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
                    <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <h1 class="daftar">DAFTAR AKUN</h1>
    <form method="POST" action="login_proses.php">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>
        <button type="submit">LOGIN</button>
    </form>
    <a href="register_process.php" class="register-button">Daftar Akun </a>

</body>
</html>
