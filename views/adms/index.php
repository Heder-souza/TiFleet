<?php

session_start();

if (!isset($_SESSION['id']) || !isset($_SESSION['perfil']) || $_SESSION['perfil'] != 'admin') {
    header('Location: ../../index.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dashboard Administrativo</h1>
</body>
</html>