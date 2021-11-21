<?php
session_start();
// sprawdzenia wypelnenia wszystkich polegal
if (!empty($_POST)) {
  foreach ($_POST as $key => $value){
    echo "$key->$value<br>";
    if (empty($value)) {
      $_SESSION['error']= "Wypelni wszystki pola";
//      header('location ../pages/register.php');
        echo "<script>history.back()</script>";
      exit();
    }
}
  if (!isset($_POST['terms'])) {
    $_SESSION['error']= "Zatwierdz regulamin!";
    echo "<script>history.back()</script>";
  exit();
  }

  $error=0;

  if ($_POST['password']!=$_POST['password1']) {
    $_SESSION['error']= "Hasla sa rozne";
    $error=1;
  }
  if ($_POST['email']!=$_POST['email1']) {
    $_SESSION['error']= "Email sa rozne";
    $error=1;
  }

  if ($error==1) {
    echo "<script>history.back()</script>";
    exit();
  }

}

//szyfrowanie za pomoca ARGON2ID
$pass=password_hash($_POST['password'], PASSWORD_ARGON2ID);

//dodawanie uzytkownika
require_once './connect.php';
  $sql="INSERT INTO `users` (`email`, `city_id`, `name`, `surname`, `birthday`, `gender`, `password`) VALUES (?,?,?,?,?,?,?);";

  $stmt = $db->prepare($sql);
  $stmt->bind_param("sssssss",$_POST['email'],$_POST['city_id'],$_POST['name'],$_POST['surname'],$_POST['birthday'],$_POST['gender'],$pass);
    if ($stmt->execute()) {
      $_SESSION['error']= "Prawidlowo dodano uzytkownika";
      header('location: ../');
    } else {
      $_SESSION['error']= "Nie dodano uzytkownika";
      header ('location: ../pages/register.php');
    }
 ?>
