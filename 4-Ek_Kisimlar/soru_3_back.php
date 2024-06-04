<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dentapros_quest1";


    $kullanici_adi = $_POST['kullanici_adi'];
    $sifre = $_POST['sifre'];


    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
    }


    $sql = "SELECT * FROM users WHERE username = '$kullanici_adi'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($sifre, $row["password"])) {
            echo "Giriş Başarılı";
        } else {
            echo "Kullanıcı adı veya şifre yanlış";
        }
    } else {
        echo "Kullanıcı bulunamadı";
    }

    $conn->close();
}
?>
