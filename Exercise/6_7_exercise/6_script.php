<?php
$colors=[];
foreach ($_POST as $value) {
  array_push($colors, $value);
}
print_r($colors);
$colorsFavorite=array_map(fn($color)=>strtolower(trim($color)), $colors);
sort($colorsFavorite);
print_r($colorsFavorite);

echo "<br>Ilosc ulubionych kolorow: ".count($colorsFavorite)."<br>"; // -.count-считает количество элементов в массиве
 ?>
