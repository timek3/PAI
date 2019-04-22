var elImie = document.getElementById('imie');
var elNazwisko = document.getElementById('nazwisko');
var elLogin = document.getElementById('login');
var elMail1 = document.getElementById('mail1');
var elMail2 = document.getElementById('mail2');
var elPass1 = document.getElementById('pass1');
var elPass2 = document.getElementById('pass2');
var elDate = document.getElementById('date');
var elRegulamin = document.getElementById('regulamin');
var elPrzycisk = document.getElementById('przycisk');
var elPopraw = document.getElementById('popraw');
var elKomunikat = document.getElementById('komunikat');
var elSila = document.getElementById('sila');

elImie.addEventListener('blur',sprawdzImie);
elNazwisko.addEventListener('blur',sprawdzNazwisko);
elLogin.addEventListener('blur',sprawdzLogin);
//elNazwisko.addEventListener('blur',sprawdz);
//elLogin.addEventListener('blur',sprawdz);
elMail1.addEventListener('blur',blokuj);
elMail2.addEventListener('blur',mail);
elPass1.addEventListener('blur',blokujh);
elPass1.addEventListener('input',sila);
elPass2.addEventListener('blur',haslo);
elRegulamin.addEventListener('change',regulamin);
elPopraw.addEventListener('click',odblokuj);
elPrzycisk.addEventListener('click',wyslij);


elMail2.disabled = true;
elKomunikat.style.color='red';
elSila.style.float='right';

var regImie = /^[a-ząęóćźżśńł]{2,16}$/i;
var regNazw = /^[a-ząęśóżźćńł]{2,20}(\-[a-ząęóżźćńł]{2,20})?$/i; 
var regLogin = /^[a-z0-9][\w\.\-]{1,25}[a-z0-9]$/;
var regMail = /^[a-z0-9][\w\.\-]{1,28}[a-z0-9]\@[a-z0-9]{2,10}\.([a-z0-9]{2,10}\.)?[a-z]{2,3}$/;
//Bezpieczne hasło małe duże litery, cyfry, znak specjalny
var regPass = /^((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W\_]).{8,35})$/; 

function sprawdzImie(){
    var sprawdz = regImie.test(elImie.value)
    if (sprawdz) { 
        elKomunikat.textContent = '';
    }else {
        elKomunikat.textContent = 'Błędne imię';
        elImie.focus();
    }
}
function sprawdzNazwisko(){
    var sprawdz = regNazw.test(elNazwisko.value)
    if (sprawdz) { 
        elKomunikat.textContent = '';
    }else {
        elKomunikat.textContent = 'Błędne nazwisko';
        elNazwisko.focus();
    }
}
function sprawdzLogin(){
    var sprawdz = regNazw.test(elLogin.value)
    if (sprawdz) { 
        elKomunikat.textContent = '';
    }else {
        elKomunikat.textContent = 'Błędny login';
        elLogin.focus();
    }
}

function mail(){
    if(elMail1.value != elMail2.value){
        elKomunikat.textContent = 'Adresy poczty są różne';
        elMail1.value = '';
        elMail2.value = '';
        elMail1.disabled = false;
        elMail2.disabled = true;
        elMail1.focus();
    }
    else {
        elKomunikat.textContent = '';
        this.disabled = true;
    }
}

function blokuj(){
    elMail2.disabled = false;
    this.disabled = true;
     elMail2.focus();
}

function haslo(){
    if(elPass1.value != elPass2.value){
        elKomunikat.textContent = 'Hasła są różne';
        elPass1.value = '';
        elPass2.value = '';
        elPass1.disabled = false;
        elPass2.disabled = true;
        elPass1.focus();
    }
    else {
        elKomunikat.textContent = '';
        this.disabled = true;
    }
}

function blokujh(){
    var sprawdz = regPass.test(elPass1.value);
    if (sprawdz){
    elPass2.disabled = false;
    this.disabled = true;
     elPass2.focus();
    } else {
        elKomunikat.textContent = 'Hasło nie spełnia wymagań';
        elPass1.focus();
    }
}
function sila(){
    var licznik = 0;
    var regMale= /[a-z]/;
    var regDuze= /[A-Z]/;
    var regZnaki= /[\W\_]/;
    var regCyfry= /\d/;
    if (regMale.test(elPass1.value)) {licznik++;}
    if (regDuze.test(elPass1.value)) {licznik++;}
    if (regZnaki.test(elPass1.value)) {licznik++;}
    if (regCyfry.test(elPass1.value)) {licznik++;}
    if (licznik==1) {elSila.textContent = 'Słabe'; elSila.style.color = 'red';}
    else if (licznik==2) {elSila.textContent = 'Dobre'; elSila.style.color = 'orange';}
    else if (licznik>=3) {elSila.textContent = 'Zajebiste'; elSila.style.color = 'green';}
    else elSila.textContent = '';
}
function regulamin (){
    if (elRegulamin.checked){
        elPrzycisk.disabled = false;
    }  else {
        elPrzycisk.disabled = true;
    }
}

function odblokuj (){
    var zablokowane = document.getElementsByTagName('input');
        if (zablokowane.length >0){
            for (var i=0;i<zablokowane.length;i++){
                if (zablokowane[i].disabled)
                    zablokowane[i].disabled = false;
            }
        }
}

function wyslij(){
    var puste =false;
    var x=document.getElementsByTagName('input');
            for (var i=0;i<x.length;i++){
                if (x[i].value==''){
                    puste=true;
                    break;
                }
            }
        
    if (puste){
        elKomunikat.textContent = 'Masz puste pola';
    }
    else {
    document.write('<div>');
    document.write('Imię: ' + elImie.value + '<br>');
    document.write('Nazwisko: ' + elNazwisko.value + '<br>');
    document.write('Login: ' + elLogin.value + '<br>');
    document.write('Hasło: ' + elPass1.value + '<br>');
    document.write('Mail: ' + elMail1.value + '<br>');
    document.write('Data: ' + elDate.value + '<br>');
    document.write('</div>');
    }
}

//zad dom przy haśle wyświetl czy hasło jest słabe/dobre/silne. wyświetlenie ma być obrazkiem. Kolor zielony silne hasło, pomarańczowy dobre, czerwony słabe hasło (progress bar)