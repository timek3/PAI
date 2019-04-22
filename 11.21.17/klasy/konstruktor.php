<?php
    require_once('./class/samochod.php');
    $auto1 = new Samochod("Polska");  //trzeba podać kostruktor
    $auto1->marka = "Ferrari";
    $auto1->model = "F430";
    $auto1->wyswietl();
?>
