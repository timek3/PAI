var elPierwsza = document.getElementById('pierwsza');
var elDruga = document.getElementById('druga');
var elDodawanie = document.getElementById('dodawanie');
var elOdejmowanie = document.getElementById('odejmowanie');
var elMnozenie = document.getElementById('mnozenie');
var elDzielenie = document.getElementById('dzielenie');
var elWynik = document.getElementById('wynik');

elDodawanie.onclick = function (){
    if (elPierwsza.value == '' || elDruga.value == '' )
    {
    elWynik.textContent = 'Proszę uzupełnić obie liczby'; 
    }
    else {
        
    }
}