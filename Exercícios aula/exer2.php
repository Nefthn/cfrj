<?php 
$num = $_POST['Numtxt'];
  if($num % 2 == 0){
    echo "$num, é par!";
  }
  else{
    echo "$num, é ímpar!";
  }

?>