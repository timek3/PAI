// Mamy przesrane
//Tworzenie obiektu za pomocą literału obiektu

var janusz = {
    wzrost : 180,
    waga : 80,
    miejsceUrodzenia : 'Poznań',
    plec : 'mężczyzna',
};  //obiekt pusty

//console.log(janusz.wzrost);
var auto ={
    marka: 'BMW',
    model: 'Dobry',
    predkosc: 221,
    wyswietl(){
       //document.write('marka: '+ auto.marka); 
       document.write('marka: '+ this.marka); 
    }
};
//auto.wyswietl();
//document.write(auto.wyswietl());
//**********************************************

var ksiazka = {  
    tytul: 'Pan Tadeusz',
    rokWydania: 1834,
    gatunek: 'poemat epicki',
    autor: {
        imie: 'Adam',
        nazwisko: 'Mickiewicz',
        wyswitlDane(){
            return 'Imię: ' + this.imie + '<br>Nazwisko: ' + this.nazwisko;
        }
    }
};
//console.log(ksiazka['autor']['imie']);
//console.log(ksiazka.autor.imie);
//console.log(ksiazka.autor['imie']);

var klucz = 'nazwisko';
//console.log(ksiazka.autor[klucz]);
//console.log(ksiazka.autor.wyswitlDane());
//document.write(ksiazka.autor.wyswitlDane());
//**********************************************
// Tworzenie pustego obiektu
var produkt= {};
//console.log(produkt.nazwa);//undefined
//console.log(typeof(produkt.nazwa));//undefined
produkt.nazwa = 'pralka';
produkt.model = 'WAK2024PI';
produkt.firma = 'Bosch';
produkt.waga = 8;
produkt.cena = 1500;
produkt.wyswietl = function () {
    return 'Nazwa: ' +this.nazwa + '<br>Model ' + this.model + '<br>Cena: ' + this.cena;
}

console.log(typeof(produkt.nazwa)); // string
console.log(typeof(produkt.waga)); // number
console.log(typeof(produkt.wyswietl)); // function
//************************************************
//************************************************

//konstruktor object

//var tab = new Array();
 var hotel= new Object();
hotel.nazwa = 'Hotel Poznań';
hotel.pokoje = 50;
hotel.zarezerwowanePokoje = 35;
hotel.silownia = true;
hotel.basen = true;
hotel.rodzajPokoju = ['pojedyncze', 'podwójne', 'apartament'];
hotel.wolnePokoje = function(){
    return this.pokoje - this.zarezerwowanePokoje;
}

console.log('Wolne pokoje: '+ hotel.wolnePokoje());

//**************************************************
function Hotel (nazwa, pokoje , zarezerwowanePokoje, silownia, basen, rodzajPokoju){
    this.nazwa = nazwa;
    this.pokoje = pokoje;
    this.zarezerwowanePokoje = zarezerwowanePokoje;
    this.silownia = silownia;
    this.basen = basen;
    this.rodzajPokoju = rodzajPokoju;
    this.wolnePokoje = function(){
        return this.pokoje - this.zarezerwowanePokoje;
    }
    this.wyswietl = function(){
        return 'Nazwa: '+ this.nazwa + '<br> Liczba pokoi: ' + this.pokoje + '<br> Pokoje zarezerwowane: '+ this.zarezerwowanePokoje + '<br>Siłownia: ' + this.silownia + '<br>Basen: '+ this.basen + '<br>Rodzaje pokojów: '+this.rodzajPokoju + '<br>Wolne pokoje: ' + this.wolnePokoje();
    }
}


//zad dom metodę wyświetl z konstruktora hotel, zastosuj tablice do wyświtlania wartości
function Hotel2 (nazwa, pokoje , zarezerwowanePokoje, silownia, basen, rodzajPokoju){
    this.tabela = [];
    this.tabela[0] = nazwa;    
    this.tabela[1] = pokoje;
    this.tabela[2] = zarezerwowanePokoje;
    this.tabela[3] = silownia;
    this.tabela[4] = basen;
    this.tabela[5] = rodzajPokoju;
    this.tabela[6] = this.tabela[1] - this.tabela[2];
    this.wyswietl = function(){
        return this.tabela;
    }
}
var HotelLech = new Hotel2('Lech', 100, 30, true, false, ['jednoosobowy', 'apartament']);
document.write(HotelLech.wyswietl() + '<br><br>');

function Osoba(imie, nazwisko, wiek, plec){
    this.imie = imie;
    this.nazwisko = nazwisko;
    this.wiek = wiek;
    this.plec = plec;
    this.narodowsc = 'Polska';
}

var czarek = new Osoba('Czarek', 'Kowal', 22, 'm');
document.write(czarek.imie+'<br><br>');

// utwórz konstruktor pies i o parametrach imie rasa waga oraz ulubione zajęcia. w ulubionych zajęciach może być wiele wartości.
//utwórz 3 obiekty azor edi saba

function Pies(imie, rasa, waga, ulubioneZajecia){
    this.imie=imie;
    this.rasa=rasa;
    this.waga=waga;
    this.ulubioneZajecia = ulubioneZajecia;
}

var azor = new Pies ('Azor','Owczarek',5,['szczekanie','bieganie']);
var edi = new Pies ('Edi','Owczarek',9,['szczekanie','bieganie']);
var saba = new Pies ('Saba','Owczarek',30,['szczekanie','bieganie']);
document.write(azor.ulubioneZajecia+'<br><br>');

var psy = [azor,edi,saba];
console.log(psy);
edi.ulubioneZajecia.push('spacer');
var rozmiar = 'Mały pies';
for (var i=0;i<psy.length;i++){
    console.log(psy[i]);
    if (psy[i].waga<10) rozmiar='mały pies';
    else rozmiar = 'duży pies';
    document.write('Pies <span style="color:blue">'+ psy[i].imie+'</span> to '+rozmiar+'<br>');
}

var tab = ['jan', 'nowak', 'poznań'];
for (var i in tab){
    document.write(i + ' '+ tab[i] + '<br>');
}

for (var x in edi){
    if (x== 'imie' || x== 'rasa'){
        document.write(edi[x]);
    }
}

function Pole(a, b){
    return a*b;
}

console.log(Pole.length); //ilosc parametrow
console.log(Pole.constructor); //funkcja 
console.log(Pole.prototype); 

// ******************************************************

function Uczen(imie, nazwisko){
    this.imie = imie;
    this.nazwisko = nazwisko;
}
var maciej = new Uczen('Maciej', 'Nowak');
Uczen.prototype.narodowosc = 'Polska';
Uczen.prototype.wyswietl = function(){
    return 'Imie: '+ this.imie + ' Nazwisko: '+ this.nazwisko + ' Narodowosc: ' + this.narodowosc;
}
document.write('<br>'+maciej.wyswietl());
document.write('<br>'+maciej.constructor);
document.write('<br>'+maciej.constructor.prototype.narodowosc);

//**********************************************************

// zad utworz konstruktor rower który ma 2 parametry - nazwa/kolor utwórz prototyp ilosc kół który ma wartosc 2. utwórz metodę wyświetlającą wszystkie dane for in

function Rower(nazwa, kolor){
    this.nazwa = nazwa;
    this.kolor = kolor;
}
var rowerek = new Rower('torpeda', 'czerwony');
Rower.prototype.iloscKol = 2;
Rower.prototype.wyswietl = function(){
    for (var i in this)
        {if (typeof(this[i])!='function')
        document.write( i+' ' + this[i]+' ' );
        }
}
document.write('<br>'+ rowerek.wyswietl());

console.log(maciej.hasOwnProperty('narodowosc'));