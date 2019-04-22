<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pliki i foldery - tworzenie i usuwanie</title>
</head>
<body>
    <form>
        <h3>Dodaj folder</h3><br>
        <input type="text" name="folder">
        <input type="submit" name="przycisk">
    </form>
    <?php 
    if(isset($_GET['usunK'])){
        $usunK = $_GET['usunK'];
        if(file_exists("./test/$usunK")) //sprawdza czy istnieje to co chcemy usunąć
        rmdir("./test/$usunK");
    }
    if(isset($_GET['usunP'])){
        $usunP = $_GET['usunP'];
        if(file_exists("./test/$usunP")) //sprawdza czy istnieje to co chcemy usunąć
        unlink("./test/$usunP");
    }
    if(isset($_GET['przycisk']) && !empty($_GET['folder'])){ //sprawdzamy czy istnieje bo by wywaliło błąd
        $folder= $_GET['folder'];
        if(!file_exists("./test/$folder")){
            mkdir("./test/$folder");
        }else{
            echo "<hr>Folder o nazwie $folder już istnieje<br> Podaj inną nazwe</h4>";
        }
    }
    
    
       $dir ="./test";
        if(!($folder = opendir($dir))){
            exit("nie można otworzyć");
        }else{
            $sortuj = 0;
            $pliki = array();
            $katalogi = array();
            if(isset($_GET['sortuj'])){
                $sortuj = $_GET['sortuj'];
                if($sortuj==0){
                    sort($pliki);
                    sort($katalogi);
                }else{
                    rsort($pliki);
                    rsort($katalogi);                    
                }
            }
            $dane = scandir($dir, $sortuj);
            foreach($dane as $wartosc){
                if($wartosc != '.' && $wartosc != '..')
                   if(is_file($dir."/".$wartosc)){
                       $pliki[] = $wartosc;
                   }else{
                       $katalogi[] = $wartosc;
                   }
            }
            echo "<p>Pliki</p>";
            echo "<ul>";
            foreach($pliki as $wartosc)
                echo "<li>$wartosc<a href=\"3_tworzenie_katalogow.php?usunP=$wartosc\">usuń</a></li>";
            echo "</ul><hr>";
            echo "<p>Foldery</p>";
            echo "<ul>";
            
            foreach($katalogi as $wartosc){ //usuwanie katalogó jeszcze
                echo "<li>$wartosc <a href=\"3_tworzenie_katalogow.php?usunK=$wartosc\">usuń</a></li>";
                
            }
            echo "</ul><hr>";
        }
    ?>    
    <a href="3_tworzenie_katalogow.php?sortuj=0">Sortuj malejąco</a>
    <a href="3_tworzenie_katalogow.php?sortuj=1">Sortuj rosnąco</a>
</body>
</html>