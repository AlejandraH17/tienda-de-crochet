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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tiendita</title>
    <link rel="icon" href="<?php echo $favicon; ?>">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: 'Playfair Display', sans-serif;
        margin: 0;
        background-color: #ffffffff;
    }
    header {
        background-color: #1e0829ff;
        padding: 10px;
        display: flex;
        justify-content: space-between; 
        align-items: center; 
    }
    nav a {
        margin-left: 20px;
        text-decoration: none;
        font-family: 'Trebuchet MS', sans-serif;
        color: #ffe9d4ff; 
    }
    .logo img {
        height: 60px;
    }
    .productos {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        align-items: flex-start;
    }
    .producto img {
        width: 379px; 
        height: 500px;
        object-fit: cover;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .bienvenida {
        font-family: 'Playfair Display', sans-serif;
        text-align: justify;
        position: relative;
        top:-50px;
        left: 300px;
        padding: 20px;
        background-color: #dfbc94ff;
        margin: 0 auto;
        max-width: 300px; 
    }
    .bienvenida p {
        font-family: 'Trebuchet MS', sans-serif;
        max-width: 280px; 
    }
    .titulo1 {
        text-align: left; 
        margin: 0;
    }
    .seccion_silla {
        display: flex;
        align-items: center;
        background-color: #ffffffff;
        padding: 50px;
        border-radius: 12px;
        max-width: 700px;
        margin: 30px auto;
    }
    .titulo2 h2 {
        font-size: 40px;
        color: #1e0829ff;
        position: relative;
        top: -80px;
        left: -80px;
        margin-bottom: 10px;
        
    }
    .titulo2 p {
        font-family: 'Trebuchet MS', sans-serif;
        font-size: 16px;
        line-height: 1.5;
        color: #1e0829ff;
        margin-bottom: 80px;
        position: relative;
        top: -80px;
        left: -80px;
    }
    .titulo2 button {
        font-family: 'Trebuchet MS', sans-serif;
        background-color: #1e0829ff;
        color: #fff;
        padding: 10px 20px;
        border-radius: 25px;
        cursor: pointer;
        position: relative;
        left: auto;
        top: -110px;
    }
    .imagen_silla img {
        object-fit: cover;
        position: relative;
        top:-100px;
        left: 120px;
    }
    .pie{
        text-align: center;
        font-family: 'Trebuchet MS', sans-serif;
        color: #000000ff;
        position: relative;
        top: -150px;
    }
    .footer {
        background-color: #1e0829ff;
        color: #ffffff;
        text-align: center;
        padding: 20px 0;
    }
    .redes a {
        margin: 0 10px;
        text-decoration: none;
        color: #f3dbffff;
        font-weight: bold;
        transition: color 0.3s ease;
    }

</style>
</head>


<body>
    <header>
        <div class="logo">
            <img src="imagenes/logo.png" alt="Logo Crochet" style="height: 60px;">

        </div>
        <nav>
            <a href="#">Inicio</a>
            <a href="categoria.php">Productos</a>
            <a href="#">Tienda</a>
            <a href="#">Contacto</a>
            <a href="index.html">Iniciar sesión</a>
        </nav>

    </header>
        <div class="productos">
           <?php
            include("mostrar_productos.php");
            ?>
        </div>

        <div class="bienvenida">
            <h1 class="titulo1">Moda a</h1>
            <h1 class="titulo1">Crochet</h1>
            <p>Bienvenidos a nuestra tienda especializada en prendas tejidas a mano con la técnica de crochet.
            </p> <p>Aquí encontrarás una variedad de productos únicos y hechos con amor.</p>
        </div>

    
    <section class="seccion_silla">
        
        <table>
            <tr>
                <td>
                    <div class="titulo2">
                    <h2>Prendas Únicas</h2>
                    <p>Descubre nuestra colección de trajes de baño, vestidos, tops, suéteres y más, confeccionados con hilos de alta calidad y diseños exclusivos.</p>
                    <form action="categoria.php" method="get">
                    <button type="submit">VER PRODUCTOS</button>
                    </form>
                </td>
                <td>
                    <div class="imagen_silla">
                        <img src="imagenes/sombrilla_playera.jpg" alt="Silla Colgante" style="width:400px;height:500px;">
                    </div>
                </td>
            </tr>
        </table>
    </section>

    <section class="pie">
        <p>Nuestro equipo está comprometido en ofrecerte prendas de alta calidad, diseñadas con esmero.</p>
    </section>

    <footer class="footer">
        <div class="logo">
            <img src="imagenes/logo.png" alt="Logo Crochet" style="height: 60px;">
        </div>
              <div class="redes">
                <p>Siguenos en:</p>
                    <a href="#">Instagram</a>
                    <a href="#">WhatsApp</a>
                </div>
        </table>
        <p>&copy; 2025 Tiendita de Crochet · Todos los derechos reservados.</p>
    </footer>


</body>
</html>