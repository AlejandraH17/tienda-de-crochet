<?php
session_start();

include 'conexion.php';

$favicon = "imagenes/logoN.png";

$res = mysqli_query($conexion, "SELECT imagen FROM iconos WHERE nombre = 'favicon'");
if ($fila = mysqli_fetch_assoc($res)) {
    $favicon = "data:image/png;base64," . base64_encode($fila['imagen']);
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Contacto</title>
  <link rel="icon" href="<?php echo $favicon; ?>">
</head>
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
    .menu a.atras {
      color: #1e0829ff;
      text-decoration: none;
      background-color: #f3dbffff;
      padding: 5px 15px;
      border-radius: 4px;
      transition: background-color 0.3s;
    }
    .container {
    margin-top: 50px;
    background: rgb(225, 199, 238);
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    width: 300px;
    }
</style>    
<body>
    <div class="menu">
    <a href="javascript:history.back()" class="atras">⟵ Atrás</a>
    </div>

    <h2>Contáctanos</h2>

    <div class="container" style="display: flex; justify-content: center; margin: 50px 10;">
        <form method="post" action="contacto.php">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Correo:</label><br>
        <input type="email" name="correo" required><br><br>

        <label>Mensaje:</label><br>
        <textarea name="mensaje" rows="5" required></textarea><br><br>

        <button type="submit">Enviar</button>
        </form>
    </div>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $correo = htmlspecialchars($_POST['correo']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    echo "<p>Gracias por escribirnos, $nombre. Te responderemos pronto al correo $correo.</p>";
  }
  ?>
</body>
</html>