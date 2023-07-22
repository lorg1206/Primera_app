<?php
require 'config/config.php';
require 'config/database.php';
$db = new Database();
$con = $db->conectar();

$id = isset($_GET['id']) ? $_GET['id'] : '';
$token = isset($_GET['token']) ? $_GET['token'] : '';

if($id == '' || $token == '' ) {
    echo 'Error al procesar la peticion';
    exit;
}else{
    $token_tmp = hash_hmac('sha1',$id, KEY_TOKEN);
    if ($token == $token_tmp) {
        $sql = $con->prepare("SELECT count(id) FROM productos WHERE id=? AND activo=1");
        $sql->execute([$id]);
        if($sql->fetchColumn() > 0){
            $sql = $con->prepare("SELECT Nombre, descripcion, precio, descuento FROM productos WHERE id=? AND activo=1 LIMIT 1");
            $sql->execute([$id]);
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            $Nombre = $row['Nombre'];
            $descripcion = $row['descripcion'];
            $precio = $row['precio'];
            $descuento = $row['descuento'];
            $precio_desc = $precio - (($precio * $descuento) / 100);
            $dir_imgp = 'imgp/'.$id.'/';
            $rutaImg = $dir_imgp . '1.jpg';
            if(!file_exists($rutaImg)){
                $rutaImg = 'imgp/no-photo.jpg';
            }
            $imagenes = array();
            if(file_exists($dir_imgp)){
            $dir = dir($dir_imgp);
            while(($archivo = $dir->read()) != false){
                if($archivo != '1.jpg' && (strpos($archivo, 'jpg') || strpos($archivo, 'jpeg')) ){
                    $imagenes[] = $dir_imgp . $archivo;
                }
            }
            $dir->close();
        }
        }
    }else{
        echo 'Error al procesar la peticion';
        exit;
    }
}
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
        <main>
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-1">

                <div id="carouselImagess" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-inner">
    <div class="carousel-item active">
    <img src="<?php echo $rutaImg?>"class="d-block w-100" >
    </div>
    <?php  foreach($imagenes as $img) {?>
        <div class="carousel-item">
    <img src="<?php echo $img?>"class="d-block w-100" >
    </div>
    <?php } ?>
</div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselImagess" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselImagess" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
                </div>
                <div class="col-md-6 order-md-2">
                    <h2><?php echo $Nombre; ?></h2>
                    <?php if($descuento  > 0) { ?>
                        <p><del><?php  echo MONEDA .number_format($precio, 2, '.', ','); ?></del></p>
                        <h2>
                            <?php  echo MONEDA .number_format($precio_desc, 2, '.', ','); ?>
                            <small class="text-success"><?php echo $descuento; ?>% descuento</small>
                        </h2>
                        <?php } else { ?>

                    <h2><?php  echo MONEDA .number_format($precio, 2, '.', ','); ?></h2>
                    <?php } ?>
                    <p class="lead">
                        <?php echo $descripcion; ?>
                    </p>
                    <div class="d-grid gap-3 col-10 mx-auto">
                        <button class="btn btn-primary" type="button">Comprar ahora</button>
                        <button class="btn btn-outline-primary" type="button" onclick="addProducto(<?php echo $id; ?>, '<?php echo $token_tmp; ?>')">Agregar al carrito</button>
                    </div>

                </div>
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
</html>