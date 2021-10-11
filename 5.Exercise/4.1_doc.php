<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dane Użytkownika</title>
  </head>
  <body>
    <h3>Dane Użytkowni</h3>
    <form method="get"> <!-- тег form устанавливает форму на веб-странице.
    Форма предназначена для обмена данными между пользователем и сервером.
    method="get" говорит нам что форма будет отправлять данные которые ввел пользователь
    на сервер.
    Form action="./х.рhp" в данном случае введенные данные будут переданны (или перенесенны) в путь ./х.рhp-->
      <input type="text" name="name" placeholder="Podaj imię"><br><br><!--input создает элемент поля формы.
        Основной атрибут тега <input>, определяющий вид элемента — type. Он позволяет задавать следующие элементы формы: текстовое поле (text),
        поле с паролем (password), переключатель (radio), флажок (checkbox), скрытое поле (hidden), кнопка (button),
        кнопка для отправки формы (submit), кнопка для очистки формы (reset), поле для отправки файла (file) и
        кнопка с изображением (image).
        В данном случае, type="text" это текстовое поле где пользователь вводит информацию.
        name - это название данного элемента формы.
        placeholder это атрибут для элемента формы (input). Атрибутов так же много, именно этот placeholder - выводит
        подсказывающий текст "Podaj imię"
        -->
      <input type="text" name="surname" placeholder="Podaj Nazwisko"><br><br> <!-- Сменилось только name элемента -->
      <input type="radio" name="sex" value="m" checked> męczyzna    <!-- cheked (подсвечивает) данный элемент формы,
      type="radio" - переключательб, имя элемента sex и атрибут value - указывает значение элемента "m"-->
      <input type="radio" name="sex" value="w"> kobieta<br><br> <!--от предыдущего элемента формы отличается значением в атрибуте value   -->
Narodowość
        <select name="nationality"> <!--Тег <select> позволяет создать элемент интерфейса в виде раскрывающегося списка,
          а также список с одним или множественным выбором, как показано далее. Можно указать атрибут, их много  -->
          <option value="polska">Pólska</option>  <!--Тег <option> определяет отдельные пункты списка, создаваемого с помощью контейнера <select>.
          А атрибут value - значение пункта списка, которое будет отправлено на сервер или прочитано с помощью скриптов.  -->
          <option value="ukrainska">Ukrainska</option>
          <option value="angelska">Angelska</option>
        </select>
        <br>Twoj color  <input type="color" name="color"><br> <!--Тег цвета   -->
      <input type="submit" name="button" value="Zatwierdż"><hr> <!-- Для отправки формы на сервер используется кнопка Submit.
      submit это тип элемента формы  -->
    </form>

    <?php
    //подсказка под поле (серый фон)
    //isset — Определяет, была ли установлена переменная значением, отличным от null.
    //empty - Проверка пуста ли переменная
    if (isset($_GET['button'])) {  //если переменная $_GET['button'] отлична от нуля (если была нажата кнопка),то
      if (!empty($_GET['name'])&&!empty($_GET['surname'])&&!empty($_GET['sex'])) { //если поля под названием name, surname, sex не пустые, то
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
      $name=trim($_GET['name']);//вводим в условие переменную $name и с помощью функции trim Удаляет пробелы (или другие символы) из начала и конца строки (поля под названием name)
      $name=substr(ucfirst(strtolower($name)),0,10); /*здесь очищенную от пробелов переменную $name с помощью функции strtolower преобразовываем
      все символы строки в нижний реестр (все буквы маленькие), а потом используем функцию ucfirst чтобы преобразовать
      первыйсимвол строки в верхний реестр (первая буква большая).Функция substr ограничивает 10 символами*/
      $surname=trim($_GET['surname']);
      $surname=substr(ucfirst(strtolower($surname)),0,15);
      //ucfirst — Преобразует первый символ строки в верхний регистр
      //trim — Удаляет пробелы (или другие символы) из начала и конца строки
      //substr - Ограничивать количество символов.
      switch ($_GET['sex']) {
        /*
        Оператор switch похож на ряд операторов IF с одинаковым условием.
        Switch (x) - где switch это оператор, а х это усовие.
        В данном switch ($_GET['sex']), условие обозначенно - $_GET['sex']
        $_GET - это данные что мы взяли с поля <form> методот get () начале <body>
        */
        case 'm': /*сравниваем переменную $_GET ['sex'] со значением 'm', если совпадает то переменной $sex присваивается значение
        'mężczyzna' и с помощью break выходим из оператора switch*/
          $sex = 'mężczyzna';
          break;

        default:/*по умолчанию если переменная не находит совпадения, то переменной $sex присваивается значение 'baba' и
        с помощью break выходим из оператора switch*/
          $sex = 'baba';
          break;
      }
      echo strlen($name),"<br>";//с помощью функции strlen подсчитываем количество символов в переменной $name и выводим
      echo strlen($surname);//с помощью функции strlen подсчитываем количество символов в переменной $surname и выводим
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
