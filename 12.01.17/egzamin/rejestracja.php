<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Nasze hobby</title>
<link rel="stylesheet" href="hobby.css">
</head>
<body>
    <div id="baner">
        <h1>FORUM HOBBYSTYCZNE</h1>
    </div>
    <div id="panelLewy">
    <?php
    if(!isset($_POST['login']) or
      !isset($_POST['haslo']) or
      !isset($_POST['nick']) or
      !isset($_POST['hobby']) or
      !isset($_POST['zawod']) or
      !isset($_POST['plec']) or
      !isset($_POST['polityka']))
        header('location:forum.html');
    $polaczenie = mysqli_connect('localhost','root','','forum4te');
        if (!$polaczenie->connect_error){
      $login = $polaczenie ->  real_escape_string(htmlentities( $_POST['login']));  
      $haslo = $polaczenie -> real_escape_string(htmlentities($_POST['haslo']));  
      $nick = $polaczenie -> real_escape_string(htmlentities($_POST['nick']));  
      $hobby = $polaczenie -> real_escape_string(htmlentities($_POST['hobby']));  
      $zawod = $polaczenie -> real_escape_string(htmlentities($_POST['zawod']));  
      $plec = $polaczenie -> real_escape_string(htmlentities($_POST['plec']));
    echo "Konto $nick zostało zarejestrowane na forum hobbystycznym";
        $sql = "INSERT INTO uzytkownicy VALUES ('','$nick','$hobby','$zawod','$plec')";
        if($rezulta= $polaczenie->query($sql)){
        }else {
            echo "błąd zapytania";
        }
        $sql = "INSERT INTO konta VALUES ('','$login','$haslo')";
            
        if($rezulta= $polaczenie->query($sql)){ }else {
            echo "błąd zapytania";
        }
        $polaczenie->close();
        }else{
            echo "błąd połączenia";
        }
    ?>
    </div>
    <div id="panelPrawy">
        <h3>Tematyka forum </h3>
        <ul>
            <li>Hodowla zwierząt
                <ul>
                    <li>psy</li>
                    <li>koty</li>
                </ul>
            </li>
            <li>Muzyka</li>
            <li>Gry komputerowe</li>
        </ul>
    </div>
</body>
</html>