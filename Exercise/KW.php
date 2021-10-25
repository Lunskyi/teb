<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Obliczenie kwadratu</title>
  </head>
  <body>
    <?php
    if (empty($_POST)) {/* переменная $_POST - данные что переданны с формы на сервер. Задаем
      условие: с помощью функции empty проверяем были ли заполненны данные (не является ли
      переменная пустой)*/
      echo "Wypelnij Dane";//если поле пустое то выводится текст "Wypelnij Dane"
    } else {
      $a=str_replace(",",".",$_POST['side']);/*создает переменную а. С помощью функции str_replace
      мы в масиве данных в переменной $_POST['side'] ищем символ "," и заменяем его на ".", а также
      присваиваем отредактированные данные переменной а. */
      $area=number_format($a**2, 2); /* создаем переменную area (площадь). С помощью функции
      number_format(x, y) x - переменная или действия с ней(в данном случае переменная а
      **возносится в степень), у - указывает сколько цифр после запятой (указываем формат чисел)*/
      $rectangle=$a*4; /*создаем переменную rectangle (периметр)*/
      //number_format(x, y) x - переменная или действия с ней, у - сколько цифр после запятой
    }
echo <<< RESULT
      Strona boka $a <br>
    Rectangle $rectangle cm<br>
    Area $area cm<sup>2</sup><br>

RESULT;
    //Вывели на экран переменные
    ?>
    <a href="./5_Kwadrat.php">Strona Glowna</a> <!--создаем ссылку с назвой Strona Glowna -->

  </body>
</html>
