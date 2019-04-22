<?php
// instrukcja if 

$x = 2;
$y = 4;
if ($x<$y){
    echo "zmienna x jest mniejsza od zmiennej y<br>";
}

if ($x<$y):
    echo "zmienna x jest mniejsza od zmiennej y<br>";
endif;

// if else

$a = 3;
$b = 2;
if ($a<$b){
    echo "zmienna a jest mniejsza od zmiennej b<br>";
} else {
    echo "zmienna a nie jest mniejsza od zmiennej b<br>";
}

if ($a<$b):
    echo "zmienna a jest mniejsza od zmiennej b<br>";
else:
    echo "zmienna a nie jest mniejsza od zmiennej b<br>";
endif; 

// instrukcja else if

if($a<$b){ 
    echo "zmienna a jest mniejsza od zmiennej b<br>";
} else if ($a==$b){
    echo "zmienna a jest równa zmiennej b<br>";   
}else {
    echo "zmienna a nie jest mniejsza od zmiennej b<br>";
}
if($a<$b):
    echo "zmienna a jest mniejsza od zmiennej b<br>";
elseif ($a==$b):
    echo "zmienna a jest równa zmiennej b<br>";   
else:
    echo "zmienna a nie jest mniejsza od zmiennej b<br>";
endif;

// *****************************************************************************
// instrukcja switch

$a =5;
switch($a){
    case 0:     echo "zmienna a = 0<br>";
                break;
    case 5:     echo "zmienna a = 5<br>";
                break;
    case 10:    echo "zmienna a = 10<br>";
                break;
}
switch($a):
    case 0:     echo "zmienna a = 0<br>";
                break;
    case 5:     echo "zmienna a = 5<br>";
                break;
    case 10:    echo "zmienna a = 10<br>";
                break;
endswitch;

//*******************************************************************************
// pętla for
    
    for($i=0; $i<=10; $i++){
        echo "$i ";
    } 
    for($i=0; $i<=10; $i++):
        echo "$i ";
    endfor;
    echo "<br><br>";

    $tab = array(1,2,3,4,5);

    foreach($tab as $key => $value){
        echo "$tab[$key] = $value   ";
    }

echo "<br><br>";


foreach($tab as $key => $value):
        echo "$tab[$key] = $value   ";
    endforeach;

echo "<br><br>";

//while

$i=3;

while ($i<=10){
    echo "$i ";
        $i++;
}

echo "<br><br>";
$i=3;
while ($i<=10):
    echo "$i ";
        $i++;
endwhile;


echo "<br><br>";

//break

for($i=1; ;$i++):
    echo "Zmienna i wynosi: $i <br>";
    if($i == 5):
        break;
    endif;
endfor;

//*****************************************************

//continue kończy przebieg aktualnej pętli

for($i=1; $i<10; $i++):
    if($i%2!=0)
        continue;
    echo $i;

endfor;





























?>