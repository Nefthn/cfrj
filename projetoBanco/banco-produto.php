<?php 
function insereProduto($conexao, $nome, $estoque){
    $query = "insert into produtos(nome, estoque)
    values ('{$nome}', $estoque)";
    return mysqli_query($conexao, $query);
}

function listaProdutos($conexao){
    $produtos = array();

    $resultado = mysqli_query($conexao, "select * from produtos");

    while($produto = mysqli_fetch_assoc($resultado)){
        array_push($produtos, $produto);
    }

    return $produtos;
    
}
  function removeProdutos($conexao, $id){
    $query = "delete from produtos where id = {$id}";
    return mysqli_query($conexao, $query);
  }

  function alteraProduto($conexao, $id, $nome) {
    $query = "uptade produtos set nome = '{$nome}'
    where id = '{$id}'";
    return mysqli_query($conexao, $query);
  }

?>