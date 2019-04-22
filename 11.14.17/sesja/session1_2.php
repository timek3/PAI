<?php
    session_name('zsk');
     session_start(); //bez tego nie zadziała 
    unset($_SESSION['imie']);
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
    <a href="session1.php">lul</a>
</body>
</html>