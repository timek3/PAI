<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP</title>
</head>
<body>

    <?php //znacznik kanoniczny
        echo ("4TE");
    ?>
   <? // znacznik SGML działa po konfiguracji php.ini (w config)
        echo ("4TE");
    ?>
    <!--Znacznik typu ASP nie działa w php 7 -->
  <!--  <%
       
       
    %> -->
    
    <!--Znacznik skryptu html nie działa w php 7-->
    <script language="php"></script>
    <?php
    //komentarz blokowy
    
    /*
    Komentarz blokowy
    */
    
    #komentarz jednoliniowy uniksowy
    
    //wyświetlanie informacji 
    
    echo ("cudzysłow<br>");
    echo ('apostrof<br>');
    echo 'tekst<br>';
    echo "tekst<br>";
    echo 18; //brane jako numer
    echo '18'; //brane jako string
    echo "<br>Masz ",18," lat"; // przy kropce się krzeczy - robi string
    echo "<h2>Nagłówek</h2>";
    echo "<h1 style=\"color:blue\">tekst</h1>";
    echo '<h1 style="color:blue">tekst 2</h1>';
    print "ZSK"; //echo wyświetla tylko proste rzeczy, print bardziej skąplikowany (można funkcji),  ale nie można robić przecinków do konkatenacji
    //print "ZSK",213; wywali error
    
    
    ?>
    
    
</body>
</html>