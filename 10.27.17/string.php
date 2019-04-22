<?php

$text = <<<TEXT
    zsk - Zespół
    szkół
    komunikacji
TEXT;

    echo "Przed zastosowaniem nl2br: $text";
    echo "<br>Po zastosowaniu nl2br: ";
    echo nl2br($text); // wstawia br w miejsce entera
echo "<br><br>";

//zamiana na małe litery
echo strtolower($text);

echo "<br><br>";
//zamiana na duże (problem z polskimi literami)
echo strtoupper($text);

echo "<br><br>";
//zamiana pierwszej litery na dużą
$text = "rAZ DWA trzy";
echo ucfirst($text); //zamienia pierwszą tylko pierwszą pierwszą

echo "<br><br>";
//zamiana wszystkich pierwszych liter na duże
echo ucwords($text); // w każdym wyrazie zamienia pierwszą litere na dwa

echo "<br><br>";
// ******************************************************

$lorem = "Ne ita magna commodo, an aut nisi labore quorum est labore officia aut minim 
veniam ut se dolor se lorem de officia ubi labore quamquam ut qui eiusmod non 
ingeniis, ut deserunt reprehenderit, ne aute veniam eram cupidatat. Ea varias 
cernantur commodo. A admodum ubi laboris, o nulla sed tamen, se magna laborum 
non nam nulla magna duis possumus qui e expetendis quo laboris, iudicem esse 
voluptate deserunt ea non dolor aliquip exercitation o ab iudicem reprehenderit. 
Laborum in velit iis ingeniis ex mentitum. Expetendis dolore quae officia quis 
hic irure incurreret probant o hic duis familiaritatem, quorum proident ex 
summis quem. Ne non noster eram veniam hic id elit pariatur comprehenderit, 
legam do iis enim consequat, magna cupidatat aut deserunt, ea ita veniam amet 
quis e fore doctrina cohaerescant, ut sint duis hic offendit, ex litteris qui 
nostrud. Iis anim quibusdam comprehenderit.";

$kolumna = wordwrap($lorem, 40, "<br>"); //pierwszy argument to co chcesz zaminiać, 2 to ilość znaków w wierszu, 3 to czym rozdzielamy. elo

//echo $kolumna;
echo "<br><br>";

//usuwanie białych znaków

$imie1 = "Filip";
$imie = "   Filip ";
echo strlen($imie1);

echo "<br><br>";

echo strlen($imie);

echo "<br><br>";

echo strlen(ltrim($imie)); //usuwa spacje z lewej
echo strlen(rtrim($imie)); //usuwa spacje z prawej
echo strlen(trim($imie)); //usuwa spacje z obu stron

echo "<br><br>";
//przeszukiwanie 

$adres = "Poznań, ul. Fredry 13, tel. (61) 445-44-58";
$szukaj = strstr($adres, "tel"); //wycina ze stringa od tel
echo $szukaj;

echo "<br><br>";

$szukaj1 = strstr($adres, "tel", true); //domyślnie jest false, odwrotność ^, ucina od tel zwraca stringa po lewej
echo $szukaj1;

echo "<br><br>";

$szukaj2 = stristr($adres, "TEL"); //olewa wielkość liter

echo $szukaj2;

echo "<br><br>";
// ***********************************************************

$ciag1 = "a";
$ciag2 = "aa";
echo strcmp($ciag1, $ciag2); // -1
echo strcmp("zzz", "zzz"); // 0 bo takie same
echo strcmp("zza", "zzz"); // -1 bo a jest mniejsze w alfabecie 
echo strcmp("zzz", "zza"); // 1 bo z jest większe w alfabecie 
echo strcmp("zzza", "zzz"); // 1  
echo strcmp("zzz", "zzza"); // -1  

echo "<br><br>";
//************************************************************

$poz =strpos("abcdefgcde","cde");
echo $poz; //2 bo od 2 indeksu leci, patrzy na pierwsze

$poz =strpos("abcabc","abc"); //0 ^

//zad 1

$tekst1 = "abcdabcd";
$tekst2 = "ab";
echo "<br><br>";
if (strpos($tekst1,$tekst2)===false){ //koniecznie 3 razy === bo zero by sobie zamienił na false
    echo "ciąg $tekst2 nie został znaleziony";
} else echo "ciąg $tekst2 został znaleziony";

echo "<br><br>";
$mail = strstr("zsk@gmail.com","@");
echo $mail; //@gmail.com
echo "<br><br>";
$mail = strstr("zsk@gmail.com",64); //dziła też po kodzie ASCI
echo $mail; //@gmail.com


//***************************************

//przetwarzanie ciągu znaków
echo "<br><br>";
$zamien = str_replace("%imie%", "Janusz", "%imie% to nie imie, to styl życia");
echo $zamien; // pierwszy element zastępuje drugim w trzecim 


echo "<br><br>";
$nazwisko = substr("Janusz Nowak", 7, 5); // 1- z czego, 2- od której pozycji tego 1, 3- ile pozycji wycina
echo $nazwisko; //Nowak
echo "<br><br>";



$zdanie = "przykładowy ciąg znaków";
$zamienCiag= str_replace($zdanie, "ĄĆĘŁŃÓŚŻŹąćęłńóśżź","ACELNOSZZacelnoszz"); // nie działa na utf 8 #gówno

$cenzura = array('ą', 'ć', 'ł', 'ó', 'ś', 'ę', 'ń', 'ż', 'ź' );
$zamiana = array('a', 'c', 'l', 'o', 's', 'e', 'n', 'z', 'z' );
$zdanie=str_replace( $cenzura, $zamiana, $zdanie); //działa dobre pomarańczowe
echo $zdanie; // Zazolc_gesla_jazn
//echo $zamienCiag;

//zad dom napisz funkcje, która będzie obliczała wystąpienia określonego ciągu znaków w danym tekście , tekst i szukany ciąg powinny być przekazywane w postaci argumentów

//zad napisz program który pozwoli cenzurować zdanie podane przez użytkownika, do tego: formularz do wprowadzenia słów do cenzury oraz prawidłowych

echo "<br><br>";

    echo <<<FORM
    <form method="post">
    Dane<input type="text" name="dane"><br>
    <input type="submit">
    </form>
FORM;
if (isset($_POST['dane'])){
    $dane = $_POST['dane'];
    $niedozwolone = array("czarny", "biały");
    $zamiana = "#$******";
    $poprawne = str_ireplace($niedozwolone, $zamiana, $dane);
    echo $poprawne;
}
echo "<br><br>";


?>