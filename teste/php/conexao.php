<?php
$servername = "localhost";
$username = "root"; // O nome de usuário do MySQL
$password = "";     // A senha do MySQL
$dbname = "paz"; // Nome do seu banco de dados

// Criar conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar conexão
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
?>
