/*var pi = Math.PI;  // liczba pi
console.log(pi);*/
// var x = prompt("Podaj wartość");
// console.log(Math.sqrt(x)); //pierwiastek z x


// min, max, round, 
var a = 13.2;
var b = 28.5;
var c = 1;

var minimalna = Math.min(a,b,c);
console.log(minimalna);

var maksymalna = Math.max(a,b,c);
console.log(maksymalna);

var zaokraglenie = Math.round(a);
console.log(zaokraglenie);

//abs - w. bewz, round - zaokr, floor
var x = -56;
var y = -13.1;
var z = 13.9;

document.write('<br>' + Math.abs(x));
document.write('<br>' + Math.abs(y));
document.write('<br>' + Math.abs(z));

document.write('<br>' + Math.round(x));
document.write('<br>' + Math.round(y));
document.write('<br>' + Math.round(z));

document.write('<br>' + Math.floor(x));
document.write('<br>' + Math.floor(y));
document.write('<br>' + Math.floor(z));

// potegi
var p = Math.pow(2,10);
console.log(p);

// losowanie
var losuj =Math.random();
losuj = losuj.toFixed(2);
console.log(losuj);
var k = 3.68568658658;
k = k.toFixed(2);
console.log(k); //3.69
var k = 3.68568658658;
k = k.toPrecision(2);
console.log(k); //3.7, string

//losowanie
// losuj z przedziału (0;10>

var l =Math.floor(Math.random() * 11);
console.log(l);

//losuj z przedziału od <90;100>

var l =Math.floor(Math.random() * 11 + 90);
console.log(l);