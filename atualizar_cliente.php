<meta charset="utf-8">
<?php

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$data = $_POST['data'];
$sexo = $_POST['sexo'];
$cpf = $_POST['cpf'];

require_once'conect.php';

$sql = "UPDATE cliente SET nome='$nome' SET email='$email' SET telefone='$telefone' SET data='$data' SET sexo='$sexo' SET cpf='$cpf'WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "Dados atualizados com sucesso!";
} else {
    echo "Erro ao atualizar os dados" . mysqli_error($conn);
}
echo"<br><br><a href=visualizar_cliente.php>Visualizar Clientes</a>
        <br>";

mysqli_close($conn);
?>
<br><br>


