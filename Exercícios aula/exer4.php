<?php 
$idade = $_POST['Idadetxt'];
if($idade >= 5 && $idade <= 10){
    echo "Sua categoria é infantil";
}
else if($idade >= 11 && $idade <= 15){
    echo "Sua categoria é Juvenil";
}
else if($idade >= 16 && $idade <= 20){
    echo "Sua categoria é Junior";
}
else if($idade >= 21 && $idade <= 25){
    echo "Sua categoria é Profissional";
}



?>