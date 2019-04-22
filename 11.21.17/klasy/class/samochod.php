<?php

class Samochod {
    public $marka, $model, $produkcja, $iloscKol;
    
    // konstruktor wywoływany podczas tworzenia obiektu
    function __construct($panstwo){
        $this ->produkcja = $panstwo;
    }
    
    public function ustawMarke($wartosc){
        $this -> marka = $wartosc;
    }
    
    public function pobierzMarke(){
        return $this->marka;
    }
    
    public function ustawModel($wartosc){
        $this -> model = $wartosc;
    }
    
     public function pobierzModel(){
        return $this->model;
    }
    public function ustawProdukcje($wartosc){
        $this -> produkcja = $wartosc;
    }
    
     public function pobierzProdukcje(){
        return $this->produkcja;
    }
    public function wyswietl(){
        echo <<<WYSWIETL
        Marka: $this->marka<br>
        Model: $this->model<br>
        Produkcja: $this->produkcja<br>
WYSWIETL;
    }
    public function wyswietl2(){
        
        /*echo "<ul>";
            foreach ($this as $klucz => wartosc){
                echo "<li>...coś";
            }
        echo "</ul>";*/
    }
        
        
        
        
        
        
        
        
        
        
}



?>
