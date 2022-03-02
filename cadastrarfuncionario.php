<?php
//Importa a biblioteca de conexão ao DB.
include_once "conecta.php";
include_once "validarcpf.php";

try {
    $nome = filter_var($_POST['nome']);
    $datanasc = filter_var($_POST['nasc']);
    $nasc = implode("-",array_reverse(explode("/",$datanasc)));
    $cpf = filter_var($_POST['cpf']);   
    $email = filter_var($_POST['email']);
    $civil = filter_var($_POST['civil']);

    if (validaCPF($cpf) == true) {
        $inserir = $conectabanco->prepare('INSERT INTO funcionarios (nome,nasc,cpf,email,civil) VALUES (:nome, :nasc, :cpf, :email, :civil)');
        $inserir->bindParam(':nome', $nome);
        $inserir->bindParam(':nasc', $nasc);
        $inserir->bindParam(':cpf', $cpf);
        $inserir->bindParam(':email', $email);
        $inserir->bindParam(':civil', $civil);
        $inserir->execute();
        header("location: index.php");
    } else {
        header("location: cpfinvalido.php");
    }

} catch(PDOException $erro) {
    echo 'Erro: ' . $erro-> getMessage();
}

?>