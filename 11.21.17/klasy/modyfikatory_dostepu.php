<?php
class Liczby {
    public $wartosc1 =1;
    protected $wartosc2 =2; //chroni poza klasą 
    private $wartosc3 =3; // chroni poza klasą i przed podklasą
    public function wyswietl(){
        echo "Wartość 1: $this->wartosc1<br>";
        echo "Wartość 2: $this->wartosc2<br>";
        echo "Wartość 3: $this->wartosc3<br><br>";
    }
}
class Rzeczywiste extends Liczby{
       public function wyswietl(){
        echo "Wartość 1: $this->wartosc1<br>";
        echo "Wartość 2: $this->wartosc2<br>";
        echo "Wartość 3: $this->wartosc3<br><br>";
    }
}
$liczba1 = new Liczby();
$liczba2 = new Rzeczywiste();

/*
echo "Obiekt liczba 1 $liczba1->wartosc1 ";
echo "Obiekt liczba 2 $liczba1->wartosc2 "; //nie działa bo jesteśmy poza klasą
echo "Obiekt liczba 3 $liczba1->wartosc3 "; //nie działa bo jesteśmy poza klasą
//tak samo nie zadziała dla liczby 2
*/
$liczba1->wyswietl()."<br>"; //a to zadziała bo metoda jest wewnątrz klasy
$liczba2->wyswietl()."<br>"; //zadziała dla 1 i 2 

?>