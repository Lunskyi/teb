<?php
session_start();
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// если  данные веденны то
  if (!empty($_POST)) {
    //разделяем массив пост и проверяем внесенны ли данные в каждое поле
    foreach ($_POST as $key => $value) { // перебираем массив
      foreach ($value as $data) { // перебираем именно массив только по полю value
        // echo "<pre>";
        // print_r($value);
        // echo "</pre>";
        // echo "<hr>";
        // print_r($data);
        // echo "<hr>";

        if (empty(trim($data))) { // если в поле value пустое значене, то есть само поле пустое
          $_SESSION['error']="Wypelni wszystkie pola"; // сессийное [error] сообщение Wypelni pole
          $_SESSION['number']=count($_POST);// сессийные данные для передачи
          header('location: ./index.php');
          exit();
        }
      }
    }
    foreach ($_POST as $key => $value) {
      $_SESSION['magazyn']['member'.$key]=$value;
    }
      header('location: ./result.php');
  } else {
    $_SESSION['error']="Wypelni Formularz";
    header('location: ./index.php');
  }

      // echo "<pre>";
      // print_r($_SESSION['magazyn']);
      // echo "</pre>";

?>
