<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "task_manager";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexão falhou". $conn -> connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if($conn ->query($sql) === FALSE){
    echo "Erro ao criar tabela: " . $conn -> error;
}

