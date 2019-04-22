<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Pliki i foldery - sortowanie</title>
</head>
<body>
  <form>
    <p>Dodaj folder<br>
      <input type="text" name="folder" />
      <input type="submit" name="przyciskF" value="Dodaj folder" />
    </p>
  </form>

  <form>
    <p>Dodaj plik<br>
      <input type="text" name="plik" />
      <input type="submit" name="przyciskP" value="Dodaj plik" />
    </p>
  </form>
  <hr>
  <?php

    if(isset($_GET['usunK'])){
      $usunK = $_GET['usunK'];
      if(file_exists("./test/$usunK"))
      rmdir("./test/$usunK");
    }

    if(isset($_GET['usunP'])){
      $usunP = $_GET['usunP'];
      if(file_exists("./test/$usunP"))
      unlink("./test/$usunP");
    }

//dodanie foldery

    if(isset($_GET['przyciskF']) && !empty($_GET['folder'])){
      $folder = $_GET['folder'];
      if(!file_exists("./test/$folder")){
        mkdir("./test/$folder");
      }else{
        echo "<h4>Folder o nazwie $folder ju¿ istnieje<br>
              Podaj inn¹ nazwê</h4>";
      }
    }

//dodanie pliku

    if(isset($_GET['przyciskP']) && !empty($_GET['plik'])){
        $plik = $_GET['plik'];
        if(!file_exists("./test/$plik")){
          if($fd = fopen("./test/$plik", 'w')){
            if(file_exists("./test/$plik")){
              echo "<h3>Dodano plik o nazwie: $plik</h3>";
            }
            fclose($fd);
          }
        }else{
          echo "<h3>Plik o nazwie $plik ju¿ istnieje!<br>
                Podaj inn¹ nazwê</h3>";
        }
    }

    $dir = "./test";
    if(!($folder = opendir($dir))){
      exit("Nie mo¿na otworzyæ folderu");
    }else{
      $sortuj = 0;
      $pliki = array();
      $katalogi = array();

      $dane = scandir($dir, $sortuj);

      foreach ($dane as $wartosc) {
        if($wartosc != '.' && $wartosc != '..'){
          if(is_file($dir."/".$wartosc)){
            $pliki[] = $wartosc;
          }else{
            $katalogi[] = $wartosc;
          }
        }
      }

      closedir($folder);

      if(isset($_GET['sortuj'])){
        $sortuj = $_GET['sortuj'];
        if($sortuj == 0){
          sort($pliki);
          sort($katalogi);
        }else{
          rsort($pliki);
          rsort($katalogi);
        }
      }

      echo "<p>Pliki: <br>";
      echo "<ul>";
      foreach ($pliki as $wartosc) {
        echo "<li>$wartosc<a href=\"4_tworzeniePlikow.php?usunP=$wartosc\">Usuñ</a></li>";
      }
      echo "</ul>";
      echo "</p><hr>";
      echo "<p>Katalogi: <br>";
      foreach ($katalogi as $wartosc) {
        echo "<li>$wartosc<a href=\"4_tworzeniePlikow.php?usunK=$wartosc\">Usuñ</a></li>";
      }
      echo "</ul>";
      echo "</p>";
    }
   ?>
   <a href="4_tworzeniePlikow.php?sortuj=0">Sortuj malej¹co</a>
   <a href="4_tworzeniePlikow.php?sortuj=1">Sortuj rosn¹co</a>
</body>
</html>