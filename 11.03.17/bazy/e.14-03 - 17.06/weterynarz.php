<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Weterynarz</title>
    <link rel="stylesheet" href="weterynarz.css">
</head>
<body>
    <div id="baner">
        <h1>GABINET WETERYNARYJNY</h1>
        
    </div>
    <div id="panelLewy">
        <h2>PSY</h2>
        
            <?php
                if($polaczenie = @mysqli_connect('localhost', 'root', '')): //łączenie z serwerem
                   // echo '<br>prawidłowe połączenie z serwerem<br>';
                else: 
                    //exit ('nie prawidłowe');
                endif;
        
                if(mysqli_select_db($polaczenie, 'weterynarz')): //łączenie z db 
                    //echo '<br>jest połączenie z db<br>';
                else:   
                    //echo '<br>zjebałeś<br>';
                endif;
                
        
                $zapytanie = "SELECT `id`,`imie`,`wlasciciel` FROM `zwierzeta` WHERE zwierzeta.rodzaj = 1";
                if($rezultat = mysqli_query($polaczenie, $zapytanie)):  //robienie zapytania
                    //echo "prawidłowe";
                else:
                    //echo "błędne";
                endif;
        
                mysqli_set_charset($polaczenie, "utf8");
        
                //wyświetlenie zapytania
        
                while($wiersz = mysqli_fetch_row($rezultat)){
                    echo <<<WIERSZ
                    $wiersz[0]
                    $wiersz[1]
                    $wiersz[2]<br>
WIERSZ;
                }
            ?>
        
        <h2>KOTY</h2>
           <?php
                
                $zapytanie = "SELECT `id`,`imie`,`wlasciciel` FROM `zwierzeta` WHERE zwierzeta.rodzaj = 2";
                if($rezultat = mysqli_query($polaczenie, $zapytanie)):  //robienie zapytania
                   // echo "prawidłowe";
                else:
                  //  echo "błędne";
                endif;
        
                //wyświetlenie zapytania
        
                while($wiersz = mysqli_fetch_assoc($rezultat)){ //lepsze
                    echo <<<WIERSZ
                    {$wiersz['id']}
                    {$wiersz['imie']}
                    {$wiersz['wlasciciel']}<br>
WIERSZ;
                }
            ?>
    </div>
    <div id="srodkowy">
    
     <h2>SZCZEGÓŁOWA INFORMACJA O ZWIERZĘTACH</h2>   
    <?php
        $zapytanie = "SELECT `imie`, `telefon`, `szczepienie`, `opis` FROM `zwierzeta`";
        if($rezultat = mysqli_query($polaczenie, $zapytanie)){
            while($wiersz = mysqli_fetch_assoc($rezultat)){
                echo<<<WIERSZ
                Pacjent: {$wiersz['imie']}<br>
                Telefon: {$wiersz['telefon']},
                ostatnie szczepienie: {$wiersz['szczepienie']},
                informacje: {$wiersz['opis']}<hr><br>
WIERSZ;
}
        }else{
            echo "błąd";
        }
        mysqli_close($polaczenie);
        //przerobić na egzamin
        ?>
    </div>
    
    <div id="panelPrawy">
        <h2>WETERYNARZ</h2>
        <a href="logo.jpg"><img src="logo-mini.jpg"></a>
        <p>Krzysztof Nowakowski, lekarz weterynarii</p>
        <h2>GODZINY PRZYJĘĆ</h2>
        <table>
            <tr>
                <td>Poniedziałek</td>
                <td>15:00 - 19:00</td>
            </tr> 
            <tr>
                <td>Wtorek</td>
                <td>15:00 - 19:00</td>
            </tr>
        </table>
    </div>
</body>
</html>
