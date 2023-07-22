<?php
require 'config/config.php';
require 'config/database.php';
$db= new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT id, Nombre, precio FROM productos WHERE activo=1" );
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
//print_r($_SESSION);
//session_destroy();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tienda de mascotas</title>
    <!--custom css-->
    <link rel="stylesheet" href="css/productos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <header>
    <div class="conteiner">
        <nav class="nav-main">
            <a href="index.php"><img src="img\PinClipart.com_track-images-clip-art_3841420.png" width="40" height="50" alt="logo tienda de mascotas" class="nav-brand"></a>
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
                        <img src="img\Imagen1.png"
                            width="35" height="35" alt="logo-inicio-secion">
                    </a>
                </li>
            </ul>
            <ul class="carrito de compras">
                <li>
                <a href="checkout.php">
                        <img src="img/bf1990e247292b756ca7926443f00ab6.jpg" width="25" height="25"
                            alt="logo-carrito-compras"><span id="num_cart" class="badge bg-secondary"><?php echo $num_cart; ?></span>
                    </a>
                </li>
            </ul>
        </nav>
        <hr>
    </header>
        <main>
        <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php foreach($resultado as $row) { ?>
        <div class="col">
        <div class="card shadow-sm">
            <?php
            $id = $row['id'];
            $imagen = "imgp/" .$id. "/1.jpg";
            if(!file_exists($imagen)) {
                $imagen = "imgp/no-photo.jpg" ;
            }
            ?>
            <img src="<?php echo $imagen; ?>"class="d-block w-100">
            <div class="card-body">
            <h5 class="card-title"><?php echo $row['Nombre']; ?></p>
            <p class="card-text">$ <?php echo number_format($row['precio'], 2, '.',','); ?></p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="details.php?id=<?php echo $row['id']; ?>&token=<?php echo hash_hmac('sha1', $row['id'], KEY_TOKEN);?>" class="btn btn-primary">Detalles</a>
                </div>
                <button class="btn btn-outline-success" type="button" onclick="addProducto(<?php echo $row['id']; ?>, '<?php echo hash_hmac('sha1', $row['id'],KEY_TOKEN); ?>')">Agregar al carrito</button>
            </div>
            </div>
        </div>
        </div>
        <?php } ?>
    </div>
    </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        function addProducto(id,token){
            let url = 'clases/carrito.php'
            let formData = new FormData()
            formData.append('id', id)
            formData.append('token', token)

            fetch(url, {
                method: 'POST',
                body: formData,
                mode: 'cors',
            }).then(response => response.json())
            .then(data =>{
                if(data.ok){
                let elemento = document.getElementById("num_cart")
                elemento.innerHTML = data.numero
                }
        })
    }
    </script>
</boby>




