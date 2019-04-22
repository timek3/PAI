<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Szkoła Ponadgimnazjalna</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div id="baner">
        <h1>Oceny uczniów: język polski</h1>
    </div>
    <div id="panelLewy">
        <h2>Lista uczniów: </h2>
        <?php
            $polaczenie = new mysqli ('localhost','root','','szkola4te');
            if(!$polaczenie -> connect_error){
                $sql = "SELECT `imie`, `nazwisko` FROM `uczen`";
                if($rezultat = $polaczenie->query($sql)){
                    echo "<ol>";
                    while($wiersz = $rezultat-> fetch_row()){
                        echo "<li>{$wiersz[0]} {$wiersz[1]}</li>";
                    }
                    echo "</ol>";
                    $polaczenie -> close();
                }else{
                    $polaczenie -> close();
                    echo "Błąd zapytania";
                }
            }else{
                echo "błąd połączenia";
            }
        ?>
    </div>
    <div id="panelPrawy">
        
        <?php
            $polaczenie = new mysqli ('localhost','root','','szkola4te');
            if(!$polaczenie -> connect_error){
                $sql = "SELECT `imie`, `nazwisko` FROM `uczen` where `id`=2";
                if($rezultat = $polaczenie->query($sql)){
                    while($wiersz = $rezultat-> fetch_row()){
                        echo "<h2>Uczeń: {$wiersz[0]} {$wiersz[1]}</h2>";
                    }
                    $polaczenie -> close();
                }else{
                    $polaczenie -> close();
                    echo "Błąd zapytania";
                }
            }else{
                echo "błąd połączenia";
            }
        ?>
        
        <?php
            $polaczenie = new mysqli ('localhost','root','','szkola4te');
            if(!$polaczenie -> connect_error){
                $sql = "SELECT `imie`,`nazwisko`, avg(`ocena`) FROM `uczen` join `ocena` on `ocena`.`uczen_id` = `uczen`.`id` WHERE `uczen`.`id` = 2 and `ocena`.`przedmiot_id` = 1";
                if($rezultat = $polaczenie->query($sql)){
                    while($wiersz = $rezultat-> fetch_row()){
                        echo "<p>Średnia ocen z języka polskiego: {$wiersz[2]}</p>";
                    }
                    $polaczenie -> close();
                }else{
                    $polaczenie -> close();
                    echo "Błąd zapytania";
                }
            }else{
                echo "błąd połączenia";
            }
        ?>
        
        
    </div>
    <div id="stopka">
        <h3>Zespół Szkół Ponadgimnazjalnych</h3>
        <p>Stronę opracował Mareczek</p>
    </div>
    
</body>
</html>