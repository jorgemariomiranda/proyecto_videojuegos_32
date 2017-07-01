<?php
session_start();
$id=$_GET["id"];

$producto=$_SESSION[$id];

//echo "Producto " . $producto["nombre"];
//echo "Producto " . $producto["descripcion"];
//echo "Producto " . $producto["precio"];




?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        
        
    </head>
    <body>
        
        <p> nombre:  <?php echo  $producto["nombre"]; ?> </p>
        <br>
        <p>descripcion:  <?php echo  $producto["descripcion"]; ?></p>
        <br>
        <p>precio:  <?php echo  $producto["precio"]; ?></p>
        
    </body>
</html>



