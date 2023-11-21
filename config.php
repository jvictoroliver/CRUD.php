<?php
define('HOST', 'localhost'); // Se o MySQL estiver na mesma máquina
define('USER', 'root'); // Nome de usuário do banco de dados
define('PASS', 'minas'); // Senha do banco de dados
define('BASE', 'bd_escola'); // Nome do banco de dados
$conn = new mysqli(HOST, USER, PASS, BASE);
?>
