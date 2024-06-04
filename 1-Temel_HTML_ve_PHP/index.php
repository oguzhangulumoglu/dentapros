<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dentapros_quest1";

// Veritabanı bağlantısını oluşturma
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol etme
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// SQL sorgusu: Verileri seçme
$sql = "SELECT name, surname, phone, tc, email FROM users";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>1. Temel HTML ve PHP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/Css/style.css">
</head>

<body>
  <h1 class="Quest1">1. Temel HTML ve PHP</h1>

  <div class="container table-responsive tableAll py-5">
    <table class="table table-bordered table-hover">
      <thead class="thead-dark">
        <tr>
          <th scope="col" class="tableH">Count</th>
          <th scope="col" class="tableH">First Name</th>
          <th scope="col" class="tableH">Last Name</th>
          <th scope="col" class="tableH">Phone</th>
          <th scope="col" class="tableH">Tc</th>
          <th scope="col" class="tableH">E-Mail</th>
        </tr>
      </thead>
      <tbody class="tableInfo">
        <?php
        if ($result->num_rows > 0) {
          $count = 1;
          while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<th scope="row">' . $count . '</th>';
            echo '<td>' . $row["name"] . '</td>';
            echo '<td>' . $row["surname"] . '</td>';
            echo '<td>' . $row["phone"] . '</td>';
            echo '<td>' . $row["tc"] . '</td>';
            echo '<td>' . $row["email"] . '</td>';
            echo '</tr>';
            $count++;
          }
        } else {
          echo "<tr><td colspan='6'>0 results</td></tr>";
        }
        ?>
      </tbody>
    </table>
  </div>

</body>

</html>

<?php
$conn->close();
?>