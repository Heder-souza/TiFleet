<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {//verificação de entrada somente fazendo o login
    header('Location: ../views/login.php');
    exit;
}

require_once __DIR__ . '/../db/conexao.php';

session_start();

if (!empty($_POST['email']) && !empty($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios where email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
      "email" => $email  
    ]);

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$usuario || !password_verify($senha, $usuario['senha'])) {
        echo "email ou senha incorretos";
    }else{

        session_regenerate_id(true);

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['email'] = $usuario['email'];
        $_SESSION['perfil'] = $usuario['perfil'];

        if ($usuario['perfil'] == 'admin'){
            header('Location: ../views/adms/index.php');
            exit;
        }elseif($usuario['perfil'] == 'comum'){
            header('Location: ../views/usuarios/index.php');
            exit;
        }else{
            $_SESSION = [];
            session_destroy();

            header('Location: ../views/login.php');
            exit;
        }
    }

} else {
    header('Location: ../views/login.php');
    exit;
}




