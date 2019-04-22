<?php
    if(!isset($_COOKIE['szkola'])):
    setcookie('szkola', 'zsk'); //bez trzeciego parametru nie zostaje po zamknięciu przeglądarki
        $komunikat = "Nie było cookie szkoła";
    
    else:
    
        $komunikat = "Cookie było utworzone<br>";
        $komunikat .= "Jego wartość to: ".$_COOKIE['szkola'];
    
    endif;
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>cookie</title>    
</head>
<body>
    <?php
    
        echo $komunikat;
    
    ?>
</body>
</html>