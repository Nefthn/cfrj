<?php 

$num = $_POST['Numtxt'];
$num2 = $_POST['Num2txt'];
$num3 = $_POST['Num3txt'];

if ($num >= 120){
    echo $num . "SIM";
}
if ($num2 >= 120){
    echo $num2 . "talves";
}
if ($num3 >= 120){
    echo $num3 . "Nao";
}
?>

