<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pliki i foldery</title>
</head>
<body>
    <?php 
        $dir ="./test";
        if(!(@$fd = opendir($dir))){ //sprawdza czy nie można otworzyć podanego katalogu
            exit("nie można otworzyć katalogu $dir"); // jeżeli nie można to skończy wykonywanie skryptu i wypisze nie można...
            
        }else{
            
            echo "<ul>";
            while(($plik = readdir($fd)) !== false){ // jeżeli plik nazywa się 0 to potraktuje go jako false, więc trzeba sprawdzić typ danych
                if($plik != "." && $plik != "..") // sprawia że oleje te 2 foldery
                echo "<li>$plik</li>";
            }
            echo "</ul>";
        }
    ?>
</body>
</html>