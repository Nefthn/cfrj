<?php
  include_once("exer.php");

  $valor = $_POST['txtValorParcela'];
  $qtdParcelas = $_POST['txtqtdParcelas'];
  $tabuada = $_POST['txtValorTabuada'];
  $limite = $_POST['txtLimite'];

  $v1 = valorParcela($valor, $qtdParcelas);

  $resulTabuada = tabuada($tabuada, $limite);

  echo $v1;
  echo "<br>";
  echo $resulTabuada;



?>