<?php 
   Class Aluno{
    //public $nome;
       private $nome;
  
       //set é para atribuir o valor
      public function setNome($value){
      $this->$nome = $value;
      }
       //get é para pegar o valor
       public function getNome(){
        return $this->$nome;
       }
 }


?>