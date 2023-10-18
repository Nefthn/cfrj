<?php 

$tipo = $_POST['Txttipo'];
$valor = $_POST['Txtvalor'];

switch ($tipo){
    case 1:
        $resultado= $valor * 1.03;
        echo "O valor após o investimento é: " . $resultado;
        break;

        case 2:
            $resultado= $valor * 1.04;
            echo "O valor após o investimento é: " . $resultado;
            break;
            
}


?>