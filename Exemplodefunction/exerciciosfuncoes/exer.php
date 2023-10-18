<?php 

function valorparcela($valor, $qtdeParc){
    $resultado = $valor / $qtdeParc;
    return $resultado;
}

function tabuada ($numero, $limite){
    $resultado = 0;
    for ($i = 0; $i <= $limite; $i++){
        $resultado = $resultado . ($numero . " x " . $i . " = " . ($numero * $i) . "<br>");
    }
    return $resultado; 
}



?>