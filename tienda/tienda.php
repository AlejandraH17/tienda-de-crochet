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
  <title>Tienda</title>
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
    
</style>    
<body>
    <div class="menu">
    <a href="javascript:history.back()" class="atras">⟵ Atrás</a>
    </div>

<h2>Visítanos en nuestra tienda física</h2>

<div style="display: flex; justify-content: center; margin: 50px 10;">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1270.9845979571444!2d-69.32114397805336!3d10.158388148392383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e87684dbaef273d%3A0x3df24c2077932822!2s5M5H%2B6FP%2C%20El%20Cuj%C3%AD%203001%2C%20Lara!5e1!3m2!1ses!2sve!4v1759767940495!5m2!1ses!2sve" 
    width="400" 
    height="300" 
    style="border:20;" 
    allowfullscreen="" 
    loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>
</body>
</html>