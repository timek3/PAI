<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">    
<title>Przychodnia</title>
<link rel="stylesheet" href="przychodnia.css">
</head>
<body>
    <div id="baner">
        <h1>PRAKTYKA LEKARZA RODZINNEGO</h1>
    </div>
    <div id="panelLewy">
        <h3>LISTA PACJENTÓW</h3>
        
        <?php
        
            $polaczenie = @new mysqli('localhost','root','','przychodniate');
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
       
    </div>
    <div id="panelPrawy">
        <h2>INFORMACJE O PACJENCIE</h2>
    </div>
    <div id="stopka"></div>
</body>
</html>