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
        <main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">SERVICIO ADOPCION DE ANIMALES</h1>
        <p class="lead text-muted">si quieres que adoptar por favor mira y comunicate con los dueños de las mascotas</p>
        <p class="lead text-muted">si quieres dar en adopcion un animal por favor comunicate con nosotros y te ayudaremos a que este aqui</p>
        <p>
          <a href="contactos.php" class="btn btn-primary my-2">contactanos</a>
          <a href="https://www.animalesbog.gov.co/cliff/index.html" class="btn btn-secondary my-2">centro de adopcion distrital </a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
          <img src="mascotas/1.jpg"

            <svg class="bd-placeholder-img card-img-top"  width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

            <div class="card-body">
              <p class="card-text">Bulldog hembra de 2 años, peso 5kg, perro cariñoso y jugetos</p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">3004681234 / bogota</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="mascotas/2.jpg"

            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

            <div class="card-body">
              <p class="card-text">Labrador hembra de 3 años, peso 40kg, perro muy jugeton y atletico</p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">3004681234 / bogota</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="mascotas/3.jpg"

            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

            <div class="card-body">
              <p class="card-text">Pastor aleman macho de 3 años, peso 40kg, perro muy jugeton y atletico</p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">3004681234 / bogota</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="mascotas/4.jpg"

            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

            <div class="card-body">
              <p class="card-text">Poodle macho de 5 años, peso 7kg, perro muy dormilon y cariñoso.</p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">3004681234 / bogota</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="mascotas/5.jpg"

            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

            <div class="card-body">
              <p class="card-text">Golden retriever hembra de 4 años, peso 30kg, perro muy protector y jugeton.</p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">3004681234 / bogota</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="mascotas/6.jpg"

            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

            <div class="card-body">
              <p class="card-text">Chihuahua macho de 6 años, peso 7kg, perro muy agresivo y aterrador,amenaza para la humanidad.</p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">3004681234 / medellin</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="mascotas/7.jpg"

            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

            <div class="card-body">
              <p class="card-text">Bulldog frances macho, peso 15kg , perro consentido y jugeton.</p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">3004681234 / medellin</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="mascotas/8.jpg"

            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

            <div class="card-body">
              <p class="card-text">Bichon fris hembra,20kg, es como algodon, pero con 4 patas,se puede usar de almohada y es super consentida</p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">3004681234 / barranquilla</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="mascotas/9.jpg"

            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

            <div class="card-body">
              <p class="card-text">criollo hembra, 30kg.perro protector y buenocon los niños</p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">3004681234 / bogota</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>