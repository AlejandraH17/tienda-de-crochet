<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'login';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de Conexión: " . $conn->connect_error);
}
?>