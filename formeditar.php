<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/estilos.css">
    <title>Editar funcionário</title>
</head>
<body>
    <?php
    include_once 'conecta.php';

    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $consulta = $conectabanco->query("SELECT * from funcionarios WHERE id = '$id'");
    $linha = $consulta->fetch(PDO::FETCH_ASSOC);

    ?>
    <div class="container">
        <a href="index.php"><img class="home__banner" src='./assets/img/banner.png'></a>
        <form class="formulario" action="editafuncionario.php" method="POST">
            <p>Nome:</p><input class="formulario__input" type="text" name="nome" id="nome" value="<?php echo $linha['nome']?>"><br>
            <p>Data de Nascimento:</p><input class="formulario__input" type="date" name="nasc" id="nasc"value="<?php echo $linha['nasc']?>"><br>
            <p>CPF:</p><input class="formulario__input" type="text" name="cpf" id="cpf" value="<?php echo $linha['cpf']?>"><br>
            <p>E-mail:</p><input class="formulario__input" type="email" name="email" id="email" value="<?php echo $linha['email']?>"><br>
            <p>Estado Civil:</p><input class="formulario__input" type="text" name="civil" id="civil" value="<?php echo $linha['civil']?>"><br>
            <input type="hidden" name="id" value="<?php echo $linha['id'] ?>">
            <input class="formulario__input--botao" type="submit" value="Salvar">
        </form>
</body>
</html>