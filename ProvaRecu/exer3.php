<?php 

$do = $_POST['Txtn'];
if($do <= 0){
    echo " Gripe, " . " Vitamina C";
}
else if($do <= 1){
    echo " Torcicolo, " . " Relaxante muscular";
}
else if($do <= 2){
    echo " Dor de cabeça, " . " Analgésico";
}
else if($do >= 3 &&  $do <=9999 ){
    echo "Inderteminado";
}






?>