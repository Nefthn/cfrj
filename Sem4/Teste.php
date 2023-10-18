<?php 
   include("Aluno.php");

   //Construindo um objeto do tipo aluno
   $objAluno = new Aluno;
   // $objAluno = new Aluno(); está correta também
   //$objAluno->$nome = "Capitão Commando";
   $objAluno->setNome("Capitão Commando");
  echo $objAluno->getNome();

echo "<br>";

  $leticia = new Aluno();
  //$leticia->$nome = "Leticia";
  $leticia->setNome("Leticia");
  echo $leticia->getNome(); 
  
?>