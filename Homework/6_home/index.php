<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="./css/style.css">
    <title>FORMULARZ</title>
  </head>
  <body>
    <?php //шаблон вывода $_SESSION['error']
      if (isset($_SESSION['error'])) {
        echo "<div class=\"red\">".$_SESSION['error']."</div>";
        unset($_SESSION['error']);
      }
     ?>
    <h3>Ilość osób w rodzine</h3> <!--форма для ввода количества родственников -->
    <form method="post">
      <input type="number" name="ilosc" value="" placeholder="Podaj iłość">
      <input type="submit" value="Zatwierdż">
    </form>
    <?php //при ошибочном вводе данных родственника, возврашаем количество родственников для повторного заполнения
      if (isset($_SESSION['number'])) {
        $_POST['ilosc']=$_SESSION['number'];
        unset($_SESSION['number']);
      }
        if (!empty($_POST)) {
          if (isset($_POST['ilosc'])&&$_POST['ilosc']>0) {
          // echo "<pre>";
          // print_r($_SESSION['number']);
          // echo "</pre>";
            $number=$_POST['ilosc'];
            ?><form action="./script.php" method="post"><?php
              for ($i=0; $i < $number; $i++) {
                $osoba=$i+1;
                echo "<h2>Podaj dane osoby $osoba</h2>";
                ?>
                <input type="text" name="<?php echo $i; ?>[name]" placeholder="Imię"> <!--echo $i я должен высветлить переменную в обязательном порядке-->
                <input type="text" name="<?php echo $i; ?>[surname]" placeholder="Nazwisko">
                <input type="number" name="<?php echo $i; ?>[height]" placeholder="Wzrost">
                <?php

                echo "<hr>";
            }
            ?> <input type="submit" value="Zatwierdż">
            </form> <?php
          } else {
            $_SESSION['error']="Wypelni pole prawidlowo";
            header('location ./index.php');
        }
      }
      echo "<br>";
   if (isset($_SESSION['error'])) {
     echo "<h2>$_SESSION[error]</h2>";
     unset($_SESSION['error']);
   }
      ?>
  </body>
</html>
