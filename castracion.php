
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
<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
      <img src="img/12.png" alt="logo mision" align=left width="350" height="350">
        <h2>Castracion por medio publico</h2>
        <p><b>A nosotros como tienda enfocada a la proteccion de animales compartimos el link donde como clientes podran inscribirse a sistemas de castracion otorgados por el estado </b></p>
        <p><a class="btn btn-secondary" href="https://www.animalesbog.gov.co/transparencia/tramites-servicios/programas-esterilizacion">Link »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="img/13.png" alt="logo mision" align=left width="350" height="350">
        <h2>Castracion a travez de nosotros</h2>
        <p><b>Nosotros ofrecemos la castracion por medio privado donde detallaremos y asesoraremos como cuidar el animal despues del proceso ademas de otorgar medicinas para la mascota.</b></p>
        <p><a class="btn btn-secondary" href="contactos.php">contactenos »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="img/10.png" alt="logo mision" align=left width="350" height="350">
        <h2>Castracion en salon comunal</h2>
        <p><b>esplicamos como es la castracion y que cuidados toca tomar en caso tal de que vallan a tomarla en alguna parte de su localidad</b></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Castracion por medio publico <span class="text-muted">inscribirse via web</span></h2>
        <p class="lead"><b>Para realizar la castracion a traves de medio publico toca inscribirse via web donde en donde tocara buscar la localidad en donde se realiza, ademas de buscar resibos de facturacion anterior y diligenciar los datos que puedan llegar a requerir en la encuesta, despues de diligenciar los datos procedera a imprimir el documento de validacion e ir a la hora acordada en el sitio acordado donde este su localidad, "tener mucho cuidado despues con la mascota,proteganla y serciorense de llevar algo en donde poder llevarla pues estara dormida todo el camino".</b></p>
      </div>
      <div class="col-md-5">
      <img src="imgs/5fbd84393bd0e.jpeg" alt="logo mision" align=left width="500" height="400">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Castración a través de nosotros <span class="text-muted">contáctenos</span></h2>
        <p class="lead"><b>el servicio consta de llevar y traer a la mascota al lugar donde realizaremos la operación en donde supliremos las primeras 8 horas después de la operación y llevaremos al hogar al animal con medicina y  cuello isabelino para en caso tal de que se sienta con problemas, además de ofrecer servicios de asesoramiento y protección en caso de cualquier eventualidad y poder responder lo más pronto posible,  VALOR DE: $80:000</b></p>
      </div>
      <div class="col-md-5 order-md-1">
      <img src="imgs/deko_mascotas_041_esterilizacion-vaciado-original-668x400x80xX.jpg" alt="logo mision" align=left width="500" height="400">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Castración en salón comunal <span class="text-muted">mucho cuidado</span></h2>
        <p class="lead"><b>Si ve un cartel de jornadas de castración, lo más recomendable  vendría siendo cerciorarse de que la organización que está patrocinando la jornada de castración sea legítima, además de estar atento y cuidarse el día en que vaya a llevar a su mascota, llévela lo más temprano posible además de ser requerido que compre un cuello isabelino con anterioridad y cerciorarse de que se haga el proceso sin ningún problema, si el animal presenta sangrado por la cola o la herida no está bien cerrado reclame antes de irse de la instalación, cuide mucho a su mascota.</b></p>
      </div>
      <div class="col-md-5">
      <img src="imgs/dsc9255_0.jpg" alt="logo mision" align=left width="500" height="400">

      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div>