<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>Uzytkownicy</title>
  </head>
  <body>
    <h4>Uzytkownicy</h4>
    <?php
    require_once './scripts/connect.php';
      // $connect = new mysqli("localhost", "root", "", "teb"); // 1 откуда, 2- логин, 3 - пароль, 4 - назва
      //$sql = "SELECT * FROM `users`;";
      $sql = "SELECT * FROM `users` INNER JOIN `cities` ON users.city_id = cities.city_id;";
      $result = $connect->query($sql);
      echo <<<TABLE
        <table>
          <tr>
            <th>Id</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Miasto</th>
            <th>Data urodzenie</th>
           </tr>
      TABLE;

      //$row=$result->fetch_assoc();
      //print_r($row);
      //echo $row['name'];
      while ($row = $result->fetch_assoc()) {
        echo <<< USER
          <tr>
            <td>$row[user_id] </td>
            <td>$row[name] </td>
            <td>$row[surname] </td>
            <td>$row[city] </td>
            <td>$row[birthday] </td>
            <td><a href="scripts/delete.php?deleteId=$row[user_id]">Usuń</a></td>
          </tr>
        USER;
      }
      echo "</table>";
        // if (isset($_SESSION['aRow'])) {
        //   if ($_SESSION['aRow']==-1) {
        //     echo "<h3>Nie usuniento dannych </h3>";
        //   } else {
        //     echo "<h3>Usuniento dannych ".$_SESSION['aRow']."</h3><br>";
        //     echo "<h3>Numer id: ".$_SESSION['id']."</h3><br>";
        //     unset($_SESSION['id']);
        //   }
        // }
        // unset($_SESSION['aRow']);

        if (isset($_GET['addUser'])) {
          echo <<< FORM
          <hr>
            <h4>Dodaj uzytkownika </h4>
            <form action="./scripts/insert.php" method="post">
              <input type="test" name="name" placeholder="Podaj imię">
              <input type="test" name="surname" placeholder="Podaj nazwisko">
              <select name="city_id">
          FORM;
            $sql = "SELECT * FROM `cities`";
            $result=$connect->query($sql);
              while ($city = $result->fetch_assoc()) {
                echo <<< CITY
                  <option value="$city[city_id]">$city[city]</option>
                CITY;
              }
          echo <<< FORM2
              </select>Wybierz miasto<br><br>
              <input type="date" name="birthday"> Data urodzenja <br>
              <input type="submit" name="" value="Zatwierdz"><br>
            </form>
          FORM2;
        } else {
          echo '<a href="4_db_select_table_insert.php?addUser=">Dodaj uzytkownika</a>';
        }



      // echo "<pre>";
      // print_r($row);
      // echo "</pre>";
     ?>

  </body>
</html>
