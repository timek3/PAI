<?php
require_once('./class/samochod.php');
class Ciezarowy extends Samochod{ //ciezarowy to klasa dziecko, dzedziczy to po extends
    public $ladownosc;
    public function wyswietl(){
        echo parent::wyswietl(); //dzięki temu możemy się odwołać do czegoś od rodzica
        echo "Ładowność: $this->ladownosc";
    }
}

$tir1= new Ciezarowy("Polska");
$tir1 -> ladownosc = 19000;
$tir1 -> marka = "DAF";
$tir1 -> model = "XF 95 480";
echo $tir1-> wyswietl(); //wyświetla najpierw metode z klasy potomnej

$tir2 = new Samochod("Polska");
echo $tir2->ladownosc; //nie przyjmuje wartości w dół 
?>
