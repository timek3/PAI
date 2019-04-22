var elAuta = document.getElementById('auta');
var elWynik = document.getElementById('wynik');
elAuta.addEventListener('change',wyswietl);
function wyswietl(){
    elWynik.textContent = elAuta.value;
}