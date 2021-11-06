<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Uzytkownicy</title>
  </head>
  <body>
    <h4>Uzytkownicy</h4>
    <?php
      $connect = new mysqli("localhost", "root", "", "teb"); // 1 откуда, 2- логин, 3 - пароль, 4 - назва
      //$sql = "SELECT * FROM `users`;";
      $sql = "SELECT * FROM `users` INNER JOIN `cities` ON users.city_id = cities.city_id;";
      $result = $connect->query($sql);
    //$row = $result->fetch_assoc();
   //print_r($row);
   //echo $row['name'];
   while ($row = $result->fetch_assoc()) {
     echo <<< USER
         Id: $row[user_id]<br>
         Imię i nazwisko: $row[name] $row[surname] <br>
         Miasto: $row[city] <br>
         Data urodzenia: $row[birthday]
         <hr>
     USER;
      }
          // echo "<pre>";
      // print_r($row);
      // echo "</pre>";
     ?>

  </body>
</html>
