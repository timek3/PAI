// wyrażenia regularne
//var text = 'Mateusz Przegra w Herosy';
//var regEx = /Przegra/; //true
//var regEx = /Wygra/; //false
//var regEx = /przegra/i; //true; i - nie zwraca uwagi na wielkość liter
//var regEx = /^Przegra/; //false ^ - musi się zaczynać
//var regEx = /Przegra$/; //false $ - musi się kończyć
//var regEx = /^Przegra$/; //false połączenie po prostu^
//var regEx = /[a-z]/; //true - nie patrzy na pierwsze, byle by było
//var regEx = /[A-Z]/; //true
//var regEx = /[A-z]/; //true - będzie prawda dla wszystkich liter
//var regEx = /[A-Z]/; //true


//var text = 'mąka';
//var regEx = /^[ąęóśżźćńł][a-z]/; //false
//var regEx = /^[a-z]\s/; //false \s - musi być spacja


//var text = 'mąka@';
//var regEx = /^[A-z]+@/; // + - musi conajmniej jeden element czegoś
//var regEx = /^mąka+?/; // ? - sprawdza znak przed sobą i może on być max raz
//var regEx = /^mąk[a]+?/; // true


//var text = 'aa';
//var regEx = /^[a]{1}$/; //false sprawdza czy jest tylko jeden znak na pocz i końcu
//var regEx = /^[a]{2,4}/; //zakres liczby znaków  a
//var regEx = /^[a]{2,}/; //minimum liczby znaków a


//var text = '/';
//var regEx = /\//; //sprawdza czy będzie znak specjalny /
//   \ + znak specjalny sprawdza czy on będzie
//var regEx = /./; //true sprawdza czy będzie dokładnie jeden znak

//var text = '.pl';
//var regEx = /\.[a-z]{2}/; //true

// | (or) pozwala na dowolną kolejność


//var regEx = /\w/; // \w - oznacza duże, małe litery cyfry i _ (bez polskich znaków)
//var regEx = /\W/; // \W - negacja małego w
//var regEx = /\d/; // \d - d jak cyfry, sprawdza czy jest cyferka
//var regEx = /\D/; // \D - cokolwiek oprócz cyfry
//var regEx = /\s/; // \s - może być spacja
//var regEx = /\S/; // \S - nie może być spacja


//var text = 'test';
//var regEx = /(test){1}/; //ma być raz test
//var regEx = /(test){2}/; //ma być 2 razy test, zadziała tylko jeżeli będzie obok siebie, w grupie

//wzór na kod pocztowy  /^\d{2}-\d{3}$/

//zad dom  użytkownik podaje z klawiatury (form) kod pocztowy i miasto, sprawdz czy kod jest prawidłowy. Jeśli tak to na ekranie wyświetl kod pocztowy: kod, miasto: miasto

//var regEx = /\w{1,}\.mp3/g;//
var regEx = /\w+\.mp3/g;// + to to samo ^
var text = 'plik@mp3 arkusz.csv szkola.mp3 tekst.mp3';



//var sprawdz = regEx.test(text); //true
var sprawdz = text.match(regEx);
//console.log(sprawdz); 
document.write(sprawdz);
