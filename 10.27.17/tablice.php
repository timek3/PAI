<?php
//Tablice indeksowane numerycznie 

$kolory = array("biały", "zielony", "czerwony");
echo 'początkowa zawartość tablicy: <br>';
/*for ($i=0; $i<count($kolory) ;$i++){
    $elem = $i +1;
    echo "Element $elem: $kolory[$i] <br>";
}*/

$kolory[0] = "orange";
$kolory[1] = "aqua";
$kolory[2] = "magenta";
/*for ($i=0; $i<count($kolory) ;$i++){
    $elem = $i +1;
    echo "Element[$elem]: $kolory[$i] <br>";
}*/
function wypisz ($tablica){
   for ($i=0; $i<count($tablica) ;$i++){
    $elem = $i +1;
    echo "Element[$elem]: $tablica[$i] <br>";
} 
}

wypisz($kolory);

// tablice asocjacyjne

$dane = array(
    "imie"=>"Marek", 
    "Nazwisko" => "Timm", 
    "Wiek"=>18, 
    "Narodowosc"=>"Polska" 
    );
echo "Zawartość tablicy: ";

echo <<<HTML
 <br> Imię: $dane[imie] <br>  
 Nazwisko: $dane[Nazwisko] <br>  
 Wiek: $dane[Wiek] <br>  
 Narodowość: $dane[Narodowosc] <br>  
HTML;

//************************************************************

// foreach

foreach($dane as $klucz =>$wartosc){
    echo "Element [$klucz]: $wartosc <br>" ;
}
foreach($dane as $wartosc){
    echo "Wartość $wartosc<br>";
}

//tablice wielowymiarowe 
$uczen = array(
    array("Julia", "Nowak", 20),
    array("Anna", "Kowal", 19),
    array("Paweł", "Kowalski", 25)
);
for ($i=0; $i<count($uczen); $i++){
    for ($j=0;$j<count($uczen[$i]);$j++)
        echo "{$uczen[$i][$j]} ";
    echo "<br>";
}
foreach($uczen as $klucz => $tablica){
    foreach ( $tablica as $klucz2 => $wartosc)
        echo "{$uczen[$klucz][$klucz2]} ";
    echo "<br>";
}

$cyfry = array(
    array(1,2,3,4),
    array(5,6,7),
    array(8),
    array(9,10)    
);
    echo "<br>";
foreach ($cyfry as $wartosc){
    foreach ($wartosc as $x)
        echo "$x ";
     echo "<br>";
}

//*************************************************
function wyswietl($tab){
     echo "<br>";
    foreach($tab as $x)
        echo "$x  ";
     echo "<br>";
}
$tab = array(4,-4,17,123,312,22,-12);
wyswietl($tab);
sort($tab);
wyswietl($tab);
rsort($tab);
wyswietl($tab); //działa

//***************************************************
$tab2 = array("julia", "anna", "zenon", "krystian");
sort($tab2);
wyswietl($tab2); //pierdzieli się przy dużych i małych literach

$tab3 = array("julia", "anna", "zenon", "krystian");
wyswietl($tab3);


$tab4 = array("julia", "anna", "Zenon", "krystian");
wyswietl($tab4);
foreach($tab4 as $klucz => $x){
    $x = strtolower($x);
    $tab4[$klucz]=$x;
}
sort($tab4);
wyswietl($tab4); //life hack żeby poprawnie sortowało

//sortowanie tablicy asocjacyjnej
$tabAsoc = array(
    "imie" => "Mati",
    "nazwisko" => "Tokar",
    "wiek" => "stary dziad",
    "skill w h3" => -1
);

wyswietl($tabAsoc);
asort($tabAsoc);  //sortuje wdg wartości
wyswietl($tabAsoc); 
arsort($tabAsoc); //sortuje na odwrót

ksort($tabAsoc); //sortuje wdg klucza
krsort($tabAsoc); //sortuje odwrotnie wdg klucza
//wyswietlanie tego 
echo "<br>";
var_dump($tabAsoc);
echo "<br>";
print_r($tabAsoc);
echo "<br>";


//zad dom napisz tablice 3 wymiarową i napisz funkcję wyświetlającą zawartość, wykorzystaj foreach
?>
