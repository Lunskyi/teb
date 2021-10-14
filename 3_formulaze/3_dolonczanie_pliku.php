<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Strona Główna</title>
  </head>
  <body>
    <h3>Strona Główna</h3>
    Począntek Strony<br>
    <form action="new.php" method="post"><!-- создаем форму для безопасного перехода по адресу
    new.php-->
      Press button <br>
      <input type="submit" name="button" value="Button"><!-- создаем элемент формы для отправки ее
    на сервер, имя button, надпись на кнопке button-->
    </form>


<?php
include 'script/test1.php'; //открывается указаный путь с папки /* warning
/*в данном случае выводится текст указанный по адресу /new.php*/
// warning програма работает дальше
// fatal error  програма прекращает свою работу при обнаружении ошибки
include './new.php'; /*открывается указаный путь, (warning) в данном случае выводится текст
указанный по адресу /new.php*/
/*include_once 'new.php';//перед открытием проверяет не был ли раньше уже открыт, warning
require 'new.php'; //открывается указаный путь, Fatal error
require_once 'new.php'; //открывается указаный путь, Fatal error*/
 ?>
  Koniec Strony<br>
  </body>
</html>
