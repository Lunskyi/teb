<?php
$_POST = array();
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formularz</title>
  </head>
  <body>
    <h3>Podaj ilosc ulubionych kolorow</h3>
    <form method="post">
      <input type="number" name="ilosc" placeholder="Ilosc kolorow">
      <input type="submit" name="button" value="Zatwierdz">
    </form>
    <?php
      if (empty($_POST['ilosc'])) {
        echo "Wypelni kolor";
        ?>
        <form action=./6_script.php method=POST>;
        <?php
      for ($i=0; $i <$_POST['ilosc']; $i++) {
        $count=$i+1;
        echo "<input type=\"text\" name=\"color$i\" placeholder=\"Ulubiny kolor $count\"><br><hr>";
    }
    echo'<input type="submit" value="Zatwierdz">';
    echo " </form>";
  }
    ?>
  </body>
</html>
