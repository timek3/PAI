<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>formularz</title>
    
</head>
<body>
    
  <!--<form action="dane.php" method="get">domyślnie jest get
      <input type="text" name="imie">Imię <br>
      <input type="text" name="nazwisko">Nazwisko <br>
      <input type="submit"> Domyślnie przesyła do tego pliku
</form>-->
    
  <!-- <form method="post" action="dane.php">
    <input type="text" name="login">Login <br>
    <input type="password" name="haslo"> Hasło <br>
    <input type="submit">
    </form>-->
   
    
    <form method="get">
    <input type="radio" name="kolor" value="Biały">Biały<br>
    <input type="radio" name="kolor" value="Zielony">Zielony<br>
    <input type="radio" name="kolor" value="Niebieski">Niebieski<br>
    <input type="radio" name="kolor" value="Czerwony">Czerwony<br>
    <input type="submit">
    </form>
    <?php
    if (isset($_GET['kolor'])){
    echo "Zaznaczyłeś kolor: {$_GET['kolor']}";
}else{
    echo 'nie zaznaczyłeś';
}
    ?>
</body>
</html>