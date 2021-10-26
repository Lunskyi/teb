<?php
function show() {  //создание функции с именем show без каких то параметров.
echo "test"; // функция выводит значение test
return "test";// возвращаем значение функции дальше в оборот
}

function validateData($data, $len) { //создаем функцию validateData с двумя переменными $data, $len (общиц шаблон функции для использования)
  return substr(ucfirst(mb_strtolower(trim($data))), 0, $len  ); /* возврат данных return $data . " It's work" - на выходе получу "данные It's work"
  так же используем стандартные функции к переменной $data
     trim - Удаляет пробелы (или другие символы) из начала и конца строки
     mb_strtolower - все символи приводит в нижний рял (все буквы изменяются на маленькие)
     ucfirst - первый символ строки преобразовывает в верхний ряд (первая буква слова превращается в большую букву)
     substr - ограничиваем количество символов в строке
      0 - обозначает к-ство символов перед
      $len - обозначивает количество символов в строке, значение переменной $len указывается при использовании самой функции в коде
  */
}
  ?>
