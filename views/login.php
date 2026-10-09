<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="../controller/auth.php" method="POST">
        <label for="email">email</label>
        <input type="email" name="email" id="email" required>
        <label for="senha">senha</label>
        <input type="password" name="senha" id="senha" required>
        <input type="submit" value="entrar">
    </form>
</body>
</html>

