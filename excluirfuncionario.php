<?php

//Importa a biblioteca de conexão ao DB.
include_once "conecta.php";

try {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    $deletar = $conectabanco->prepare("DELETE FROM funcionarios WHERE id = :id");
    $deletar->bindParam(':id', $id);
    $deletar->execute();

    header("location: index.php");

} catch(PDOException $erro) {
    echo 'Erro: ' . $erro-> getMessage();
}

?>