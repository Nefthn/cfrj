<?php 
// Faça um algoritmo para imprimir 10 vezes o nome do professor Rogério.

$nome = $_POST['Nometxt'];
 $n = 0;

while ($n <= 9 ){
    echo "<br>";
    echo $nome;
    $n++;
}
?>