<?php
// data
echo date("Y")."<br>"; // rok 2017
echo date("y")."<br>"; // rok 17
echo date("Y-m-d")."<br>"; // 2017-10-31 
echo date("Y-M-d")."<br>"; // 2017-Oct-31
echo date("Y-M-D")."<br>"; // 2017-Oct-Tue
echo date("D-M-Y")."<br>"; // Tue-Oct-2017
echo date("e")."<br>"; // Europe/Berlin
echo date("F")."<br>"; // October



// czas

echo date("g")."<br>"; // 10 pełna godzina - format 12 godzinny bez zera na początku 
echo date("G")."<br>"; // 10 pełna godzina - format 24 godzinny bez zera na początku
echo date("h")."<br>"; // 10 pełna godzina - format 12 godzinny z zerem na początku
echo date("H")."<br>"; // 10 pełna godzina - format 24 godzinny z zerem na początku
echo date("i")."<br>"; // minuty liczba minut z zerem na początku
echo date("I")."<br>"; // 0 czas letni(1)/zimowy(0)
echo date("j")."<br>"; // 31 dzień miesiąca bez zera
echo date("l")."<br>"; // tuesday dzień tygodnia
echo date("L")."<br>"; // znacznik roku przestępnego 0 nie jest/ 1 jest
echo date("m")."<br>"; // miesiąc z zerem na początku
echo date("n")."<br>"; // miesiąc bez zerem na początku
echo date("O")."<br>"; // +0100 różnica do czasu Greenwich
echo date("P")."<br>"; // +01:00 różnica do czasu Greenwich rozdzielona :
echo date("o")."<br>"; // rok
echo date("s")."<br>"; // sekundy
echo date("S")."<br>"; // st przyrostek do dat
echo date("t")."<br>"; // liczba dni miesiąca
echo date("T")."<br>"; // CET strefa czasowa
echo date("U")."<br>"; // 1509443696 znacznik czasu Uniksa
echo date("w")."<br>"; // 2 numer dnia tygodnia
echo date("W")."<br>"; // 44 który tydzień roku
echo date("z")."<br>"; // 303 dzień roku liczy od zera powinno być 304

echo "<br><br>";

//*******************************************************************************

//getdate()
$data = getdate(); //to jest tablica
$dzien = $data['mday']; //dzień miesiąca
echo $dzien."<br>";

$miesiac = $data['mon']; //miesiąc
echo $miesiac."<br>";
switch($miesiac){
    case 1: $miesiac = "styczeń";
        break;
    case 2: $miesiac = "luty";
        break;
    case 3: $miesiac = "marzec";
        break;
    case 4: $miesiac = "kwiecień";
        break;
    case 5: $miesiac = "maj";
        break;
    case 6: $miesiac = "czerwiec";
        break;
    case 7: $miesiac = "lipiec";
        break;
    case 8: $miesiac = "sierpień";
        break;
    case 9: $miesiac = "wrzesień";
        break;
    case 10: $miesiac = "październik";
        break;
    case 11: $miesiac = "listopad";
        break;
    case 12: $miesiac = "grudzień";
        break;
}
echo "$dzien-$miesiac"."<br>";

$rok = $data['year']; //rok
echo $rok."<br>";

$dzien_tygodnia = $data['wday'];
echo $dzien_tygodnia."<br>"; //2 na wtorek
switch($dzien_tygodnia){
    case 0: $dzien_tygodnia = "Niedziela";
        break;
    case 1: $dzien_tygodnia = "Poniedziałek";
        break;
    case 2: $dzien_tygodnia = "Wtorek";
        break;
    case 3: $dzien_tygodnia = "Środa";
        break;
    case 4: $dzien_tygodnia = "Czwartek";
        break;
    case 5: $dzien_tygodnia = "Piątek";
        break;
    case 6: $dzien_tygodnia = "Sobota";
        break;
}
echo $dzien_tygodnia."<br>";

$znacznik = $data[0];

$dzien_roku = $data['yday']+1;
echo $dzien_roku."<br>"; // 303 liczy od zera powinno być 304
echo "Dzień roku: $dzien_roku $dzien_tygodnia $miesiac $znacznik"."<br>";



//*****************************************************************************

//znacznik czasu 

$r1 = 2017;
$m1 = 10;
$d1 = 31;

$r2 = 1998; 
$m2 = 12;
$d2 = 1;

$czas1 = mktime(0,0,0,$m1, $d1, $r1);
    // kolejno (godzina, minuta, sekunda, miesiąc, dzień, rok)
    
$czas2 = mktime(0,0,0,$m2, $d2, $r2);
$czas = abs($czas2 - $czas1);
echo $czas."<br>"; // daje w sekundach
$dni = $czas /(60*60*24);
echo $dni."<br>";
$lata = floor($dni / 365);
echo $lata."<br>";

//*******************************************************************************

//strftime()

$data = mktime();
echo $data."<br>"; // znacznik aktualnego czasu

echo $dataDzisiejsza = strtotime("now")."<br>"; // ten znacznik ^

$dataUr = strtotime("7 december 1998");
echo $dataUr."<br>";

$panF = @abs($dataDzisiejsza - $dataUr);
echo $panF."<br>"; // ile s zycia ma szosti
$dziesiecDniWstecz = strtotime("-10 days");
echo $dziesiecDniWstecz."<br>"; //odejmuje 10 dni
$wczoraj = strtotime("yesterday");
echo $wczoraj."<br>";
$nastepnyWeekend = strtotime("next week");
echo $nastepnyWeekend."<br>";
$jutro = strtotime("tomorrow");
echo $jutro."<br>";
$dzisiaj = strtotime("today");
$czasDoby = abs($wczoraj - $dzisiaj);
echo $czasDoby."<br>";

$przyszlosc = strtotime("+10 day 7 hours 30 minutes 7 seconds");
echo $przyszlosc."<br>";























?>