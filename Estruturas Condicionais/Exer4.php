<?php 

$nota = $_POST['Notatxt'];

if ($nota >= 10  ){
    echo $nota . " BOOOMMM vai ganhar uma mamada do ADM" . "<br>";
}
else if ($nota >= 7 && $nota <= 9 ){
    echo $nota . " REGULAR, talvez você ganhe uma mamada do ADM" . "<br>";
}
else if ($nota <= 6){
    echo $nota . " INSATISFATORIO, você não vai ganhar uma mamada do adm" . "<br>";
}
?>