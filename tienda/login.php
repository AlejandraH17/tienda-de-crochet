<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['usuario'], $_POST['contrasena'])) {
        $usuario = trim($_POST['usuario']);
        $contrasena = $_POST['contrasena'];

        $sql = "SELECT id, usuario, contrasena FROM usuarios WHERE usuario = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            
            if (password_verify($contrasena, $user['contrasena'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['usuario'];
                
                header("Location: categoria.php");
                exit();
            } else {
                $error = "Contraseña incorrecta";
            }
        } else {
            $error = "Usuario no encontrado";
        }
        
        $stmt->close();
    } else {
        $error = "Por favor complete todos los campos";
    }
}
$conn->close();
?>