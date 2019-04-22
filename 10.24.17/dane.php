<?php

/*
$imie = $_GET['imie'];
$nazwisko = $_GET['nazwisko'];
//echo $imie;
if (empty($imie) || empty($nazwisko)){
    echo "nie wprowadziłeś poprawnie danych";
} else {echo "Imię: <span style=\"color:red\"> $imie </span><br>";
       echo "Nazwisko:<span style=\"color:red\"> $nazwisko </span>";
       }
*/

/*$login = $_POST['login'];
$haslo = $_POST['haslo'];
//echo $login;
//echo $pass;
if (!empty($login) && !empty($haslo)){
    echo <<<DANE
Login: $login <br>
Hasło: $haslo <br>
DANE;
    }else{ //echo 'nie wprowadziłeś wszystkich danych';
      header('location: formularz.php');
    }*/

if (isset($_GET['kolor'])){
    echo "Zaznaczyłeś kolor: {$_GET['kolor']}";
}else{
    header('location: formularz.php');
}


?>