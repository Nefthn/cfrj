<?php 

include ("function.php");

$n1 =$_POST['txtNota1'];
$n2 =$_POST['txtNota2'];
$n3 =$_POST['txtNota3'];
$n4 =$_POST['txtNota4'];

echo somarNotas($n1, $n2, $n3, $n4);

echo verificaMedia($n1, $n2, $n3, $n4);
/*
$media = somarNotas($n1, $n2, $n3, $n4); 
echo verificaMedia($media);
*/
?>