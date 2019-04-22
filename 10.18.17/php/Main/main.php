<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP</title>
</head>
<body>

    <?php
        echo '<h2 style="text-align:center"> ';
        echo "Elo elo 320";
        echo '</h2>';
    //include '../imie.php'; //działa
    //include '../imie.php'; //działa
    //include '../imie1.php'; //wypieprza błąd
    //@include '../imie1.php'; //olewa błąd
    require '../imie.php'; // wszystko git
    @require '../imie1.php'; // wywali fatal error i gg, jak schowamy to to nie pokaże error, ale utnie dalszą część
    
        echo ': Horn of the Abyss';
    ?>
    
</body>
</html>