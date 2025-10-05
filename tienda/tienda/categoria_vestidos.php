<?php
include 'conexion.php';

$sql = "SELECT nombre, imagen, precio FROM productos WHERE categoria = 'Vestidos y Conjuntos'";
$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Trajes de Baño</title>
  <style>
    body {
      margin: 0;
      font-family: 'Trebuchet MS', sans-serif;
      background-color: #fffaf5;
    }

    h2 {
      text-align: center;
      padding: 30px 0 10px;
      color: #523500ff;
    }

    .productos {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
      padding: 20px 40px 60px;
    }

    .producto {
      width: 220px;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      background-color: #fff;
      overflow: hidden;
      text-align: center;
      transition: transform 0.3s ease;
    }

    .producto img {
      width: 100%;
      height: 220px;
      object-fit: cover;
    }

    .producto h3 {
      margin: 10px 0 5px;
      font-size: 16px;
      color: #523500ff;
    }

    .producto p {
      margin: 0 0 10px;
      font-size: 14px;
      color: #a86f5a;
    }

    .producto:hover {
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <h2>Vestidos y Conjuntos</h2>
  <div class="productos">
    <?php
    if (mysqli_num_rows($resultado) > 0) {
      while($fila = mysqli_fetch_assoc($resultado)) {
        echo '<div class="producto">';
        echo '<img src="imagenes/' . $fila['imagen'] . '" alt="' . $fila['nombre'] . '">';
        echo '<h3>' . $fila['nombre'] . '</h3>';
        echo '<p>$' . number_format($fila['precio'], 2) . '</p>';
        echo '</div>';
      }
    } else {
      echo '<p style="text-align:center; color:#a86f5a;">No hay productos disponibles en esta categoría.</p>';
    }
    ?>
  </div>
</body>
</html>