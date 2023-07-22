<?php
define("CLIENT_ID", "AQGtgSF30aZTW0eXc1KJpZ9SFnUZiLrNnBdvfJCEJDzGgO53KmXu-bIJVUT9-7JP9SYcNjZflaIjtEiL");
define("CURRENCY", "USD");
define("KEY_TOKEN", "APR.wqc-354*");
define("MONEDA", "$");

session_start();
$num_cart = 0;
if(isset($_SESSION['carrito']['productos'])){
    $num_cart = count($_SESSION['carrito']['productos']);
}
?>

