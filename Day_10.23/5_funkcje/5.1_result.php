<?php
session_start(); //запускаем сессию, в данном случае указываем что этот файл тоже работает с основной сессией
 //var_dump($_SESSION); //вывод значения сессии
// echo "<pre>";
 //print_r($_SESSION); // вывод значение сессии в вертикальной форме
// echo "</pre>";
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <title>Dane z formularza</title>
  <body>
    <?php
  //print_r($_SESSION['data']);
  echo "<h3>Dane pobrane z formularza</h3>"; // вывод текста "Dane pobrane z formularza" <h3></h3> - размер букв
    foreach ($_SESSION['data'] as $key => $value) { /*начинаем  пошаговый перебор массива $_SESSION['data'] (который мы получили через сессию),
      так же:
      $key - это имя элемента формы (input name "test" будет в итоге test)
      $value - значение что ввел пользователь (input name "test", value "value")*/
      //echo "<br>".$key . " - " . $value . "<br>"; // первый способ вывода
      echo "$key : $value, dlugość: " .strlen($value). "<br>"; /* второй способ вывода. Идет пошаговый вывод
      каждого элемента массива $_SESSION['data']. также функция strlen($value) подсчитывает количество символов в переменной $value и
      выводит результат на экран*/
    }
  echo "<hr><h3>Poprawione dane: </h3>"; // вывод текста "Dane pobrane z formularza" <h3></h3> - размер букв
  require_once './functions/function.php'; /*Выражение require_once аналогично require за исключением того, что PHP проверит, включался ли
  уже файл './functions/function.php', и если да, не будет включать его ещё раз. Вызвали файл с функциями*/
    foreach ($_SESSION['data'] as $key => $value) { // запускаем пошаговый перебор всех елементов массива $_POST как $key => $value
      if ($key!='birthday') { // задаем условие если значение переменной $key не ровняется значению 'birthday'
        echo "$key: $value<br>"; // выводим значение переменной $key и переменной $value
      }else { // если значение переменной $key ровняется значению 'birthday'
        echo "$key: ".validateData($value, 4)."<br>"; // выводим значение переменной $key и значение функцию validateData с переменной $value
      }
    }
     ?>
  </body>
</html>
