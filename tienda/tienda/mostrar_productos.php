<?php
include("conexion.php");
if (!$conexion) {
    die("La conexión no se estableció correctamente.");
}

$sql = "SELECT imagen FROM productos WHERE id IN (4, 13, 20)";
$resultado = $conexion->query($sql);

if ($resultado && $resultado->num_rows > 0) {
    echo '<div class="productos">';

    while ($producto = $resultado->fetch_assoc()) {
        $rutaImagen = "imagenes/" . $producto['imagen'];

        echo '<div class="producto">';
        echo '<img src="' . $rutaImagen . '" alt="' . $producto['imagen'] . '">';
        echo '</div>';
    }

    echo '</div>';
} else {
    echo '<div class="productos"><p>No hay productos disponibles.</p></div>';
}
?>
