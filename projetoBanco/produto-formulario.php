<?php
include("conecta.php");
?>
<h1>Formulário de cadastro</h1>
<form action="adiciona-produto.php" method="post">
    <table class="table">
        <tr>
            <td>Nome</td>
            <td><input type="text" name="nome" /></td>
        </tr>

        <tr>
            <td>Estoque</td>
            <td><input type="text" name="estoque" /></td>
        </tr>

        <tr>
            <td><input type="submit" value="Cadastrar">0</input></td>
        </tr>
 </table>
</form>