<?php

function retornaMaior($num1, $num2){
    if ($num1 > $num2){
        return $num1;
    }
    else{
        return $num2;
    }
}

//2
//get - pegar valor 
//set - atribui valor

//<?php 
include ("funcoes.php"); //incluindo todas as funcionalidades do arquivo funcoes.php, depois desse include elas podem ser utilizadas aqui

$base = $_post ['txtBase']; // declarando uma variável de nome base, que recebe o valor que vem de um formulário via post.
$altura = $_post['txtAltura'];// declarando uma variável de nome altura, que recebe o valor que vem de um formulário via post.

 echo calculaAreaTriangulo($base, $altura);
//está imprimindo o resultado da função de nome calcularAreaTriangulo e está passando dois parâmetros para essa função: base e altura.

//4
$obj = new Carro();
obj -> setCor('azul');

//ou

$obj = new Carro('vermelho');

//5
//Construtor vazio
$obj = new Carro()/
//Construtor cheio
$obj = new Carro ('Amarela');

//6
//Private
//porque o encapsulamento utiliza os atributos privados e com os métodos de acesso


?>