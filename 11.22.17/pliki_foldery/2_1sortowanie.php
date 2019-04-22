<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pliki i foldery - sortowanie</title>
</head>
<body>
    <?php 
    //ulepszona wersja z podziałem na pliki i katalogi
    
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
                echo "<li>$wartosc</li>";
            echo "</ul><hr>";
            echo "<p>Foldery</p>";
            echo "<ul>";
            foreach($katalogi as $wartosc)
                echo "<li>$wartosc</li>";
            echo "</ul><hr>";
        }
    ?>
    <a href="2_1sortowanie.php?sortuj=0">Sortuj malejąco</a>
    <a href="2_1sortowanie.php?sortuj=1">Sortuj rosnąco</a>
</body>
</html>