<?php
function childName()
  {
    return 'Franek';
  }

  print_r(childName());
  echo "<br>";
  var_dump(childName());
  echo "<br>";

$childs= [
  ['id' => '1','name'=>'Franek'],
  ['id' => '2','name'=>'Jagoda  '],
];

$validateChildNames = array_map(function($child){
    //return $child;
    return $child['name'];
}, $childs);
  echo "<pre>";
  print_r($validateChildNames);
  echo "</pre><hr>";

#######################################

  /*$name = function(){
  return 'Franek';
  };
  */
$name=fn()=>'Franka';
  var_dump($name());
  echo "<hr>";

######################################

$multi=fn($a,$b)=>$a*$b;
  var_dump($multi(4,5));
  echo "<br>";
  var_dump($multi(4.5,5));
  echo "<br>";

########################################

$fruits=[
  ['name' =>'apple','price'=>6],
  ['name' =>'lemon','price'=>10.5]
];
    /*$sale = array_map(function($fruit) {
    return $fruit['name'];
    }, $fruits);
    */
  $sale=array_map(fn($fruit)=>$fruit['name'], $fruits);
  print_r($sale);
  echo "<br><hr>";

####################################

$name='agnieszka';
$split=str_split($name);

$result=array_map(function($char)
{
  return ['char'=>$char];
}, array_unique($split)); // удаляет дубли

// $text=function($name){
//   return "Imię: ".$name;
// };

//$text=array_map(fn($name)=>$name['Imię: ,$name'], $name);
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
