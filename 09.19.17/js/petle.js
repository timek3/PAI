// ******************** FOR ***************************


/*for (var i = 0; i < 100; i++){
    document.write(Math.floor(Math.random()*151+50)+'<br>');
    
}*/

/*for (var i=1;i<=10;i++){
    document.write(i);
    if (i==10)document.write('.');
    else document.write(', ');
}*/


// ********************* WHILE***************************

/*var i=0;
while(i++<5){
    document.write(i + '<br>');
}*/
// użytkownik podaje 2 wartości, pętla będzie się powtarzała dopóki x>=y
/*
while (1){
    var x = prompt("x");
    var y = prompt("y");
    
    if (x>=y) alert("źle")
    else break;
    
}
*/

// *********************** DO WHILE ********************

/*var wiek;
do {
    wiek = prompt("podaj wiek");
    if(wiek==19){
        document.write('Możesz już grać w lola')
    }
}while(wiek!=19)*/

// w pętli for i do while podaj 5 licz podzielnych przez 2 z klawiatury, zapisz je do tablicy, wyświtl w konsoli tablice

/*var t=[];

for (var i=0;i<5;i++){
var x;
    
do {  x=prompt("Podaj liczbe parzystą");
    x=parseInt(x);
} while (x%2!=0)
    t[i]=x;
}
console.log(t);
    */

// użytkownik podaje z klawiatury liczbe. zabezpiecz przed podaniem litery, znaku specjalnego

/*document.write('<input type="text" id="liczba">');
document.write('<button id="przycisk">wyślij</button>')
var elPrzycisk = document.getElementById('przycisk');
var elLiczba = document.getElementById('liczba');
elPrzycisk.onclick = function(){
    if(!isNaN(elLiczba.value)){
        console.log(elLiczba.value);
    }
}*/
// ******************* FOREACH **********************

var tab= ['Anna', 'Jacek', 'Janusz', 'Adrian'];
/*
for (var i=0; i < tab.length; i++){
    document.write(tab[i]+' ');
    
}
*/

/*
function p(a){
    document.write(a+'<br>');
}
tab.forEach(p);
function pokaz (wartosc, indeks){
    document.write(indeks+1+ ' - element tablicy ')
    document.write(wartosc+' <br>');
}
tab.forEach(pokaz);
*/

var elPi = document.getElementById("pi");
var elNic = document.getElementById("nic");
var elPrzycisk = document.getElementById("przycisk");
var elWynik = document.getElementById("wynik");

elPrzycisk.onclick = function (){
    if (elPi.checked){
        elWynik.innerHTML = Math.PI;
    }
    else if (elNic.checked){
        elWynik.innerHTML = "Wybrałeś nic";
    }
    else elWynik.innerHTML = "nic nie wybrałeś";
}




//zad dom
//użytkownik podaje z klawiatury login i hasło w formularzu. jeśli login to filip a hasło to "Okoń@1234" to na ekranie wyświetli w kolorze czerwonym poprawne hasło. jeśli hasło będzie błędne to w kolorze zielonym wyswietli się błedne hasło. użytkownik ma 3 próby