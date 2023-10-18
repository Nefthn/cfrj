<?php 


function exerciciod($numInicial, $numFinal){
    $contadora = 0;

    for($i = $numInicial; $i <= $numFinal; $i++){
        if($i % 2 <> 0){
            $contadora++;
        }
    }
    return $contadora++;
}



?>