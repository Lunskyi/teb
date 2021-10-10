<!DOCTYPE html>
<html lang=pl dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--    komentarz w HTML -->
    <?php
    // komentarz w jednej linii
    /*
    komentarz w
    wielu
    liniach
    */

    // .kontonacja = sojedinenije stroki w php
    $name="Janusz";
    $surname="Kowalski";
    echo "1. Imię"." i nazwisko: $name"."$surname";

$text = "<br>2. Imię i nazwisko: ";
$text .=$name;
echo $text;
$text = $surname;
echo "<br>$text";

// , Interpolacija = razdielienie stroki
echo "<br>3. Imię","i nazwisko";
     ?>

  </body>
</html>
