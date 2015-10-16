<!DOCTYPE html>
<html>
    <head>
        <title>title</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
	<link href='http://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="container text-center">
            <h1>Archivo guardado</h1>
        <span class="btn btn-danger espacio-arriba-md"><a href="contacto.php">Volver</a></span>
       
        <?php

            $fi = fopen("archivo.txt","a")
                or die("problemas al crear archivo");

            fwrite($fi,"Datos");
            fwrite($fi,"\n");
            fwrite($fi, $_POST['nombre']);
            fwrite($fi, "\n");
            fwrite($fi, $_POST['comentario']);
            fwrite($fi, "\n");
            fwrite($fi, "-----------------------------------------------\n\n");
            fclose($fi);
        ?>
        <p class="espacio-arriba-md">
            <?php 
                $archivo = fopen("archivo.txt", "r") 
                    or die("Problemas al leer archivo");
                while (!feof($archivo)){
                    $traer = fgets($archivo);
                    $saltodelinea = nl2br($traer);
                    echo $saltodelinea;
                }
            ?>
        </p>
        </div>
    </body>
</html>
