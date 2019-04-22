<?php
    //operatory
    
$potegowanie = 2**10; //1024
$modulo = 11%3; //2

// +, -, *, /


//operatory pitowe: & (and), |(or), ~ (not), ^ (xor), przesunięcie bitowe w prawo >>, przesunięcie bitowe w lewo <<

$dziesiec =0b1010; 
echo $dziesiec, "<br>"; //10
$dziesiec = $dziesiec >> 1;
echo $dziesiec, "<br>"; //5
$dziesiec = $dziesiec << 2;
echo $dziesiec, "<br>"; //20

// operatory logiczne 

// and, or, xor, !, &&, ||
//and i && działają tak samo ale znaczki mają większy priorytet

//zad 1 sprawdź czy w sklepie kupisz rower
/*

$sklep = 'otwarty';
$piniadz = 100;
$rower =true;
if ($sklep == 'otwarty' && $piniadz >900 && $rower) echo '<br><br>Kupiłeś rower<br><br>';
else echo '<br><br>idź z buta<br><br>';
*/

//zad 2 chcesz kupić rower lub hulajnoge 
/*

$sklep = 'otwarty';
$piniadz = 1800;
$rower =false;
$hulajnoga = false;
if ($sklep =='otwarty' && $piniadz>1000 && ($rower || $hulajnoga)) {
    if ($rower && $hulajnoga)echo '<br><br>kupujesz oba<br><br>';
    else if ($rower) echo '<br><br>kupujesz rower<br><br>';
    else echo '<br><br>kupujesz hulajnoge<br><br>';
}
else echo '<br><br>idź z buta<br><br>';
*/

$a = 1.0; //double
$b = 1; //int

if ($a==$b) echo "równe"; //równe
else echo "różne"; 
if ($a===$b) echo "równe"; //różne
else echo "różne"; 

//********************************************************
$x =2;
echo $x++; // 2 
echo ++$x; // 4
echo $x; // 4
$y = $x++; 
echo $y; //4
$y =++$x;
echo $y; //6
echo ++$y, "<br>"; //7

//********************************************************

$tekst1 = "Pierwszy tekst";
$tekst2 = "Drugi tekst";
$tekst3 = "10";
$liczba1 = 14;
echo $tekst1 . $tekst2 . $liczba1. "<br>";

//operatory rzutowania 
//bool, int, float, string, array, object, unset

$dwa = (int)$tekst1;
$trzy = (int)$tekst3;

echo $dwa."<br>";//0
echo $trzy."<br>";//10

$j =-1;
$c = 100;
$j = (bool)$j;
echo "$j"; // dla dowolnej wartości zwraca 1, dla 0 jest false i nic nie pokaże
echo "<br><br>";
// zamiana tekstu na int pobierze cyfre tylko na początku. jak jest tekst na początku to idzie 0
//jak robimy gettype na float zwraca double

//rozmiar typu integer
echo PHP_INT_SIZE; //4

//*******************************************************
//kontrola typu zmiennych

$test = 'szkola';
$x = 10;
$a = 20.5;
$y = true;
$z = null;
$w;
echo "<br>";
echo gettype($test); //string
echo "<br>";
echo gettype($x); //integer
echo "<br>";
echo gettype($a); // double
echo "<br>";
echo gettype($y); // boolean
echo "<br>";
echo gettype($z); //null
echo "<br>";
echo @gettype($w); //null
echo "<br>";
echo is_string($test); //1
echo is_string($x); // nic sie nie wyswietla
echo is_float($a); //1
echo is_bool($y); //1
echo is_double($a); //1
echo is_int($x); //1
echo "<br>";echo "<br>";

//************************************************************

//zmienne superglobalne
//$_GET, $_POST, $_COOKIE, $_FILES, $_SESSION
echo $_SERVER['SERVER_PORT']; //80
echo "<br>";
echo $_SERVER['SCRIPT_NAME']; // /4te/operacjeNaZmiennych.php sciezka do pliku bez htdocs
echo "<br>";
echo $_SERVER['SERVER_PROTOCOL']; //HTTP/1.1
echo "<br>";
echo $_SERVER['DOCUMENT_ROOT']; //C:/xampp/htdocs 
$lokalPliku = $_SERVER['DOCUMENT_ROOT'].$_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $lokalPliku;

echo "<br>";
// ***********************************************************

//stałe 
//nazwy z dużych liter

define ('NAZWISKO','Kowal');
echo NAZWISKO;
define ('imie','Janusz');
echo imie;
define ('WIEK',18,true); //true nie sprawdza wielkości liter
echo wiek;
define ('PI',3.14);
echo PI;
echo "<br>";
//**********************************************************************
//stałe predefiniowane

echo PHP_VERSION; //string
echo "<br>";
$ver = PHP_VERSION;
/*if ($ver >=7.1){
    echo "Nowa wersja PHP";
}
else {
    echo"stara wersja";
}*/
echo PHP_OS; //WINNT
echo "<br>";
echo __LINE__; //170
echo "<br>";
echo __FILE__; //C:\xampp\htdocs\4TE\operacjeNaZmiennych.php
echo "<br>";
?>