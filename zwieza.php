<?php
abstract class Zwierze
{
    public float $masa, $wiek;
    protected string $name="";
    public function setName($name){
        return $this->name=$name;
    }
    public function oddyhaj(){
        echo '<br>oddyhaj';
    }
}

class Ryba extends Zwierze
{
    public function plyn(){
        echo '<br>plyn';
    }
}

class Ssak extends Zwierze
{
    public function biegni(){
        echo '<br>biegni';
    }
}

class Ptak extends Zwierze
{
    public function lec(){
        echo '<br>lec';
    }
}

class PiesDomowy extends Ssak
{
    public string $rasa, $kolorsiersci;
    public function szczekaj(){
        echo '<br>szczekaj';
    }
    public function aportuj(){
        echo '<br>aportuj';
    }
    public function __construct($masa, $wiek, $rasa, $kolorsiersci)
    {
        $this->masa = $masa;
        $this->wiek = $wiek;
        $this->rasa = $rasa;
        $this->kolorsiersci = $kolorsiersci;
    }

    public function introduceDog(){
        echo "Hello. My name $this->name. My natural's rasa is $this->rasa and i am $this->kolorsiersci boy. <br>I am $this->wiek yers old. My weight very small... for big boy, only $this->masa kg. ";
    }
}


$pies=new PiesDomowy(23, 3, 'dog' ,'black');
$pies->setName("Happy");
$pies->introduceDog();
$pies->biegni();
$pies->oddyhaj();
$pies->szczekaj();
$pies->Aportuj();
echo "<br>Just, do it!"
?>

