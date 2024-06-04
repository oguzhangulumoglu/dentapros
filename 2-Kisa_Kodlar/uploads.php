<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dentapros_quest1";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Veritabanı bağlantısı başarısız: " . $e->getMessage();
    die();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Form gönderildi.<br>";

    if (isset($_FILES['fileToUpload']) && isset($_FILES['fileToUpload']['name'])) {
        echo "Dosya yüklendi.<br>";

        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "Dosya bir resim değil.";
            $uploadOk = 0;
        }

        if (file_exists($target_file)) {
            echo "Üzgünüz, dosya zaten mevcut.";
            $uploadOk = 0;
        }


        if ($_FILES["fileToUpload"]["size"] > 5000000) {
            echo "Üzgünüz, dosyanız çok büyük.";
            $uploadOk = 0;
        }


        if ($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif") {
            echo "Üzgünüz, sadece JPG, JPEG, PNG & GIF dosyalarına izin veriliyor.";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Üzgünüz, dosyanız yüklenemedi.";
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "Dosya " . basename($_FILES["fileToUpload"]["name"]) . " başarıyla yüklendi.";

                try {
                    $stmt = $conn->prepare("INSERT INTO uploads (filename) VALUES (:filename)");
                    $stmt->bindParam(':filename', $target_file);
                    $stmt->execute();
                    echo "Dosya ismi veritabanına başarıyla kaydedildi.";
                } catch (PDOException $e) {
                    echo "Veritabanına kaydetme sırasında hata oluştu: " . $e->getMessage();
                }
            } else {
                echo "Üzgünüz, dosyanızı yüklerken bir hata oluştu.";
            }
        }
    } else {
        echo "Dosya yükleme alanı bulunamadı.";
        var_dump($_FILES);
    }
} else {
    echo "Form gönderilmedi.";
}

$conn = null;
?>