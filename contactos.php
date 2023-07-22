<?php
require 'config/config.php';
require 'config/database.php';
$db= new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT id, Nombre, precio FROM productos WHERE activo=1" );
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tienda de mascotas</title>
    <!--custom css-->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="conteiner">
        <nav class="nav-main">
            <a href="index.php"><img src="img\PinClipart.com_track-images-clip-art_3841420.png" width="40" height="50"
                    alt="logo tienda de mascotas" class="nav-brand"></a>
            <ul class="nav-menu">
                <li>
                    <a href="index.php">inicio</a>
                </li>
                <li>
                    <a href="productos.php">productos</a>
                </li>
                <li>
                    <a href="nosotros.php">nosotros</a>
                </li>
                <li>
                    <a href="servicios.php">servicios</a>
                </li>
                <li>
                    <a href="contactos.php">contactos</a>
                </li>
            </ul>
            <ul class="icono-iniciar-secion">
                <li>
                    <a href="#">
                        <img src="img\Imagen1.png" width="35" height="35" alt="logo-inicio-secion">
                    </a>
                </li>
            </ul>
            <ul class="carrito de compras">
                <li>
                    <a href="#">
                        <a href="checkout.php">
                            <img src="img/bf1990e247292b756ca7926443f00ab6.jpg" width="25" height="25"
                                alt="logo-carrito-compras"><span id="num_cart" class="badge bg-secondary">
                                <?php echo $num_cart; ?>
                            </span>
                        </a>
                </li>
            </ul>
        </nav>
        <hr>
        <div class="mapa">
            <h2>sedes</h2>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7953.778887667957!2d-74.08039207664307!3d4.6138004807861375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bfd2da6cb29%3A0x239d635520a33914!2zQm9nb3TDoQ!5e0!3m2!1ses-419!2sco!4v1632430203565!5m2!1ses-419!2sco"
                width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="contactos">
            <h2>contactos</h2>
            <div>
                <h3>cell:</h3>
                <ul>
                    <li>1231321351586</li>
                    <li>1561561561651</li>
                    <li>1561561561561</li>
                </ul>
            </div>
            <div>
                <h3>tell</h3>
                <ul>
                    <li>23131566</li>
                    <li>15615612</li>
                    <li>15616516</li>
                </ul>
            </div>
            <footer>
                <div class="redes_sociales_contactos">
                    <h3>redes sociales</h3>
                    <a href="https://www.facebook.com/"><img src="img/facebook_16423.png" alt="index_facebook"
                            width="80" height="80">
                    </a>
                    <a href="https://twitter.com/?lang=es"><img
                            src="img/51ce5de22b3329db14c41f9056000906-icono-de-goma-de-twitter.png" alt="index_twitter"
                            width="80" height="80"></a>
                    <a href="https://www.youtube.com/watch?v=XddLa9O5Llg"><img src="img/174883.png" alt="index-youtube"
                            width="80" height="80"></a>
                    <a href="https://www.instagram.com/?hl=es"><img src="img/1409946.png" alt="index_instagram"
                            width="80" height="80"></a>
                </div>
            </footer>
        </div>