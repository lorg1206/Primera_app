<?php
require 'config/config.php';
require 'config/database.php';
$db= new Database();
$con = $db->conectar();

$producto = isset($_SESSION['carrito']['productos']) ? $_SESSION['carrito']['productos'] : null;

print_r($_SESSION);
$lista_carrito = array();

if($productos != null){
    foreach($productos as $clave => $cantidad){
        $sql = $con->prepare("SELECT id, Nombre, precio, descuento, $cantidad AS cantidad FROM productos WHERE id=? AND activo=1");
        $sql->execute([$clave]);
        $lista_carrito[] = $sql->fetch(PDO::FETCH_ASSOC);
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>caja</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://www.paypal.com/sdk/js?client-id=AQGtgSF30aZTW0eXc1KJpZ9SFnUZiLrNnBdvfJCEJDzGgO53KmXu-bIJVUT9-7JP9SYcNjZflaIjtEiL&currency=USD"></script>
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
                        <a href="carrito.php">
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
            <div class="container">
                <div class="table-responsive">
                    <table cass="table">
                        <thead>
                            <tr>
                                <th>Productos</th>
                                <th>precio</th>
                                <th>cantidad</th>
                                <th>subtotal</th>
                                <th></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </main>
<body>
    <div  id="paypal-button-container"></div>
    <script>
        paypal.Buttons({
            style:{
                color: 'blue',
                shape: 'pill',
                label: 'pay'
            },
            createOrder: function(data, actions){
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: 100
                        }
                    }]

                });
            },
            onApprove:function(data, actions){
                actions.order.capture().then(function(detalles){
                    window.location.href="completado.html"
                });
            },
            onCancel: function(data){
                alert("pago cancelado");
                console.log(data);
            }
        }).render('#paypal-button-container');
    </script>
</body>

</html>