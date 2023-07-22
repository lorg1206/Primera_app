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
        <div class="mision">
            <h2><font size=7>mision</font></h2>
            <img src="img/1.png" alt="logo mision" align=left width="350" height="350">
            <p><font size=6>somos una empresa que esta comprometida con el ausilio y ayuda a los animales y a los propietarios de
                tiendas en relacion a la comercializacion de productos enfocados a estos en donde buscaremos por medio
                virtual brindar una gran gama de atributos que pueden ayudarnos a la comercializacion y entendimiento
                con los clientes interesados en la utilizacion de nuestra pagina web y confiabilidad en esta, para la
                entrega tanto de productos como servicios enfocados a nuestra area de trabajo.</font> </p>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="vision">
            <h2><font size=7>vision</font></h2>
            <img src="img/2.png" alt="logo vision" align=left width="350" height="350">
            <p><font size=6>tenemos una vision a futuro muy positivo enfocandonos en las areas en donde se necesite o se tenga
                disponibilidad de la entrega de los diversos productos y servicios que ofrecemos, buscamos tener un
                crecimiento escalonado en donde nosotros podremos ofrecer mejores servicios a mas areas del pais ademas
                de llegar a mas gente de diversas areas del pais que quieran unas nuestra paguna web.</font></p>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="valores">
            <h2><font size=7>valores</font></h2>
            <img src="img/3.png" alt="logo valores" align=left width="350" height="350">
            <p><font size=6>nos centramos principalmente por el valor de la honestidad en donde prometemos cumplir con la obligacion
                principal de la entrega y cumplimiento del servicio solicitado por nuestros clientes en donde buscaremos
                siempre cumplir con las espectativas y acuerdos que se hallan llegado de antemano al momento de la
                compra y el segundo vendria siendo el interes hacia la precervacion y proteccion hacia las mascotas
                hacia la cual van dirigidos nuestros servicios buscando siempre su seguridad y bienestar.</font></p>
        </div>
    </div>
</body>