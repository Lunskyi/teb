<!DOCTYPE html>
<html lang="PL" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Poczatek Stony</title>
  </head>
  <body>
    <?php
  if(!empty($_POST['sideA'])&&(!empty($_POST['sideB']))) { /*с помощью empty проверяем не пустые ли у нас
    переменные sideA i sideB*/
    //если переменные заполненные, тогда
    $a=str_replace(",",".",$_POST['sideA']);/*созданной переменной а присваиваем данные переданые на сервер
      с элемента поля sideA, так же с помощью функции str_replace заменяем запятые в точки в масиве символов
      с поля sideA*/
    $b=str_replace(",",".",$_POST['sideB']);/*созданной переменной b присваиваем данные переданые на сервер
      с элемента поля sideB, так же с помощью функции str_replace заменяем запятые в точки в масиве символов
      с поля sideB*/
    $area=$a*$b;//высчитываем площадь прямоугольника
    $rectangle=2*$a+2*$b;//высчитываем периметр

    echo <<< RESULT
      Dlugosci bokow<br>
      a=$a, b=$b <br>
      Pole wnosi: $area cm<sup>2</sup><br>
      Obwod wynosi: $rectangle cm<br>
    RESULT;
  } else {
    echo "Wypelnij prawidlowo";
  }//при условии что переменные пустые выводим текст "Wypelnij prawidlowo"
     ?>
     <a href="./4_area.php">Strona Glowna</a><!--создаем ссылку для возврата  на главный экран -->
   </body>
 </html>
