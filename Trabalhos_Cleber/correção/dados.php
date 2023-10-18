<?php 

include ("functions.php");

$nome = $_POST['txtNome'];
$n1 = $_POST['txtNota1'];
$n2 = $_POST['txtNota2'];
$n3 = $_POST['txtNota3'];
$n4 = $_POST['txtNota4'];

$resultado = media($n1, $n2, $n3, $n4);

echo verificaMedia($resultado);
?>