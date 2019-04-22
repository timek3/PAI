//************ dostęp do elementów css *************

//Metoda getElementById()

var elPierwszy = document.getElementById("pierwszy");
elPierwszy.className = 'niebieski';

//Metoda getElementsByTagName()
var elNaglowek = document.getElementsByTagName('h1');
if (elNaglowek.length >0){
    elNaglowek[0].className = 'czerwony';
}

//Metoda getElementsByClassName()

var czerwony = document.getElementsByClassName('czerwony');
console.log(czerwony);
var ostatni = czerwony[czerwony.length - 1];
ostatni.className = 'niebieski';




//Metoda querySelector()
//zwraca pierwsze dopasowanie

var elTv = document.querySelector('li.grey');
elTv.className = 'niebieski';

//metoda querySelectorAll()

var elTvAll = document.querySelectorAll('li.grey');
elTvAll[2].className = 'niebieski';

// metoda getElementsByName()

var elPrzycisk = document.getElementById('przycisk');

/*elPrzycisk.onclick = function(){
    var zmiana = document.getElementsByName('tv');
    for (var i=0;i<zmiana.length;i++)
    zmiana[i].className = 'niebieski';
}*/

//metoda inna, pętla forEach

elPrzycisk.onclick = function(){
    var elTvZmiana = document.getElementsByName('tv');
    function zmien (element,index){
        elTvZmiana[index].className= 'niebieski';
    }
    elTvZmiana.forEach(zmien);
    
}
// previousElementSibling, nextElementSibling
var poczatekElement = document.getElementById('s2');
var poprzedniElement = poczatekElement.previousElementSibling;
var nastepnyElement = poczatekElement.nextElementSibling;
poczatekElement.className = 'niebieski';
poprzedniElement.className = 'niebieski';
nastepnyElement.className = 'niebieski';
// firstChild, lastChild 

var lista = document.getElementsByTagName('ul')[1];
console.log(lista);
var pierwszy = lista.firstElementChild;
var ostatni = lista.lastElementChild;
pierwszy.setAttribute('class','grey');
ostatni.setAttribute('class','grey');

//**************************************************

//zmień pierwszy element input na button i przypisz wartosc wyslij


var elPierwszy = document.getElementsByTagName('input')[0];
elPierwszy.setAttribute('type','button');
elPierwszy.setAttribute('value','wyslij');

// text www łączy ze szkoła

var link = document.getElementById('link');
link.setAttribute('href','http://zsk.poznan.pl');