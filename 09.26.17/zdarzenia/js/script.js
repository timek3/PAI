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
elKomunikat.style.color='red';

/*window.onload = function(){
    alert('xaxaxaaxa');
}*/

/*elImie.onblur = function(){
    if (elImie.value.length>2 && elImie.value.length<10) { 
        elKomunikat.textContent = '';
    }else {
        elKomunikat.textContent = 'Błędne dane';
    }
}*/

/*function sprawdz(){
    if (elImie.value.length>2 && elImie.value.length<10) { 
        elKomunikat.textContent = '';
    }else {
        elKomunikat.textContent = 'Błędne dane';
    }
}*/
elMail2.disabled = true;

elImie.addEventListener('blur',sprawdz);
elNazwisko.addEventListener('blur',sprawdz);
elLogin.addEventListener('blur',sprawdz);
elMail1.addEventListener('blur',blokuj);
elMail2.addEventListener('blur',mail);
elPass1.addEventListener('blur',blokujh);
elPass2.addEventListener('blur',haslo);
elRegulamin.addEventListener('change',regulamin);
elPopraw.addEventListener('click',odblokuj);
elPrzycisk.addEventListener('click',wyslij);

function sprawdz(){
    if (this.value.length>2 && this.value.length<10) { 
        elKomunikat.textContent = '';
    }else {
        elKomunikat.textContent = 'Błędne dane';
        this.focus();
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
    elPass2.disabled = false;
    this.disabled = true;
     elPass2.focus();
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