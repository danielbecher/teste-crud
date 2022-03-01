<?php
include_once 'conecta.php';

$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
$consulta = $conectabanco->query("SELECT * from funcionarios WHERE id = '$id'");
$linha = $consulta->fetch(PDO::FETCH_ASSOC);

?>

<form action="editafuncionario.php" method="POST">
    <label>Nome: <input type="text" name="nome" id="nome" value="<?php echo $linha['nome']?>"><br>
    <label>Data de Nascimento: <input type="text" name="nasc" id="nasc"value="<?php echo $linha['nasc']?>"><br>
    <label>CPF: <input type="text" name="cpf" id="cpf" value="<?php echo $linha['cpf']?>"><br>
    <label>E-mail: <input type="text" name="email" id="email" value="<?php echo $linha['email']?>"><br>
    <label>Estado Civil: <input type="text" name="civil" id="civil" value="<?php echo $linha['civil']?>"><br>
    <input type="hidden" name="id" value="<?php echo $linha['id'] ?>">
    <input type="submit" value="Salvar">
</form>

