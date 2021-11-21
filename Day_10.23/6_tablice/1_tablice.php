<?php
  // tablica indeksowana
  $person1 = array('Janusz','Nowak', 20, 10 => 5, 1 => "Kowalski");
    /*создаем переменную $person1 которой присваиваем массив:
      Array ( [0] => Janusz [1] => Kowalski [2] => 20 [10] => 5 )
    массив начинается с 0 и до начала изменений массив выглядит так
      Array ( [0] => Janusz [1] => Nowak [2] => 20 )
    10 => 5 здесь мы значение 5 присваиваем индексовый номер 10 и массив выглядит так
      Array ( [0] => Janusz [1] => Nowak [2] => 20 [10] => 5)
    1 => "Kowalski" здесь мы значение "Kowalski" присваиваем индексовый номер 1. то есть заменяем
    Nowak на Kowalski и наш массив выглядит так
      Array ( [0] => Janusz [1] => Kowalski [2] => 20 [10] => 5 )
    */
  print_r($person1); // выводим переменную $person1 с нашем массивом
  echo '<hr>'; //горизонтальная линия

  //Tablica asocjacyna
  $car = array( //создаем переменную $car которой присваиваем массив:
    'brand'=> 'Ferrari', //вместо ин. номера [0] - значение Ferrari присваивается [brand]
    'model'=> 'F430', //вместо ин. номера [1] - значение F430 присваивается [model]
    'lenght'=> 200, //вместо ин. номера [2] - значение 200 присваивается [lenght]
    'price'=> 1500000.5, //вместо ин. номера [3] - значение 1500000.5 присваивается [price]
    );
  echo "<pre>";
  print_r($car); //выводим переменную $car с созданным массивом в вертикальном формате
  echo "</pre>";

  // typy danych
  echo '<hr>'; //горизонтальная линия
    //функция gettype определяет тип данных
    echo gettype($car['brand']); //определяется тип данных поля [brand] массива array,что присвоин переменной $car
  echo '<hr>'; //горизонтальная линия
    echo gettype($car['price']); //определяется тип данных поля [price] массива array,что присвоин переменной $car
  echo '<hr>'; //горизонтальная линия
    echo gettype($car['lenght']); //определяется тип данных поля [lenght] массива array,что присвоин переменной $car
  echo '<hr>'; //горизонтальная линия


  // tablica wielowymiarowa
  $person = array( //создается массив и присваивается переменной $person
    array("Jan","Nowak", 173), //создается индексованый подмасив как поле массива (имя, фамилия и рост)
    array("Anna","Kowalska", 160), //создается второй индексованый подмасив как поле массива (имя, фамилия и рост)
    array("Katerzyna","Kowalska") //создается третий индексованый подмасив как поле массива (имя, фамилия)
    );
  echo "<pre>";
  print_r($person); // вывод переменной со значением массива в вертикальном формате
  echo "</pre>";
  echo '<hr>'; //горизонтальная линия


  foreach ($person as $key => $value) { /* пошагово перебираем массив $person
    $key - это индексовый номер подмасива
    $value - подмасив*/
    //echo $key ."<br>"; // выводим переменную $key (индековый номер массива)
    $count=$key+1; //вводим переменную $count и надаем значение $key +1 (индековый номер +1)
    echo "Tablica ".$count."<br>"; // выводим текст Tablica и значение переменной $count (Tablica 1)
    //начинаем вывод от PERSON
    echo <<< PERSON
      Imię: $value[0], Nazwisko: $value[1]
      PERSON; //заканчиваем вывод PERSON
      /*PERSON
      Imię: $value[0], Nazwisko: $value[1] /*выводим текст Imię: переменную $value[0] (значение подмасива под индексовым номер 0)
      далее Nazwisko: и переменую $value[1] (значение подмасива под индексовым номер 1)
      PERSON*/
    if (isset($value[2])) { // создаем условие если переменная $value[2] существует ($value[2] значение подмасива под индексовым номер 2):
      echo ", wzrost: ".$value[2]; //выводим ", wzrost: " и значение $value[2] (значение подмасива под индексовым номер 2)
    }
    echo "<br>"; //переносим на следующую строку
  }
  //echo "$count";
   echo "<br>Iłośc elementuv tablicy: ". count($person); // выводим Iłośc elementuv tablicy: и количество элементов в массиве переменной $pesona
 ?>