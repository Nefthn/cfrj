<?php 


function media($n1, $n2, $n3, $n4){
    $media = ($n1 + $n2 + $n3 + $n4) /4;
    return $media;
}

function verificarMedia($vari){
    if($vari >= 6){
        return "Aprovado!";
    }
    else{
        return "Reprovado!";
    }
}


?>