<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src='./assets/img/banner.png'>
    <?php

    //Importa a biblioteca de conexão ao DB.
    include_once "conecta.php";

    try{
        //executa a consulta
        $consulta = $conectabanco -> query("SELECT * FROM funcionarios");
        echo "<a href='formcadastro.php'>Novo funcionário</a><br><br>Listagem de funcionários";
        echo "<table border='1'><tr><td>ID</td><td>Nome</td><td>CPF</td><td>Data Nascimento</td><td>E-mail</td><td>Estado Civil</td><td>Ações</td></tr>";

        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr><td>$linha[id]</td><td>$linha[nome]</td><td>$linha[nasc]</td><td>$linha[cpf]</td><td>$linha[email]</td><td>$linha[civil]</td><td><a href='formeditar.php?id=$linha[id]'>Editar</a></td><td><a href='excluirfuncionario.php?id=$linha[id]'>Excluir</a></td></tr>";
        }

        echo "</table>";
        echo $consulta->rowCount() . "registros encontrados";

    } catch(PDOException $erro) {
        echo $erro-> getMessage();
    }
    ?>
    
</body>
</html>