<?php 
$num = $_POST['Numtxt'];
$num2 = $_POST['Num2txt'];
$num3 = $_POST['Num3txt'];

if($num >= $num2 && $num >= $num3){
    echo "$num é maior!";
}
else if ($num2 >= $num && $num2 >= $num3){
    echo "$num2 é maior!";
}
else if ($num3 >= $num && $num3 >= $num2){
    echo "$num3 é maior!";
}

?>