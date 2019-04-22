<?php
   if(!isset($_COOKIE['zsk'])){
        session_name('zsk');
    }
     session_start(); //bez tego nie zadziała 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sesja</title>
</head>
<body>
    Gitara siema <?php echo $_SESSION['imie']; ?> na stronie! <br>
    Identyfikatorem sesji jest <?php echo session_id();    ?><br>
    <a href="session1_2.php">lul</a>
</body>
</html>