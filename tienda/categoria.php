<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.html");
    exit();
}

include ('conexion.php'); 
$categoria = [
  'Trajes de Baño' => ['id' => 17, 'enlace' => 'categoria_tdb.php'],
  'Vestidos y Conjuntos' => ['id' => 3, 'enlace' => 'categoria_vestidos.php'],
  'Escarpines' => ['id' => 5, 'enlace' => 'categoria_escarpines.php'],
  'Tops y Suéteres' => ['id' => 22, 'enlace' => 'categoria_tops.php'],
  'Sillas y algo más' => ['id' => 11, 'enlace' => 'categoria_sillas.php']
];

$favicon = "imagenes/logoN.png";
$res = mysqli_query($conexion, "SELECT imagen FROM iconos WHERE nombre = 'favicon'");
  if ($fila = mysqli_fetch_assoc($res)) {
      $favicon = "data:image/png;base64," . base64_encode($fila['imagen']);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Productos</title>
  <link rel="icon" href="<?php echo $favicon; ?>">
  <style>
    body {
      margin: 0;
      font-family: 'Trebuchet MS', sans-serif;
      background-color: #fffaf5;
    }

    .categorias {
      text-align: center;
      padding: 50px 20px;
    }

    .categorias h2 {
      font-size: 28px;
      color: #1e0829ff;
      margin-bottom: 30px;
    }

    .categorias2 {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    }

    .categoria {
    position: relative;
    width: 250px;
    height: 300px;
    overflow: hidden;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    text-decoration: none;
    transition: transform 0.3s ease;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    }

    .categoria img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 1;
    }

    .nombre-categoria {
    position: relative;
    z-index: 2;
    background-color: #2d0c3db3;
    color: #fff;
    font-size: 16px;
    text-align: center;
    padding: 10px;
    width: 100%;
    box-sizing: border-box;
    }

    .categoria span {
      position: absolute;
      bottom: 0;
      width: 100%;
      background-color: rgba(30, 8, 41, 0.7);
      color: #fff;
      padding: 10px;
      font-size: 16px;
      text-align: center;
    }

    .categoria:hover {
    transform: scale(1.05);
    }

    .categoria:hover img {
      transform: scale(1.1);
    }
    
    
    .menu {
    background-color: #1e0829ff;
    color: white;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    }

    .menu nav a {
      color: white;
      text-decoration: none;
      margin-right: 10px;
    }

    .cerrar {
      color: white;
      text-decoration: none;
      background-color: #d32f2f;
      padding: 5px 15px;
      border-radius: 4px;
      transition: background-color 0.3s;
    }

    .cerrar:hover {
      background-color: #b71c1c;
    }
 </style>
</head>


<body>
  <div class="menu">
    <span>Bienvenido a nuestra tienda, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
    <nav>
            <a href="producto.php">Inicio</a>
            <a href="#">Productos</a>
            <a href="#">Tienda</a>
            <a href="#">Contacto</a>
     </nav>
    <a href="logout.php" class="cerrar">Cerrar Sesión</a>
  </div>

  <section class="categorias">
    <h2>Selecciona la categoría de tu preferencia</h2>
    <div class="categorias2">
        <?php
        foreach ($categoria as $nombre => $datos) {
        $id = $datos['id'];
        $enlace = $datos['enlace'];

        $sql = "SELECT imagen FROM productos WHERE id = $id LIMIT 1";
        $resultado = mysqli_query($conexion, $sql);

        if ($fila = mysqli_fetch_assoc($resultado)) {
            echo '<a href="' . $enlace . '" class="categoria">';
            echo '<img src="imagenes/' . $fila['imagen'] . '" alt="' . $nombre . '">';
            echo '<div class="nombre-categoria">' . $nombre . '</div>';
            echo '</a>';
           }
        }
        ?>
    </div>
    </section>
</body>
</html>
