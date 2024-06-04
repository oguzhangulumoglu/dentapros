<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dentapros_quest1";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}


if(isset($_POST['action'])) {
    $action = $_POST['action'];
    $userId = $_POST['userId'];

    if ($action == "deactivate") {
      
        $sql = "UPDATE kullanicilar SET active = 0 WHERE id = $userId";
    } elseif ($action == "activate") {
    
        $sql = "UPDATE kullanicilar SET active = 1 WHERE id = $userId";
    }


    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "error";
    }
}


$conn->close();
?>
