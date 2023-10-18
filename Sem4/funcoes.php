<?php

//public function calcularFatorial(){}
function calcularFatorial($valor){
    $resultado = 1;

// if($valor == 0){
//    $resultado = 1;
// }else{

 
    for($i = $valor; $i >=1; $i--){
        $resultado *= $i;
        //$resultado = $resultado * $i;

    }
// }
    return $resultado;
}

function retornarMaior($n1, $n2, $n3, $n4){
if($n1 > $n2 && $n1 > $n3 && $n1 > $n4){
    return $n1;
}else if($n2 > $n1 && $n2 > $n3 && $n2 > $n4){
    return $n2;
}else if($n3 > $n1 && $n3 > $n2 && $n3 > $n4){
    return $n3;
    //return
}else if($n4 > $n1 && $n4 > $n2 && $n4 > $n3){
    return $n4;
}
}
function calcularAreaTriangulo($base, $altura){
$resultado = ($base * $altura)/2;
    
    return $resultado;
}

    //return


function calcularImc($peso, $altura){
$imc = $peso / ($altura * $altura);
if($imc <17){
    return "$imc - muito abaixo do peso";
}elseif($imc >17 && $imc < 18.49){
    return "$imc - abaixo do peso";
}elseif($imc > 18.5 && $imc < 24.99){
    return "$imc - peso normal";
}elseif($imc > 25 && $imc <29.99){
    return "$imc - acima do peso";
}elseif($imc > 30 && $imc < 34.99){
    return "$imc - obesidade 1";
}elseif($imc > 35 && $imc < 39.99){
    return "$imc -obesidade 2";
}elseif($imc > 40){
    return "$imc - obresidade 3";
 }
}


?>