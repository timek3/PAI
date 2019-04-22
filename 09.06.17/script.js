var imie;
imie = "Marek";
var nazwisko = 'Timm';
document.write("Twoje imię to " + imie + "<br>");
document.write("Twoje nazwisko to " + nazwisko);

var wiek=18;
console.log("Wiek: " + wiek);

var x, y;
x = 10;
y = 5;
var wynik=x+y;
//alert(wynik);       //komunikat
x = 20;
y = 2;
var suma = x + y; //22
var różnica = x - y; //18
var dzielenie = x / y; //10
var mnozenie = x * y; //40
var modulo = x % y; //0
//alert(modulo);
var a = 10, b= "3a";
//alert(a+b); //103a
console.log(typeof(a)); //number
console.log(typeof(b)); //string
console.log(a + (a % 3) - 10); //1

//systemy liczbowe

var c = 10; //liczba dziesiętna
var d = 010; // zero na początku to oktalny
var e = 0x10; // 0x to liczba heksadecymalna

console.log(c); //10
console.log(d); //8
console.log(e); //16


console.trace();

var _zmienna =1; //_ jest git, cyfra nie, js rozpoznaje wielkości liter

var f = 2.5;  // . jest gut, , nie
console.log(f);
var prawda = true; 
console.log(typeof(prawda));
var tekst = "tekst";
var inna = null; 
console.log(typeof(inna)); //object

var tab = ["jeden", "dwa"];
console.log(tab); //info o tablicy

/*var podajg = prompt("Podaj zmienna g");
console.log(podajg); //wypisuje tą zmienną

podajg = parseInt(podajg); //zmienia typ zmiennej na nr, jeżeli będzie wpisany string, wywali NaN*/

/*var podajLiczbe = prompt("Podaj ", "np 3.5");
podajLiczbe = parseFloat(podajLiczbe);
console.log(podajLiczbe); // 3.5 => 3.5,  3,5 => 3*/

var liczba = 5;
var tekst = "a";
var przerwa = "" //string
var wynik = typeof(liczba + tekst);
console.log(wynik);  //string

var imie = "Karol";
var nazwisko = "Nowak";
var dane = imie + " " + nazwisko;
var blok = document.getElementById("wynik");
//blok.innerHTML = dane;
blok.textContent = dane;
var zad = prompt("Podaj imię:");
document.getElementById("imie");
imie.textContent = "Imię to " + zad;