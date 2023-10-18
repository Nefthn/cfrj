<?php 
$num = $_POST['Numtxt'];
$n= 1;

do {
    echo $n * $num;
    echo '<br>';
    $n++;
} while ($n <= 10);


?>