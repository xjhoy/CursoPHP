<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tienda Stitch</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/animate.css">
        <link href='http://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="container">
            <div class="col-md-10 center-block quitar-float text-center">
                <img class="col-xs-8 col-md-3 quitar-float espacio-arriba animated fadeInDown retraso-1" src="img/logo_stitch.png">
                <h1 class="font-lobster animated fadeInRight retraso-05">  
                    <?php
                    //Constantes
                    define("nomTienda", "Tienda Stitch");
                    define("lemaTienda", "Pan & Caprichos");
                    echo nomTienda . "</br>" . lemaTienda;
                    ?>
                </h1>
                <div class="animated fadeInUp retraso-1">
                    <ul class="no-lista espacio-arriba-md letra-em-1">
                        <?php
                        //Vectores o arrays asociadas
                        $associative = array("art1" => " Menu", "art2" => "Almacén");
                        ?>
                        <li class="col-md-2 inline-block"><a href="#"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span><?php echo $associative["art1"]; ?></a></li>
                        <li class="col-md-2 inline-block"><a href="#"><span class="glyphicon glyphicon-oil"></span> <?php echo $associative["art2"]; ?></a></li>
                        <li class="col-md-2 inline-block"><a href="#"><span class="glyphicon glyphicon-modal-window"></span> <?php echo "Caja"; ?></a></li>
                        <li class="col-md-2 inline-block"><a href="calculadora.php"><span class="glyphicon glyphicon-scale"></span> <?php echo "Calculadora"; ?></a></li>
                        <li class="col-md-2 inline-block"><a href="contacto.php"><span class="glyphicon glyphicon-user"></span><?php echo "Contacto"; ?></a></li>
                    </ul>
                    <hr>
                    <a href="login.php" class="btn btn-primary btn-lg btn-block" role="button">Iniciar sesion</a>
                </div> 
            </div>
        </div>
    </body>
</html>
