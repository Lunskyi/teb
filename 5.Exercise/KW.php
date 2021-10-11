<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Obliczenie kwadratu</title>
  </head>
  <body>
    <?php
    if (empty($_POST)) {
      echo "Wypelnij Dane";
    } else {
      $a=str_replace(",",".",$_POST['side']);
      $area=number_format($a**2, 2); // **вознесение в степень
      $rectangle=$a*4;
      //number_format(x, y) x - переменная или действия с ней, у - сколько цифр после запятой
    }
echo <<< RESULT
      Strona boka $a <br>
    Rectangle $rectangle cm<br>
    Area $area cm<sup>2</sup><br>

RESULT;
    ?>
    <a href="./5_Kwadrat.php">Strona Glowna</a>

  </body>

</html>
