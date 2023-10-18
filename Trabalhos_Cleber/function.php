<?php 

function somarNotas($n1, $n2, $n3, $n4){
    $media = ($n1 + $n2 + $n3 + $n4)/4;
    return $media;
}

function verificaMedia($n1, $n2, $n3, $n4){
    $media = ($n1 + $n2 + $n3 + $n4)/4;
    if($media >= 6){
        echo "Aprovado";
    }
    else{
        echo "reprovado";
    }
}


?>