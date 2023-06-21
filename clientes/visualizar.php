<?php 

include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";
$id = $_GET["id"];

$nome = "";
$uf = "";
$email = "";
$cep= "";
$telefone= "";
$cpf= "";



$sql = "select * from funcionarios where id = $id";
$todos_os_funcionarios = mysqli_query($conexao, $sql);
while ($um_funcionario = mysqli_fetch_assoc($todos_os_funcionarios)):

    $nome = $um_funcionario ["nome"];
    $email = $um_funcionario["email"];
    $cep = $um_funcionario ["cep"];
    $telefone = $um_funcionario ["telefone"];
    $cpf = $um_funcionario ["cpf"];
    $uf = $um_funcionario["uf"];
    
    endwhile
?>

<h1> Ficha de funcionário</h1>

Nome completo do funcionário:  <?php echo $nome ?> <br>
Email:  <?php echo $email ?> <br>
CEP: <?php echo $cep ?> <br>
Telefone: <?php echo $telefone ?> <br>
CPF: <?php echo $cpf ?> <br>
UF: <?php echo $uf ?> <br>

<?php 
mysqli_close($conexao);
include "../includes/rodape.php";
?>
