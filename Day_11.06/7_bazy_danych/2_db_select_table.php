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
          </tr>
        USER;
      }
      echo "</table>";

      // echo "<pre>";
      // print_r($row);
      // echo "</pre>";
     ?>

  </body>
</html>
