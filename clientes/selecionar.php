<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";
?>

<h1>
<img src="../img/paletaa.png" width="50">    
Módulo de Funcionário
</h1>

<p>
<a href="novo.php"> Adicionar Funcionário </a>
</p>

<h2> Listagem de funcionários </h2>
<table border ="1">

<tr> 
<td>ID</td>
    <td>Nome</td>
    <td>Email</td>
    <td>Senha</td>
    <td>CEP</td>
    <td>Telefone</td>
    <td>CPF</td>
    <td>UF</td>
    <td>Ações</td>

</tr>
<!-- fim da linha dde título --->
<?php
$sql = "select * from t_funcionarios";
$todos_os_funcionarios = mysqli_query($conexao, $sql);
while($um_funcionario = mysqli_fetch_assoc($todos_os_funcionarios)):

?>

<tr>
    <td> <?php echo $um_funcionario ['id'];?></td>
    <td><?php echo $um_funcionario ['nome'];?></td>
    <td><?php echo $um_funcionario ['email'];?></td>
    <td><?php echo $um_funcionario ['senha'];?></td>
    <td><?php echo $um_funcionario ['cep'];?></td>
    <td><?php echo $um_funcionario ['telefone'];?></td>
    <td><?php echo $um_funcionario ['cpf'];?></td>
    <td><?php echo $um_funcionario ['uf'];?></td>

    <td>
        <a href="visualizar.php?id=<?php echo $um_funcionario["id"];?>" title="Ver completo">
        <img src="../img/visualizar.png" width="15" title="Visualizar funcionários"></a>

        <a href="editar.php ?id=<?php echo $um_funcionario["id"];?>"> 
        <img src="../img/editar.png" width="15" title="Editar dados do funcionário"></a>

        <a href="deletar.php?id=<?php echo $um_funcionario['id'];?>"> 
        <img src="../img/excluir.png" width="15" title="Excluir funcionário"></a>
    </td>
</tr>
<?php
endwhile;
?>
</table>

<?php
include "../includes/rodape.php";
?>

