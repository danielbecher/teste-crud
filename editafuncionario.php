<?php

//Importa a biblioteca de conexão ao DB.
include_once "conecta.php";

try {
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_var($_POST['nome']);
    $nasc = filter_var($_POST['nasc']);
    $cpf = filter_var($_POST['cpf']);
    $email = filter_var($_POST['email']);
    $civil = filter_var($_POST['civil']);

    $atualizar = $conectabanco->prepare("UPDATE funcionarios SET nome = :nome, nasc = :nasc, cpf = :cpf, email = :email, civil = :civil WHERE id = :id");
    $atualizar->bindParam(':id', $id);
    $atualizar->bindParam(':nome', $nome);
    $atualizar->bindParam(':nasc', $nasc);
    $atualizar->bindParam(':cpf', $cpf);
    $atualizar->bindParam(':email', $email);
    $atualizar->bindParam(':civil', $civil);
    $atualizar->execute();

    header("location: index.php");

} catch(PDOException $erro) {
    echo $erro-> getMessage();
}

?>