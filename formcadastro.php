<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/estilos.css">
    <title>Cadastrar novo</title>
</head>
<body>
    <div class="container">
        <a href="index.php"><img class="home__banner" src='./assets/img/banner.png'></a>
        <form class="formulario" action="cadastrarfuncionario.php" method="POST">
           <p>Nome:</p><input class="formulario__input" type="text" name="nome" id="nome" placeholder="João da Silva" required>
           <p>Data de Nascimento:</p> <input class="formulario__input" type="date" name="nasc" id="nasc" placeholder="10/10/1980" required>
           <p>CPF:</p> <input class="formulario__input" type="text" name="cpf" id="cpf" placeholder="12345678910" required>
           <p>E-mail:</p> <input class="formulario__input" type="email" name="email" id="email" placeholder="nome@email.com" required>
           <p>Estado Civil:</p> <input class="formulario__input" type="text" name="civil" id="civil" placeholder="Solteiro/casao" required>
           <input class="formulario__input--botao" type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>