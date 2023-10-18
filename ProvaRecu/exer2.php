<?php 


$lo = $_POST['Lotxt'];
$pro = $_POST['Protxt'];

echo $pro . "Reais, " . "Produto do "  ;


if($lo <= 1){
    echo "Sul";
    
}
else if($lo <= 2){
    echo "Norte";
}
else if($lo <= 3){
    echo "Leste";
}
else if($lo <= 4){
    echo "Oeste";
}
else if($lo >= 5 && $lo <=6){
    echo "Nordeste";
}
else if($lo >= 7 && $lo >= 8 && $lo<=9){
    echo "Sudeste";
}
else if($lo >= 10 && $lo <= 20){
    echo "Centro-Oeste";
}
else if($lo >= 25 && $lo <= 30){
    echo "Nordeste";
}
?>