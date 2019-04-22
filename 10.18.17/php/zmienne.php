<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP</title>
</head>
<body>

    <?php
    
    $liczba = 15; //15
    $_liczba = 10; //10
    $liczba2 = 11; //11
    $imie_ = "janusz"; //janusz
    $Imie_ = "anna"; // anna
    $Imię_ = "tomek"; //tomek
    $wartość =1; //1
 /*   
    echo $liczba; //10
    echo "$liczba"; //10
    echo '$liczba'; //$liczba
    echo $_liczba;
      */  
    
//typy zmiennych ****************************************
//typ skalarny (prosty)
    
    //typ boolean
    $prawda = true;
    $fałsz = false;
    
    //typ integer
    $calkowita = 200;
    $szesnastkowa = 0xA; //10
    $osemkowa = 010; //8
    $binarna = 0b1010; //10
    $binarna = -0b1010; //-10
    
    //typ float
    $zmiennoprzecinkowa = 5.7; //5.7
    
    //typ string
    $zmienna = 5.25;    
    echo "$zmienna";
    echo '$zmienna'; //string
    
    //składnia heredoc
    
    $imie = "Filip";
  /* $napis = <<<TEKST
    Mam na imię $imie  
TEKST; 
    //działa   ^
    echo $napis;*/
    
   //składnia newdoc **********************************
    $nazwisko = "Nowak";
    $tekst = <<<'ETYKIETA'
    Mam na nazwisko: $nazwisko;
ETYKIETA;
    echo $tekst;
    
    $inna = null; 
    $inna1 = nULL; 
    $inna2 = NULL; 
    
    //********************************************************
    
    echo "zmienna o nazwie \$inna ma wartość null"
    
    ?>
    
</body>
</html>