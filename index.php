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
        <div class="contenido">
            <header class="cabecera">
                <h1>tienda de mascotas</h1>
            </header>
            <div class="introduccion">
                <img src="img/4.png" align="left" alt="gato" width="390" height="390">
                <h2>quienes somos</h2>
                <p>somos una empresa inventada para la creacion de la practica en diversos idiomas de programacion en
                    donde buscaremos por medio de aplicaciones web brindarles ayuda en lo que vendria siendo la venta y
                    ayuda en compra de servicios para sus mascotas ademas de relacionarnos con los propietarios de los
                    negocios de tiendas de mascotasw y brindarles la oportunidad de vender sus productos atraves de esta
                    aplicacion y fomentando asi una convivencia sana por medio de lo que vendria siendo atributos como
                    opciones de dar a su mascota en adopcion y etc.
                </p>
            </div>
            <footer>
                <div class="redes_sociales_index">
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
    </div>
</body>

</html>