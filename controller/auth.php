<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: ../views/login.php');
    exit;
}

require_once __DIR__ . '/../db/conexao.php';

if (!empty($_POST['email']) && !empty($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    echo "cadastrado";
} else {
    header('Location: ../views/login.php');
    exit;
}




