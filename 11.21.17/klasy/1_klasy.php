<?php
class Uzytkownik{
    public $imie, $nazwisko; //deklaracja z czego będziemy korzystać, public czyli będzie to dostępne w klasie i w potomnych
    public function ustawImie($wartosc){
        $this-> imie = $wartosc;
    }
    public function pobierzImie(){
        return $this->imie;
    }
    
    public function ustawNazwisko($wartosc){
        $this-> nazwisko = $wartosc;
    }
    public function pobierzNazwisko(){
        return $this->nazwisko;
    }



}
$uczen1 = new Uzytkownik();
$uczen2 = new Uzytkownik();
$uczen1 -> imie = "Janusz"; //przypisanie wartości 
$uczen1 -> nazwisko = "Nowak";

$uczen2->ustawImie("Krzysztof");
$uczen2->ustawNazwisko("Kowal");

echo $uczen1 ->imie." ";
echo $uczen1 ->nazwisko."<br";


echo $uczen2->pobierzImie()." ";
echo $uczen2->pobierzNazwisko()."<br";












?>