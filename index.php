<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/estilos.css">
    <title>Cadastro de Funcionários</title>
</head>
<body>
    <div class="container">
        <a href="index.php"><img class="home__banner" src='./assets/img/banner.png'></a>
        <?php
            //Importa a biblioteca de conexão ao DB.
            include_once "conecta.php";
            
            try{
                //executa a consulta
                $consulta = $conectabanco -> query("SELECT * FROM funcionarios");
                echo "<h1 class='home__titulo'> Listagem de funcionários</h1>";
                echo "<table class='home__tabela'><tr><td class='home__tabela--celula home__tabela--cabecalho'>ID</td><td class='home__tabela--celula home__tabela--cabecalho'>Nome</td><td class='home__tabela--celula home__tabela--cabecalho'>Data de Nascimento</td><td class='home__tabela--celula home__tabela--cabecalho'>CPF</td><td class='home__tabela--celula home__tabela--cabecalho'>E-mail</td><td class='home__tabela--celula home__tabela--cabecalho'>Estado Civil</td><td class='home__tabela--celula home__tabela--cabecalho'>Ações</td></tr>";

                while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr class='home__tabela--fora'><td class='home__tabela--celula'>$linha[id]</td><td class='home__tabela--celula'>$linha[nome]</td><td class='home__tabela--celula'>$linha[nasc]</td><td class='home__tabela--celula'>$linha[cpf]</td><td class='home__tabela--celula'>$linha[email]</td><td class='home__tabela--celula'>$linha[civil]</td><td class='home__tabela--celula'><a class='home__link--acoes' href='formeditar.php?id=$linha[id]'>Editar</a></td><td class='home__tabela--celula'><a class='home__link--acoes' href='excluirfuncionario.php?id=$linha[id]'>Excluir</a></td></tr>";
                }

                echo "</table>";
                echo "<p class='home__texto'>" . $consulta->rowCount() . " registros encontrados  </p> <a class='home__link--novofuncionario' href='formcadastro.php'>Adicionar funcionário</a>";

                } catch(PDOException $erro) {
                echo $erro-> getMessage();
            }
        ?>
    </div>
</body>
</html>