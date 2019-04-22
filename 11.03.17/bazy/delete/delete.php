<?php
$id = $_GET['id'];

$polaczenie = @new mysqli('localhost','root','','przychodniate');
if(!$polaczenie->connect_errno){
 $sql =   "DELETE FROM `pacjenci` WHERE `pacjenci`.`id` = $id";
    if($rezultat = $polaczenie->query($sql))
$polaczenie->close();
    header('location:./pacjent.php');
      //  echo "wyjebaliśmy frajera o id $id";
    
}else{
    echo "błąd";
}










?>