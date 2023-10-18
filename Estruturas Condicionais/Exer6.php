<?php 


$idade = $_POST['Idadetxt'];
if($idade <= 1){
    echo "Sul";
}
else if($idade <= 2){
    echo "Norte";
}
else if($idade <= 3){
    echo "Leste";
}
else if($idade <= 4){
    echo "Oeste";
}
else if($idade >= 5 && $idade <=6){
    echo "Nordeste";
}
else if($idade >= 7 && $idade >= 8 && $idade <=9){
    echo "Sudeste";
}
else if($idade >= 10 && $idade <= 20){
    echo "Centro-Oeste";
}
else if($idade >= 21 && $idade <= 30){
    echo "Nordeste";
}
?>