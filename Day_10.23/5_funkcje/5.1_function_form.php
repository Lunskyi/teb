<?php
session_start(); //запуск сессии, всегда пишется в начале
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
     <link rel="stylesheet" href="./css/style.css"> <!--указываем с какого файла берем шаблоны стиля, или сам стиль... -->
    <title>Formularz</title>
  </head>
  <body>
    <?php
      if (isset($_SESSION['error'])) {  /*задаем условие, если значение сессии существует, отлично от NULL, (в данном случае значение получаем
        с адресса ./scripts/script.php)*/
        echo "<div class=\"red\">".$_SESSION['error']."</div>"; // выводим в шапке страници значение нашей сессии, так же указываем шаблон стиля red
        unset($_SESSION['error']);// удаляем переменную действующей сессии
      }
    ?>
  <h3>Dane Uzytkownika</h3>
    <form action="./scripts/script.php" method="post"> <!--создаем форму указав безопасный способ отправки данных пользователя method="post".
      так же указываем что данные с формы будут отправленны по адресу action="./scripts/script.php" -->
      <input type="text" name="name" placeholder="Podaj imię">  <!-- создаем текстовый элементформы с именем name (name="name") с шаблоно-исчезаюзим
      значение placeholder="Podaj imię"       -->
      <input type="text" name="surname" placeholder="Podaj nazwisko"><!-- создаем текстовый элементформы с именем surname (name="surname") с шаблоно-исчезаюзим
      значение placeholder="Podaj nazwisko"       -->
      <input type="date" name="birthday"> Data urodzenia <br> <br><!-- создаем  элемент формы календарь, с именем name (name="birthday")  -->
      <input type="submit" value="Zatwierdż"><!-- создаем элемент формы кнопку, для отправки формы (данные что ввел пользователь) -->
    </form>
  </body>
</html>
