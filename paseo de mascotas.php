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
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">precios servicios paseo de animales</h1>
      <p class="fs-5 text-muted">tenemos diversos planes para la gente interesada en tomar nuestro servicio de paseo de animales</p>
    </div>
    <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Obesidad</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$20.000<small class="text-muted fw-light"></small>/mes</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>paseo de mascota</li>
              <li>10 min de paseo</li>
              <li>paseo por la calle</li>
              <li>paseo cada 3 dias</li>
            </ul>
            <a href="contactos.php" class="btn btn-primary btn-lg">contactenos</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Fitness</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$30.000<small class="text-muted fw-light">/mes</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>paseo mascota</li>
              <li>30 min de paseo</li>
              <li>cepillado</li>
              <li>paseo cada 2 dias</li>
            </ul>
            <a href="contactos.php" class="btn btn-primary btn-lg">contactenos</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">THE ROCK</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$40.000<small class="text-muted fw-light">/mes</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>paseo por parque</li>
              <li>revision medica</li>
              <li>paseo cada dia</li>
              <li>duracion de 1 hora</li>
            </ul>
            <a href="contactos.php" class="btn btn-primary btn-lg">contactenos</a>
          </div>
        </div>
      </div>
    </div>

    <h2 class="display-6 text-center mb-4">comparacion planes</h2>

    <div class="table-responsive">
      <table class="table text-center">
        <thead>
          <tr>
            <th style="width: 34%;"></th>
            <th style="width: 22%;">Obesidad</th>
            <th style="width: 22%;">Fitness</th>
            <th style="width: 22%;">THE ROCK</th>
          </tr>
        <tbody>
          <tr>
            <th scope="row" class="text-start">paseo mascota</th>
            <td>X<svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            <td>X<svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            <td>X<svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">+15 min de paseo</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            <td>X<svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            <td>X<svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">cepillado</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            <td>X<svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            <td>X<svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Revision medica</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            <td>X<svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
