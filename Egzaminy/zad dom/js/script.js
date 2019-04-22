var elPodstawa = document.getElementById('podstawa');
var elWykladnik = document.getElementById('wykladnik');
var elWynik = document.getElementById('wynik');
var elPrzycisk = document.getElementById('przycisk');

elPrzycisk.onclick = function(){

    if (elPodstawa.value == '' || elWykladnik.value == '') elWynik.innerHTML = "Wpisz podstawę i wykładnik potęgi";
    else if (elWykladnik<0) elWynik.innerHTML = "Wykładnik potęgi musi być dodatni";
        else elWynik.innerHTML ="Wynik działania wynosi: " + Math.pow(elPodstawa.value,elWykladnik.value);

}