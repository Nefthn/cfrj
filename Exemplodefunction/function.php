<?php 
echo "Chamando uma função";
minha_funcao();
echo "fim";
minha_funcao();
function minha_funcao(){
    echo "<br>";
    for ($cont=0; $cont<5; $cont++){
        echo "o quadrado de $cont = ".$cont*$cont . "<br>";
    }
}




?>