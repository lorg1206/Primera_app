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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
        <div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1">consultoria y vacunacion de animales</h1>
        <p class="lead"><b>servicio de vacunacion de animales como gatos,perros,ratones, etc en donde brindaremos las vacunas
                    necesarias para el animal en cuestion ademas de proporcionar servicios de consulta medicos buscando
                    asi el buen estado medico del animal.</b></p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
        <a href="consultoria y vacunacion de animales.php"<button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Detalles</button></a>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
 <img src="img/5e2b7be7035a2.jpeg" src="bootstrap-docs.png" alt="" width="720">
      </div>
    </div>
  </div>
  <div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1">baño de animales</h1>
        <p class="lead"><b>se otorgara un servico de paseo a perros en donde se hara recojida del animal y se cobrara a partir
                    del tiempo y tamaño del animal que se este paseando.</b></p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
        <a href="baño de animales.php"<button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Detalles</button></a>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
      <img src="img/73ed68a63912b33a46a4a2aefed2dce6.jpg" src="bootstrap-docs.png" alt="" width="720">
      </div>
    </div>
  </div>
        <div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1">paseo de mascotas</h1>
        <p class="lead"><b>se tendra un foro abierto en donde las personas podran dar a sus animales en adopcion ademas de poder
                    adoptar los animales en donde se concretara por medio de la pagina una ubicacion segura a la cual
                    poder reunirse.</b></p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
        <a href="paseo de mascotas.php"<button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Detalles</button></a>         
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
      <img src="img/beneficios-de-sacar-a-pasear-a-tu-perro-1900Wx500H.jpg"src="bootstrap-docs.png" alt="" width="720">
      </div>
    </div>
</div>

        <div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1">castracion</h1>
        <p class="lead"><b>servicio de castracion de animales ademas de suplementos medicos y acompañamiento despues de ya
                    realizada la operacion a la mascota del hogar.</b></p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
        <a href="castracion.php"<button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Detalles</button></a>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
      <img src="img/60dbc9146e529.r_1625030985088.0-117-3000-1615.jpeg" src="bootstrap-docs.png" alt="" width="720">
      </div>
    </div>
  </div>
        <div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1">adopcion de animales</h1>
        <p class="lead"><b>se tendra un foro abierto en donde las personas podran dar a sus animales en adopcion ademas de poder
                    adoptar los animales en donde se concretara por medio de la pagina una ubicacion segura a la cual
                    poder reunirse.</b></p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
        <a href="adopcion de animales.php"<button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Detalles</button></a>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
      <img src="img/descarga (1).jpg" src="bootstrap-docs.png" alt="" width="720">
      </div>
    </div>
</div>
        </div>