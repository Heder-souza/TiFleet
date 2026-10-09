<?php

$senha = 'Admin123';

$hash = password_hash($senha, PASSWORD_DEFAULT);

echo $hash;