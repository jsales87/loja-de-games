<?php

require_once 'conect.php';


$sql = "SELECT id, nome, telefone, email FROM cliente";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Nome: " . $row["nome"]. " <br>Telefone: " . $row["telefone"]. "<br>Email: " . $row["email"]. $row["data"]. $row["sexo"]. $row["cpf"]"<br>

        <a href=excluir_cliente.php?id=". $row["id"].">X</a>
        <br>

		<a href=atualizar_cliente.php?id=". $row["id"].">Atualizar</a>
<br><br>
        ";
    }
} else {
    echo "Não existe cliente no seu banco de dados";
}

mysqli_close($conn);
?>
