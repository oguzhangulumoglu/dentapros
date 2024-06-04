<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Giriş Yap</h2>
        <form id="loginForm" action="soru_3_back.php" method="post">
            <div class="form-group">
                <label for="kullanici_adi">Kullanıcı Adı:</label>
                <input type="text" class="form-control" id="kullanici_adi" name="kullanici_adi" required>
            </div>
            <div class="form-group">
                <label for="sifre">Şifre:</label>
                <input type="password" class="form-control" id="sifre" name="sifre" required>
            </div>
            <button type="submit" class="btn btn-primary">Giriş Yap</button>
        </form>
        <div id="message"></div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
