<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Otwieranie plik�w</title>
</head>
<body>
  <?php
    echo "Wolne miejse na partycji: "; //bajty
    $wolneMiejce = round((disk_free_space("/"))/(1024*1024),2);
    echo $wolneMiejce."MB<br>";
    echo "Wielko�� partycji: ";
    $partycja = round((disk_total_space("/"))/(1024*1024),2);
    echo $partycja."MB<br>";

    if(!$fd = fopen("./test/matura.txt", 'rb')){
      echo "Nie mog� otworzy� pliku matura.txt!";
    }else{
      $rozmiar = filesize("./test/matura.txt");
      $tekst =  fread($fd, $rozmiar);
      //echo fread($fd, 1000);
      fclose($fd);
    }
   ?>
   <br />
   <form>
     <textarea name="area"><?php
        echo $tekst;
       ?>
     </textarea><br />
     <input type="submit" name="przycisk" value="Zapisz" />
    </form>

  <?php
    if(isset($_GET['przycisk'])){
      $nowyTekst = $_GET['area'];
      //echo $nowyTekst;
      if($fd = fopen("./test/matura.txt",'wb')){
        if(fwrite($fd, $nowyTekst) === false){
          echo "B��d zapisu";
        }else{
          echo "Ci�g zosta� zapisany";
        }
      }else{
        echo "Nie mog� otworzy� pliku o nazwie matura.txt";
      }
    }
   ?>
</body>
</html>