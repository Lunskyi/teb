<?php
//   function childName() {//создаем функцию childName
//     return 'Franek'; //возвращаем значение фукнкции
//   // }
//   // print_r(childName()); //вывод массива
//   //   echo "<br>","<hr>";
//   // var_dump(childName()); //вывод массива с доп инф
//   //   echo "<br>","<hr>";
//   $childs= [ // создаем обьемный массив и присваиваем его переменной $childs
//     ['id' => '1','name'=>'Franek'], //первый асоциативны массив
//     ['id' => '2','name'=>'Jagoda  '], //второй ассоциативый массива
//   ];
//     echo "<pre>";
//   print_r($childs); // вывол обьемного массива в вертикальном формате
//     echo "</pre><hr>";
//   $validateChildNames = array_map(function($child){
//     return $child;
//   }, $childs);
//   print_r($validateChildNames);
//     echo "<pre>";
//   print_r($validateChildNames);
//     echo "</pre><hr>";
//
// #######################################
//
//   $name = function(){
//   return 'Franek';
//   };
//   var_dump($name()); //вывод массива с доп инф
//     echo "<hr>";
//
//   $name=fn()=>'Franek';
//     var_dump($name()); //вывод массива с доп инф
//       echo "<hr>";
//
// ######################################
//
//   $multi=fn($a,$b)=>$a*$b; /* создаем функцию и указываем шаблон с двумя переменными которые мы переумножаем, так же эти переменные указываются
//   при выводе. и всю функцию присваиваем переменой $multi. в дальнейшем можем вызвать функцию так
//   $multi($a,$b) - по простому то мы дали имя этой функц multi
//   */
//   var_dump($multi(4,5)); // выводим массив с доп инф (тип данных) в дужках указав переменные $a-4 i $b-5, в данном случае
//   echo "<br>";
//   var_dump($multi(4.5,5)); // выводим массив с доп инф (тип данных) в дужках указав переменные $a-4.5 i $b-5, в данном случае
//   echo "<br>";

########################################

  // $fruits=[ //создаем обьемный массив и присвоил переменной $fruits
  //   ['name' =>'apple','price'=>6], // первый ассоциативый масив
  //   ['name' =>'lemon','price'=>10.5] // второй ассоциативый масив
  // ];
  //
  //   echo "<pre>";
  // print_r($fruits); // выведом обьемный массив в вертикальном формате
  //   echo "</pre>";
  //   echo "<hr>"; // горизонтальная линия
  //
  // $sale = array_map(function($fruit) { /* ко всем элементам массива применяем функцию, шаблон которой несет в себе переменную $fruit и
  //   результат присваиваем переменнйо $sale*/
  //   return $fruit['name']; // указываем какие действия будут у нас в функции (возвращаем значение массива в поле name)
  // }, $fruits); // указываем с каким массивом будем работать ($fruits)
  //
  //   echo "<pre>";
  // print_r($sale); // вывод массив что получили после применения функции в вертикальном формате
  //   echo "</pre>";
  //   echo "<hr>"; // горизонтальная линия
  //
  // $sale=array_map(fn($fruit)=>$fruit['name'], $fruits); /*переменной $sale присваиваем массив что получился у нас после применения фукнкции
  // fn($fruit) - шаблон функции
  // fn - обозначает начало фукнкции
  // ($fruit) - ввели переменную, и указали что шаблон будет индексированным (от нуля) и дальше значение переменной $fruit
  // => - заменяем { return ...},
  // $fruit['name'] - обозначает возвращение переменной, со значением ассоциативного массива в поле name
  // $fruits - указываем с каким массивом имеем дело
  // */
  // print_r($sale); // выводим индексированный массив после обработки
  //   echo "<br><hr>";

####################################

  $name='agnieszka'; // переменной $name присваиваем текстовое значение agnieszka
  $split=str_split($name); //str_split преобразовывает текстовое значение переменой $name в индексовый массив и результат присваиваем $split

  //print_r ($split); // выводим на экран массив

  $result=array_map(function($char) { //ко всем элементам индекс. массива $spit применяется функцию с переменной $char и присваиваем к $result
    return ['char'=>$char]; // функция добавляет в индексовый массив каждому элементу, поле с именем char, что бы в итоге получить обьемный массив
  }, array_unique($split)); // указываем какой массив обрабатываются, array_unique - удаляет дубли внутри массива $split

  // $text=function($name){ // переменой $text присваиваем функцию с новой переменной name
  //   return "Imię: ".$name;// возврашаем текст I
  // };

  echo "<hr>";

  $text=array_map(fn($name)=>$name[$name]], $split);
  print_r ($text);
  echo "<pre>";
  var_dump($result);
  echo "</pre>";
  echo "<br><hr>";

####################################

$name='adam';
$split=str_split($name);
/*
$result1=array_map(function($char, $count)
{
  return [
    'char'=>$char,
    'occurs'=>$count
  ];
}, array_unique($split), array_count_values($split)); /// удаляет дубли

*/
$result=array_map(fn($char, $count)=>['char'=>$char, 'occurs'=>$count], array_unique($split), array_count_values($split));
echo "<pre>";
var_dump($result);
//var_dump($result1);
echo "</pre>";
echo "<br><hr>";

##################################################

// $user=null;
// $user=['name'=>'vlad'];
$user=' ';
$user=trim($user);

/*
$result=function() use($user) {
  if (!$user) {
    return 'brak dannych';
  }
   return 'Witaj '.$user['name'];
};
*/
$result=fn()=>!$user ?'brak dannych':'Witaj '. $user['name'];// ? вместо условия if   :
print_r($result());

 ?>
