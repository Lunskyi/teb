<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dane Użytkownika</title>
  </head>
  <body>
    <h3>Dane Użytkowni</h3>
    <form method="get">
      <input type="text" name="name" placeholder="Podaj imię"><br><br>
      <input type="text" name="surname" placeholder="Podaj Nazwisko"><br><br>
      <input type="radio" name="sex" value="m" checked> męczyzna    <!-- cheked -->
      <input type="radio" name="sex" value="w"> kobieta<br><br>
Narodowość
        <select name="nationality">
          <option value="polska">Pólska</option>
          <option value="ukrainska">Ukrainska</option>
          <option value="angelska">Angelska</option>
        </select>
        <br>Twoj color  <input type="color" name="color"><br>
      <input type="submit" name="button" value="Zatwierdż"><hr>
    </form>

    <?php
    //подсказка под поле (серый фон)
    //isset — Определяет, была ли установлена переменная значением, отличным от null
    //empty - Проверка пуста ли переменная
    if (isset($_GET['button'])) {
      if (!empty($_GET['name'])&&!empty($_GET['surname'])&&!empty($_GET['sex'])) {
      //первый способ вывести результат
      /*echo "Twoje imię: ",$_GET['name'];
      echo "<br>";
      echo "Twoje nazwisko: ",$_GET['surname'];
      */
      //второй способ вывести результат
      //echo "Twoje imię i nazwisko: $_GET[name] ".$_GET['surname'];
      //третий способ
      /*echo <<< DATA
      Twoje imię i nazwisko: $_GET[name] $_GET[surname]<br>
      Płec: $_GET[sex]
      DATA;
      */
      $name=trim($_GET['name']);
      $name=substr(ucfirst(strtolower($name)),0,10);
      $surname=trim($_GET['surname']);
      $surname=substr(ucfirst(strtolower($surname)),0,15);
      //ucfirst — Преобразует первый символ строки в верхний регистр
      //trim — Удаляет пробелы (или другие символы) из начала и конца строки
      switch ($_GET['sex']) { // Условиe запускается при нахождении переменной
        case 'm':
          $sex = 'mężczyzna';
          break;

        default:
          $sex = 'baba';
          break;
      }
      echo strlen($name),"<br>";//выводит количество букв в переменной $name
      echo strlen($surname);//выводит количество букв в переменной $surname
      echo <<< DATA
      <br>Twoje imię i nazwisko: $name $surname<br>
      Płec: $sex<br>
      Narodowość: $_GET[nationality]<br>
      Color: $_GET[color]<br>
      DATA;
        }
        else {
          echo "Wypelnij dane!";
        }
      }
      echo "<hr>";
     ?>
  </body>
</html>
