<?php
echo PHP_VERSION,'<br>'; //8.0.11
//echo phpinfo();//вывод информации о сервере

echo 2**10; //1024

//systemy liczbowe
// binarny 2, okalny 8, decynalny 10,hehsadecynalny 16

$dec=12;
$bin=0b1101;
$oct=010;
$hex=0x31;
$hex1=0x2A;

echo "<hr>$dec<br>";//12
echo "<hr>$bin<br>";//13 => 1101(2)=>1*2^0+0*2^1+1*2^2+1^3=1+0+4+8=13(10)
echo "<hr>$oct<br>";//8 => 10(8) => 0*8^0+1*8*1 = 0+8=8(8)
echo "<hr>$hex<br>";//49 => 31(16) => 1*16^0+3*16*1 = 1+48 =49(16)
echo "<hr>$hex1<hr>";//42 => 2A(16) => 10*16^0+2*16*1 = 10+32 =49(16)

// porównanie o identycnosc

$x=10;
$y=10.0;
// ==сравнивает две переменные
if ($x==$y) {
  echo "Rowne";
} else {
  echo "Rozne";
}
// === сравнивает тип данных и идентичность
if ($x===$y) {
  echo "<br>identyczne";
} else {
  echo "<br>nieidentyczne";
}
echo "<br>";
//gettype - Возвращает тип переменной
echo gettype($x);/*integer/ выводим возвращенный тип переменной в данном случае тип переменной х
это integer*/
echo "<br>";
echo gettype($y);/*double выводим возвращенный тип переменной в данном случае тип переменной у
это double*/

/*
postnkrementacja $i++ сначала выводит потом увеличивает
prenkrementacja ++$i сначала увеличивает потом выводит
postderementacja $i-- сначала выводит потом уменьшает
predekrementacja --$i сначала уменьшает потом выводит
*/

$x=1;
echo $x++;//1
echo $x;//2
echo ++$x;//3
echo ++$x;//4
echo $x;//4
echo --$x;//3
$y=$x++;
echo $x;//4
echo $y;//3
$x=++$x;
echo $x;//5
$x=$y++;
echo $x;//3
echo $y;//4
$x=$x++;
echo $x;//3


$x=2;
echo "<br>";
echo "<br>",$x++;//2
echo "<br>",++$x;//4
echo "<br>",$x;//4
$y=$x++;//y будет равен 4 потому что сначала у выводит х, а потом только х увеличивается на 1
$y=++$x;  // у=1+x=6
$x=$x++;// в таком случае x не увеличивается
echo "<br>",$x;//6
echo "<br>",--$y,"<hr>";//5

?>
