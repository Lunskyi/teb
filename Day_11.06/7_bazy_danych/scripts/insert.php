<?php
session_start();
if (!empty($_POST)) {
  foreach ($_POST as $key => $value) {
    if (empty($value)) {
      $_SESSION['error']="<br>Wypelni wszystkie danne w formularzu<br>";
      echo "<script>history.back()</script>";
      exit();
    }
  }
    require_once './connect.php';
    $sql="INSERT INTO `users` (`user_id`,`name`,`surname`,`birthday`,`city_id`,`create_user`) VALUES (NULL,'$_POST[name]','$_POST[surname]','$_POST[birthday]','$_POST[city_id]', current_timestamp());";

    $connect->query($sql);
      if ($connect->affected_rows) {
        $_SESSION['error']="Prawidlowo dodano uzytkownika";
      } else {
        $_SESSION['error']="Prawidlowo dodano uzytkownika";
      }

}
header('location: ../4_db_select_table_insert.php');

 ?>
