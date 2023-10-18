<?php 
$nome= $_POST ['Nometxt'];

$idade= $_POST ['Numtxt'];

if ($idade >= 18) {
    echo $nome . " Pode obter uma carteira para dirigir";
}
 else {
    echo $nome . " Não pode obter uma carteira para dirigir";
 }


?>