<?php
echo "4.soru";
$array_with_keys = array();
$array_with_keys["name"] = "John";
$array_with_keys["age"] = 30;
$array_with_keys["city"] = "New York";

$array_without_keys = array();
$array_without_keys[] = "Apple";
$array_without_keys[] = "Banana";
$array_without_keys[] = "Orange";

echo "Dizi 1 (Key değerleri olan dizi): <br>";
print_r($array_with_keys);
echo "<br><br>";

echo "Dizi 2 (Key değerleri olmayan dizi): <br>";
print_r($array_without_keys);

?>