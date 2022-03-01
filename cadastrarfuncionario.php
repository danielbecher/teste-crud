<?php
include_once "validarcpf.php";
//Importa a biblioteca de conexão ao DB.
include_once "conecta.php";

try {
    $cpf = validaCPF($_POST['cpf']);
    // Verifica a resposta da função e exibe na tela
    if($cpf == true){
        echo "CPF VDDR!";
    }
    elseif ($cpf == false){
        echo "CPF FALSO";
    }
} catch(PDOException $erro) {
    echo "CPF FALSO!";
}

try {
    $nome = filter_var($_POST['nome']);
    $nasc = filter_var($_POST['nasc']);
    $cpf = filter_var($_POST['cpf']);
    $email = filter_var($_POST['email']);
    $civil = filter_var($_POST['civil']);

    $inserir = $conectabanco->prepare('INSERT INTO funcionarios (nome,nasc,cpf,email,civil) VALUES (:nome, :nasc, :cpf, :email, :civil)');
    $inserir->bindParam(':nome', $nome);
    $inserir->bindParam(':nasc', $nasc);
    $inserir->bindParam(':cpf', $cpf);
    $inserir->bindParam(':email', $email);
    $inserir->bindParam(':civil', $civil);
    $inserir->execute();

    header("location: index.php");

} catch(PDOException $erro) {
    echo 'Erro: ' . $erro-> getMessage();
}

?>