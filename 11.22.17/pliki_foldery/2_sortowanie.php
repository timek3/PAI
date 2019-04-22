<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pliki i foldery - sortowanie</title>
</head>
<body>
    <?php 
        $dir ="./test";
        if(!($folder = opendir($dir))){
            exit("nie można otworzyć");
        }else{
            $sortuj = 0;
            if(isset($_GET['sortuj'])){
                $sortuj = $_GET['sortuj'];
            }
            $dane = scandir($dir, $sortuj);
            echo "<ul>";
            foreach($dane as $wartosc){
                if($wartosc != '.' && $wartosc != '..')
                    echo "<li>$wartosc</li>";
            }
            echo "</ul>";
        }
    ?>
    <a href="2_sortowanie.php?sortuj=0">Sortuj malejąco</a>
    <a href="2_sortowanie.php?sortuj=1">Sortuj rosnąco</a>
</body>
</html>