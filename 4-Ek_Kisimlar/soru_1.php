<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dentapros_quest1";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Veritabanı bağlantısı başarısız: " . $e->getMessage();
    die();
}

$sql = "SELECT urun_id, grup_adi, urun_adi, birimi, guncel_stok FROM urunler";

$stmt = $conn->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

$conn = null;


?>

<!DOCTYPE html>
<html>
<head>
    <title>Ürün Tablosu(1.soru)</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

<h2>Ürün Tablosu</h2>

<table>
    <tr>
        <th>Ürün ID</th>
        <th>Grup Adı</th>
        <th>Ürün Adı</th>
        <th>Birimi</th>
        <th>Güncel Stok</th>
    </tr>
    <?php foreach ($results as $row): ?>
    <tr>
        <td><?php echo htmlspecialchars($row['urun_id']); ?></td>
        <td><?php echo htmlspecialchars($row['grup_adi']); ?></td>
        <td><?php echo htmlspecialchars($row['urun_adi']); ?></td>
        <td><?php echo htmlspecialchars($row['birimi']); ?></td>
        <td><?php echo htmlspecialchars($row['guncel_stok']); ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
