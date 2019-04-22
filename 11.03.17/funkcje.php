<?php
  //  declare(strict_types=1); // nie pozwoli na inne typy danych, wywali fatal error
function wartosc($a):string{ // :string narzuca że zawsze będzie string
    if($a < 0){
        return "ujemna<br>";
    }   
    elseif($a >0) {
        return 2;
    }
    else{
        return "zero<br>";
    }
}

$x = wartosc(-2);
echo gettype($x)."<br>"; //string
$x = wartosc(2);
echo gettype($x)."<br>"; //integer

//************************************************************************

function dajWartosc():int{
     return 10.55;
}

echo dajWartosc()."<br>"; // utnie końcówke po przecinku bo inny typ danych




//***********************************************************************

//zasięg zmiennych

$x = 10; //zmienna globalna
function wyswietl(){
  //  echo "Wartość zmiennej próbnej \$x wynosi: $x"; // zle bo to jest w funkcji
    echo "Wartość zmiennej \$x wynosi: ";
    echo $GLOBALS['x'],"<br>"; //wprowadza globalną zmienną
}
wyswietl();



$y=10;

function wyswietly(){
    global $y;
    echo "Wartość zmiennej \$y wynosi: $y<br>";
}
wyswietly();

//***********************************************************
//funkcja suma

function suma(){
    $liczba =10;
    echo "$liczba <br>";
    $liczba+= 10;
}
suma(); // 10
suma(); // 10

function suma2(){
    static $liczba =10; //static oznacza że deklaracja wykonana zostanie tylko dla pierwszego wywołania funkcji
    echo "$liczba <br>";
    $liczba+= 10;
}

suma2(); //10   
suma2(); //20
suma2(); //30


//***********************************************************

//argumenty i typy danych

function dodaj ($x, $y = 1){ //to y jest domyślne, 1 tylko jak nie będzie y podane
    return $x + $y;
}

$z = 20;
$liczba = dodaj($z, 6);
echo $liczba."<br>"; //26
$liczba1 = dodaj(2, 5);
echo $liczba1."<br>"; //7

$liczba2 = dodaj(3);
echo $liczba2."<br>"; //4



function mnozenie(float $x, int $y){
    return $x * $y; 
}
echo mnozenie (3,4)."<br>"; //12
echo mnozenie (3.5,2)."<br>"; //7 bo float działa
echo mnozenie (2,3.5)."<br>"; //6 bo int jest ustawiony










?>