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
echo "<hr>$hex1<br>";//42 => 2A(16) => 10*16^0+2*16*1 = 10+32 =49(16)
?>
