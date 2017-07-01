<?php

include 'inicio.php';
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">

        <link rel="stylesheet" href="css/main.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

          

    </head>
    <body>
        <script type ="text/javascript">

         
  function agregar(dato){
            var _html;
            _html = document.getElementById("contrato").innerHtml = "<div>" + dato + "</div>";
            switch(dato){
              
            
            
      
        </script>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">ADSI--1133120</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <form class="navbar-form navbar-right" role="form">
                        <div class="form-group">
                            <input type="text" placeholder="Tipo de contrato" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Contrato obtenido" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">CONTRATOS ACTUAL</button>
                    </form>
                </div><!--/.navbar-collapse -->
            </div>
        </nav>

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <h1>Contratosena1</h1>
                <p>Nuestra Empresa se encargar crear sotfware para grandes y pequeñas empresa y asi brindar un mejor servicio en mantenimiento.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Mi Carrito</a></p>
            </div> 
        </div>

        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-4">
                    <h2>VIDEO JUEGOS</h2>
                    <p>podemos encontrar muchos productos que se realizan a la vez se alquilan video juegos y CD . </p>
                    <p><a class="btn btn-default" href="#" role="button"></a></p>
                </div>
                <div class="col-md-4">
                    <h2>CONTRATO DE VIDEO JUEGOS</h2>
                    <p> Nuestros servicio seran brindados y  supervisados por especialistas y profesionales a la hora de ser realizados y brindados  </p>
                    <p><a class="btn btn-default" href="#" role="button"></a></p>
                </div>
                <div class="col-md-4">
                    <h2>COMPRA DE VIDEO JUEGOS</h2>
                    <p>compra de video  bilateral en el que una de las partes (vendedora) se obliga a la entrega de una cosa determinada y la otra (compradora) a pagar por ella un cierto precio, en dinero o signo que lo represente.</p>
                    <p><a class="btn btn-default" href="#" role="button"></a></p>
                </div>
            </div>

            <hr>

            <footer>
                <p>SUPER MERCADO DE VIDEO JUEGOS

<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
</head> 
<body> 
<form action="productos.php" method="post"> 
<input type="hidden" name="agregar"> 
<table border="1"> 
<tr> 
    

<?php foreach ($productos as $valores){?>    
<td width="150"> 
Producto: <b><?php echo $valores["nombre"]?></b><br> 
Descripcion: <b><?php echo $valores["descripcion"]?></b><br> 
Precio: <b><?php echo $valores["precio"]?></b><br> 



<a href="productos.php?id=<?php echo $valores["id"] ?>">Ver detalle</a>
</td>
<?php }?>
