<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Strona Glówna</title>
  </head>
  <body>
    <p>Strona Glówna</p>
    <?php
    $name='Janusz';
    $surname='Nowak';
    echo "1. imie: $name";//линейно выводим текст "1.imie: $name" где $name это переменная
    echo "<br>surname: $surname<hr>";

// heredoc это способ вывода текста после тега echo <<< и до ; (крапки с запятой)
echo <<< LABEL
  2. Imię i nazwisko $name $surname <br>
  Kurs programowania
  <br>
LABEL;

//можно прикрепить вывод текста heredoc к переменной
$text=<<<LABEL
<hr>
3. Opcja II<br>
    Imię i nazwisko $name $surname <br>
    Kurs programowania
    <br>
LABEL;

echo "<br>$text";

//skladnia nowdoc

echo <<< 'LABEL'
<hr>
  4. Imię i nazwisko $name $surname <br>
  Kurs programowania
  <br>
LABEL;
     ?>
  </body>
</html>
