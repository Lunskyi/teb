<?php
// tablica indeksowana
$person1 = array('Janusz','Nowak', 20, 10 => 5, 1 => "Kowalski");
print_r($person1);
echo '<hr>';

//Tablica asocjacyna
$car = array(
  'brand'=> 'Ferrari',
  'model'=> 'F430',
  'lenght'=> 200,
  'price'=> 1500000.5,
);
echo "<pre>";
print_r($car);
echo "</pre>";

// typy danych
echo '<hr>';
  echo gettype($car['brand']);
  echo '<hr>';
  echo gettype($car['price']);
  echo '<hr>';
  echo gettype($car['lenght']);

  // tablica wielowymiarowa
  $person = array(
    array("Jan","Nowak", 173),
    array("Anna","Kowalska", 160),
    array("Katerzyna","Kowalska")
  );
  echo "<pre>";
  print_r($person);
  echo "</pre>";

  foreach ($person as $key => $value) { // в таблице person отделяем
    //echo $key ."<br>";
    $count=$key+1;
    echo "Tablica ".$count."<br>";
    echo <<<PERSON
      Imię: $value[0], Nazwisko: $value[1]
      PERSON;
      if (isset($value[2])) {
        echo ", wzrost: ".$value[2];
      }
      echo "<br>";
    }
    echo "<br>Iłośc elementuv tablicy: ".count($person);
 ?>
