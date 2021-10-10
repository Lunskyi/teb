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
    echo 'imie: $name';
    echo "<br>imie: $name<hr>";

// heredoc
echo <<< LABEL
  Imię i nazwisko $name $surname <br>
  Kurs programowania
  <br>
LABEL;

//
$text=<<<LABEL
<hr>
Opcja II<br>
    Imię i nazwisko $name $surname <br>
    Kurs programowania
    <br>
LABEL;

echo "<br>$text";

//skladnia nowdoc

echo <<< 'LABEL'
<hr>
  Imię i nazwisko $name $surname <br>
  Kurs programowania
  <br>
LABEL;
     ?>
  </body>
</html>
