<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Podaj dane twojego auta</title>
  </head>
  <body>
    <form action="result.php" method="post">
      <select name="marka_auta">
        <option value="audi">Audi</option>
        <option value="bmw">BMW</option>
        <option value="ford">Ford</option>
        <option value="honda">Honda</option>
        <option value="hyundai">Hyundai</option>
        <option value="kia">KIA</option>
        <option value="lada">Lada</option>
        <option value="mazda">Mazda</option>
        <option value="mercedes-benz">Mercedes-Benz</option>
        <option value="mazda">Mazda</option>
        <option value="nissan">Nissan</option>
        <option value="renault">Renaut</option>
        <option value="skoda">Skoda</option>
        <option value="toyota">Toyota</option>
        <option value="volkswagen">Volkswagen</option>
      </select>
      <select class="" name="">

      </select>
    <!--  <select name="rok">
        <option value="1950">
          <?php
          for ($rok=1950; $rok < date('Y'); $rok++) {
            echo "$rok <br>";
          }
           ?>
        </option>
      </select>-->
      <input type="text" name="model" placeholder="Wpisz model">
      <hr><br>Wybierz kolor auta <br>
      <input type="color" name="color">
      <hr> <br>Wybirz rok <br>
      <input type="date" name="date" value="">
      <input type="submit" name="button" value="Zatwierdż">


    </form>
  </body>
</html>
