<?php 
     include("funcoes.php");
    
     $base = $_POST ['txtBase'];
     $altura = $_POST ['txtAltura'];

     echo calcularAreaTriangulo($base, $altura);
?>