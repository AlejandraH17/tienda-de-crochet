<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['usuario'], $_POST['email'], $_POST['contrasena'])) {
        $usuario = trim($_POST['usuario']);
        $email = trim($_POST['email']);
        $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);

$verificar = $conn->prepare("SELECT * FROM usuarios WHERE usuario = ?");
$verificar->bind_param("s", $usuario);  
$verificar->execute();
$verificar->store_result();

if ($verificar->num_rows > 0) {
    echo "El usuario ya existe. <a href='index.html'>Volver al inicio</a>";
    $verificar->close();
    exit;
} 
$verificar->close();

$sql = "INSERT INTO usuarios (usuario, email, contrasena) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $usuario, $email, $contrasena);

 if ($stmt->execute()) {
        echo "Registro exitoso. <a href='index.html'>Volver al inicio</a>";
    } else {
        echo "Error al registrar: El usuario ya existe. $stmt->error <a href='index.html'>Volver al inicio</a>";
    }
    
$stmt->close();
$conn->close();

}
}    
?>  