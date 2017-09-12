// tworzenie tablicy za pomocą literału tablicy
var kolory = ['biały', 'zielony', 'czerwony'];
var elKolor = document.getElementById('kolor');
elKolor.textContent = kolory [0];
var samochody = new Array('BMW', 'Audi', 'Ferrari');
console.log(samochody[samochody.length-1]);
/*var zadanie = prompt("autko");
samochody[0]=zadanie;
console.log(samochody);*/

//tablice wielowymiarowe
var tab = new Array(
    new Array('Jan', 'Kowal', 'Poznań'),
    new Array('Anna', 'Nowak', 'Gniezno'),
    new Array('Anna', 'Kowal', 'Poznań')
);
console.log(tab[1][2]); //gniezno

var imiona = ['Janusz', 'Adrian', 'Andrzejek' ,'Zenon'];
console.log(imiona);
var posortowaneImiona =imiona.sort();
console.log(posortowaneImiona);
var odwrocImiona = posortowaneImiona.reverse();
console.log(odwrocImiona);
odwrocImiona.pop(); // usuwa ostatni
odwrocImiona.unshift('Paweł'); // doda na końcu
odwrocImiona.push('Krystiana'); // doda na początku
console.log(odwrocImiona);
//sprawdzenie czy istnieje element w tablicy
console.log(odwrocImiona.indexOf('Józek')); //-1
console.log(odwrocImiona.indexOf('Paweł')); //0

//tablica z liczbami
var cyfry = [1, 2, 20, 190, -1, 1000000];
console.log(cyfry);
var posortowaneCyfry = cyfry.sort();
console.log(posortowaneCyfry);

var sortujCyfryPrawidlowo = cyfry.sort(function(a,b){
return (a-b);                          
});
console.log(sortujCyfryPrawidlowo);


// zad dom - utwórz formularz z loginem i hasłem zapisz dane w tablicy. zapisz wynik w nagłówku drugiego stopnia. użytkownik podaje również kolor w jakim ma być wszystko wyświetlone
