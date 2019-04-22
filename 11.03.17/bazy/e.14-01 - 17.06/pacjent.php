<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">    
<title>Przychodnia</title>
<link rel="stylesheet" href="css/przychodnia.css">
</head>
<body>
    <div id="baner">
        <h1>PRAKTYKA LEKARZA RODZINNEGO</h1>
    </div>
    <div id="panelLewy">
        <h3>LISTA PACJENTÓW</h3>
        
        <?php
        
            $polaczenie = @new mysqli('localhost','root','','przychodnia');
            if (!$polaczenie->connect_errno){
                //echo "Prawidłowe połączenie: ".$polaczenie->connect_errno;
                $zapytanie = "SELECT `id`,`imie`,`nazwisko` FROM `pacjenci`";
                if ($rezultat = $polaczenie->query($zapytanie)){
                    while($wiersz = $rezultat->fetch_assoc()){
                        echo <<<WIERSZ
                            {$wiersz['id']}
                            {$wiersz['imie']}
                            {$wiersz['nazwisko']}
                            <br>
WIERSZ;
                        }
                }else{
                    echo "błąd";
                }
                echo "<br><br>";
                echo <<<FORMULARZ
                
                    <form action="pacjent.php">
                    Podaj id:<br>
                    <input type="number" name="id">
                    <input type="submit" name="przycisk" value="Pokaż dane">
                    </form>
FORMULARZ;
                    
            }else{
                echo "Błąd: ".$polaczenie->connect_errno; //1045 błąd hasła, 2002 błąd serwera, 1044 błędny user, 1049 błąd bazy
            }
        ?>
       <h3>LEKARZE</h3>
    <ul> 
        <li>pn - śr</li>
        <ol>
            <li>Anna Kwiatkowska</li>
            <li>Jan Kowalewski</li>
        </ol>
        <li>czw - pt</li>
        <ol>
            <li>Krzysztof Nowak</li>
        </ol>
    </ul>     
    </div>
    <div id="panelPrawy">
        <h2>INFORMACJE SZCZEGÓŁOWE O PACJENCIE</h2>
        <?php
           if(isset($_GET['przycisk'])){
                $id =$_GET['id'];
           }
        
        $zapytanie = " SELECT `imie`,`nazwisko`,`choroby_przewlekle`,`uczulenia` FROM `pacjenci` WHERE id='$id'";
        if($rezultat = $polaczenie -> query($zapytanie)){
            $wiersz = $rezultat->fetch_assoc();
            echo <<<WIERSZ
            <p> Imię i nazwisko {$wiersz['imie']}
            {$wiersz['nazwisko']}</p><br>
            <p> Choroby przewlekłe {$wiersz['choroby_przewlekle']}</p><br>
            <p> Uczulenia {$wiersz['uczulenia']}</p><br>
WIERSZ;
        }else{
            echo "zjebało sie";
        }
        $polaczenie->close();
       /* if($polaczenie->close())
            echo "połączenie zamkniete";*/
        ?>
    </div>
    <div id="stopka">
    <p>utworzone przez 99120100000</p>
    <a href="kwerendy.txt">Pobierz plik z kwerendami</a>
    </div>
</body>
</html>