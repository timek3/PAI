<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">;
    <title>Zalogowany</title>
</head>
<body>
    <h2>
       <?php
        if(!isset($_SESSION['zalogowany'])){
            header('location: logowanie.php');
        }
        ?>
        Zalogowany jako użytkownik 
        <?php
            echo $_SESSION['login'];
            echo "<br><a href=\"wyloguj.php?wyloguj=\">Wyloguj</a>";
        
        ?>
    </h2>
</body>
</html>