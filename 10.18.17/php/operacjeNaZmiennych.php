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


?>