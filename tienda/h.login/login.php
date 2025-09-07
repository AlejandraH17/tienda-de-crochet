<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['usuario'], $_POST['contrasena'])) {
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];

$sql = "SELECT contrasena FROM usuarios WHERE usuario = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->bind_result($hash);
    $stmt->fetch();
    
    if (password_verify($contrasena, $hash)) {
        echo "Inicio de sesión exitoso, $usuario.  <a href='index.html'>Ir al inicio</a>";
        } else {
        echo "Contraseña incorrecta. <a href='index.html'>Volver al inicio</a>";
    } } else {
    echo "Usuario no encontrado. <a href='index.html'>Volver al inicio</a>";
    }
$stmt->close();
$conn->close();

} else {
        echo "Faltan datos del formulario. <a href='index.html'>Volver al inicio</a>";
    }
} else {
    echo "Acceso inválido. <a href='index.html'>Volver al inicio</a>";
}
?>     