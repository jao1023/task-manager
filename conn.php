<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "task_manager";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexão falhou". $conn -> connect_error);
}

