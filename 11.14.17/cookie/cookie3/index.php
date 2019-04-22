<?php

    if(isset($_GET['usun'])){
        setcookie('wiek', '');
    }
    if(!isset($_COOKIE['wiek'])&&empty($_GET['wiek'])){
        include('header.php');
        include('form.php');
        include('footer.php');
    }elseif(isset($_GET['wiek'])){
        setcookie('wiek', "{$_GET['wiek']}", time()+60*60*24*365);
        include('header.php');
        echo "dzięks";
        echo "<br><a href=\"form.php\">xd</a>";
        include('footer.php');
    }
?>