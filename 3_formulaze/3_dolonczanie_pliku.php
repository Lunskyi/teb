<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Strona Główna</title>
  </head>
  <body>
    <h3>Strona Główna</h3>
    Począntek Strony<br>
<?php
include './new.php'; //открывается указаный путь warning
include_once 'new.php';//перед открытием проверяет не был ли раньше уже открыт warning
require 'new.php'; //открывается указаный путь, Fatal error
require 'new.php'; //открывается указаный путь, Fatal error однажды

include 'script/test1.php'; //открывается указаный путь с папки warning

 ?>
  Koniec Strony<br>
  </body>
</html>
