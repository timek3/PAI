<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Obiekty</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php
        require_once('./class/samochod.php');
    
        $auta = array();
        for($i=0;$i<5;$i++){
            $auta[$i] = new Samochod("Polska");
        }
        $auta[0] ->marka = "Opel";
        $auta[0] ->model = "Omega";
        $auta[1] ->marka = "Fiat";
        $auta[1] ->model = "126p";
    
        echo "<pre>";
      //  print_r($auta);
        echo "</pre>";
    
    
    ?>
    <table>
    <tr>
        <th>Marka</th>    
        <th>Model</th>    
        <th>Produkcja</th>    
        <th>Ilość kół</th>        
    </tr>
        <?php
            foreach($auta as $auto){
                if(!empty($auto->marka) && !empty($auto->model)){
                echo "<tr>";
                echo "<td>$auto->marka</td>";
                echo "<td>$auto->model</td>";
                echo "<td>$auto->produkcja</td>";
                echo "<td>$auto->iloscKol</td>";
                echo "</tr>";
            }
            }
        ?>
    </table>
</body>
</html>