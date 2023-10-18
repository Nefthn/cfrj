<?php 

$num = $_POST['Numtxt'];
$num2 = $_POST['Num2txt'];
$num3 = $_POST['Num3txt'];

if($num >= 50 ){
    echo $num . "ele é maior que 50" . "<br>";
}

if($num2 >= 50){
    echo $num2 . "ele é maior que 50" . "<br>";
}
if($num3 >= 50){
    echo $num3 . "ele é maior que 50" . "<br>";
}
if($num <= 2){
    echo $num . "ele é menor 2" . "<br>";
}
if($num2 <= 2){
    echo $num2 . "ele é menor 2" . "<br>";
}
if($num3 <= 2){
    echo $num3 . "ele é menor 2" . "<br>";
}
?>