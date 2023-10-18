<?php 
   include("conecta.php");
   include("banco-produto.php");
?>
<?php 

$nome = $_POST["nome"];
$estoque = $_POST["estoque"];

if(insereProduto($conexao, $nome, $estoque)){
?>    
<p class="text-success">0 produto <?= $nome; ?>
 adicionado com sucesso!</p>
<?php }
else {
    $msg = mysqli_error($conexao);
    ?>
    <p class="text-danger">0 produto <?= $nome; ?>
     não foi adicionado: <?= $msg ?></p>
    <?php
}
?>


