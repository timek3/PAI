var text = 'ZSK - Zespół Szkół Komunikacji';
console.log(text.length); //30

var pierwszy = text.charAt();
console.log(pierwszy); //Z

var ostatni = text.charAt(text.length-1);
console.log(ostatni); //i

console.log(text[11]); //ł

//ASCI
/*
document.write(text.charCodeAt(0)); // Z => 90
document.write(text.charCodeAt(14)); // z => 122
*/

//Zamiana na duże litery
var duze = text.toUpperCase();
var male = text.toLowerCase();
console.log(duze);
console.log(male);

// camelCase zapis zmiennych
var duzaMale = text.charAt(0).toUpperCase() + text.slice(1).toLowerCase(); //pierwsza duza reszta małe
console.log(duzaMale);

//użytkownik wpisuje z klawiatury swoje imie. zamień pierwszy znak na dużą litere a pozostałe na małe. wyświetl wszystko w nagłówku 2 stopnia w kolorze niebieskim

/*
var zadanie = prompt("Podaj imię");
document.getElementById("naglowek");
naglowek.textContent = zadanie.charAt(0).toUpperCase() + zadanie.slice(1).toLowerCase();
*/
// substr(odKtoregoZnaku,ileZnakow);
console.log(text.substr(1,text.length-2)); //bez 1 i ostatniego znaku
