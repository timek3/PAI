<?php
    session_start();
    if(isset($_GET['wyloguj'])){
            unset($_SESSION['zalogowany']);
            session_destroy();
            header('location: logowanie.php');
    }else{
        header('location: logowanie.php');
    }
?>