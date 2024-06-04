<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/Css/style.css">
    <title>Document</title>
</head>

<body>

    <h1 class="Quest2">2. Kısa Kodlar</h1>
    <?php
    $array[] = "Pie";
    $array[] = "Banana";
    $array[] = "Apple";
    $array[] = "Strawberry";
    ?>

    <div class="text">
        <h2 class="text">1. Soru Cevabı <?php echo $array[2]; ?></h2>

    </div>

    <div class="text">

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dentapros_quest1";

        $connecting = new mysqli($servername, $username, $password, $dbname);

        if ($connecting->connect_error) {
            die("Bağlantı hatası: " . $connecting->connect_error);
        } else {
            echo '<h2 class="text">2. Soru Cevabı: Veritabanına başarıyla bağlandı.</h2>';
        }

        $connecting->close();
        ?>


        <!-- 2.sorunun cevabı php çıktısı olarak -->
        <?php
        // $browser = $_SERVER['HTTP_USER_AGENT'];
        // $os = $_SERVER['HTTP_USER_AGENT'];
        
        // echo "Tarayıcı: " . $browser . "<br>";
        // echo "İşletim Sistemi: " . $os;
        ?>


    </div>

    <div class="text">
        <h2>3. Soru Cevabı </h2>
        <h2 class="  userBrowser"></h2>
        <h2 class=" operatingSystem"></h2>
    </div>




    <div class="text">
        <h2>4. Soru Cevabı </h2>
        <h2>Oturumu başlatmak için</h2>
        <h3>session_start();</h3>
        <h2>Tekli bir oturumu silmek için</h2>
        <h3>unset($_SESSION['kullanici_adi']);</h3>
        <h2>Oturumu tamamen sonlandırmak için</h2>
        <h3>session_destroy();</h3>
        <h2></h2>
    </div>


    <div class="text">
        <h2>5. Soru Cevabı </h2>
        <?php
        $str = "DENTAPROS";
        $ilk_uc_karakter = substr($str, 0, 3);
        echo "<h2>$ilk_uc_karakter</h2>"; // Bu "<h2>Mer</h2>" çıktısını verecek
        ?>
    </div>

    <div class="text">
        <h2>6. Soru Cevabı </h2>
        <button id="redirectButton" class="btnSize">Dentapros</button>
        <?php
        // bu kısımda php kodları otomatik yönlendirme yapmaktadır ve diğer soruların cevaplarını görmeyi engellediği için 
        // soruyu javascript kullanarak click eventi içerisine ekledim
        // butona tıklandığında sayfa çıktısını yönlendirmeden popup ekranında açabilirsiniz
        //$url = "https://www.dentapros.com.tr";
        //header("Location: " . $url);
        //exit();
        ?>
    </div>

    <div class="text">
        <h2>7. Soru Cevabı </h2>
        <h3>SELECT *
            FROM tablo_adi
            WHERE tarih_sutunu BETWEEN '2024-05-03' AND '2024-06-03';</h3>

    </div>
    <div class="text">
        <h2>8. Soru Cevabı </h2>

        <?php

        $var = 0;
        if (empty($var)):
            echo "yanlış";
            // echo “doğru”;
        endif;
        ?>
        <h3>Verilen kodda eğer echo sonrasında tırnak işaretlerinde hata yoksa if koşulunda boş olup olmadığı
            sorgulanmış içerisinde "0" değeri olduğu için boş değil cevap
            yanlış olmalı </h3>
    </div>

    <div class="text">
        <h2>9. Soru Cevabı </h2>
        <?php
        echo __FILE__;
        ?>
    </div>

    <div class="text">
        <h2>10. Soru Cevabı</h2>
        <form action="uploads.php" method="post" enctype="multipart/form-data">
            <label for="file">Dosya Seç:</label>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Yükle">
        </form>
    </div>


    <script src="assets/Javascript/script.js"></script>
    <script src="assets/Javascript/6.soru.js"></script>

</body>

</html>