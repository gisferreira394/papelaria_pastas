<?php 

include "../includes/cabecalho.php";
include "../includes/menu.php";
?>

<h1> Novo funcionário</h1>

<p> Vamos cadasttrar um novo funcionário no sistema.</p>

<form action="inserir.php" method="post">

Nome: <input name ="nome" require maxlength="50">
<br>

Email: <input name ="email" require maxlength="50">
<br>

Senha: <input name ="senha" require maxlength="50">
<br>

CEP: <input name ="cep" require maxlength="50">
<br>

Telefone: <input name ="telefone" require maxlength="50">
<br>

CPF: <input name ="cpf" require maxlength="50">
<br>

UF: <input name ="uf" require maxlength="50">
<br>

<button type="submit"> Salvar</button>
</form>

<?php 
include "../includes/rodape.php";
?>