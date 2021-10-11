<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pole i obwod</title>
  </head>
  <body>
    <?php
if(!empty($_POST['sideA'])&&(!empty($_POST['sideB']))) {
$a=str_replace(",",".",$_POST['sideA']);
$b=str_replace(",",".",$_POST['sideB']);
$area=$a*$b;
$rectangle=2*$a+$b;

echo <<< RESULT
  Dlugosci bokow<br>
  a=$a, b=$b <br>
  Pole wnosi: $area cm<sup>2</sup><br>
  Obwod wynosi: $rectangle cm<br>
  RESULT;
} else {
echo "Wypelnij prawidlowo";
}
     ?>
     <a href="./skrypt.php">Strona Glowna</a>
  </body>
</html>
