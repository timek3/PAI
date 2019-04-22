<?php

  session_name("zsk");
    session_start();
    $_SESSION['imie'] = 'Filip';
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
    <a href="session1_1.php">lul</a>
    <a href="session1.php?usunSesje=xd">lul</a>
    <?php
        if(isset($_GET['usunSesje'])){
            session_destroy();
        }
    ?>
</body>
</html>