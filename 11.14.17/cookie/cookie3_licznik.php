<?php
    $dni = 30;
    if(!isset($_COOKIE['licznik'])){
        $licznik =1;
    
    }else{
        $licznik = intval($_COOKIE['licznik']);
        $licznik++;
        
    }
    setcookie('licznik',"$licznik",time()+60*60*24*$dni);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>licznik</title>    
</head>
<body>
    <?php
    
        if($licznik ==1){
            echo "Liczba odwiedziń w ciau ostatnich $dni dni: <span style=\"color: red\">$licznik</span> raz";
            
        }else{
            echo "Liczba odwiedziń w ciau ostatnich $dni dni: <span style=\"color: red\">$licznik</span> razy";
        }
    
    ?>
    <form action="cookie3_licznik.php">
        <input type="submit" name="usun" value="usuń ciasteczko">
    
    </form>
    <?php
    if(isset($_GET['usun'])){
        setcookie('licznik', false);
        header('location: cookie3_licznik.php');
    }
    ?>
</body>
</html>