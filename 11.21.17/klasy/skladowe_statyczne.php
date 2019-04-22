<?php
    class Liczby{
        public static $liczba = 10;
        public static function wyswietl(){
            echo "Wartość statycznego pola wynosi: ";
            echo Liczby::$liczba;
        }
    }

    echo Liczby::$liczba."<br>"; //można używać klasy bez tworzenia obiektu
    Liczby::wyswietl(); // lol lmao xdddd dziala
    Liczby::$liczba = 200;
    Liczby::wyswietl(); // też działa xddddd
?>