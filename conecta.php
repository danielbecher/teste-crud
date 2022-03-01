<?php

// Cria o objeto de conexão ao MySQL
try {
    //Conecta com o banco de dados
    $conectabanco = new PDO("mysql:host=localhost; dbname=empresa", "root", "");
} catch (PDOException $erro) {
    //Exibe mensagem de erro caso aconteça
    echo 'Erro ao conectar com o banco de dados: ' . $erro->getMessage();
}