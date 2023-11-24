<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <div="container">
        <form action="controller/login.php" method="POST" class="login-username">
            <p class="login-text" style="font-size: 2rem; font-weigh : 800">login</p>
            <div class="input-group">
                <input type="text" placeholder="Name" name="nama" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Tempat Lahir" name="tplahir" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Tanggal Lahir" name="tglahir" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="alamat" name="alamat" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Hobbi" name="hobi" required>
            </div>

            <div class="input-group">
                <button name="submit" class="btn">login</button>
            </div>
            <p class="login register text"> anda belum mempunyai akun <a href="register.php">silahkan register</a></p>
        </form> 
    </div>
</body>
</html>