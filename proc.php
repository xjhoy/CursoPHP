<!DOCTYPE html>
<html>
    <head>
        <title>Resultado</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
	<link href='http://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="container">
            <div class="text-center">
                <h1>Resultado</h1>
                <p class="letra-muy-Grande">
                    <?php

                    $operacion = $_POST['lista'];

                    switch ($operacion){
                    case "sumar":
                        echo $_POST['c1'] + $_POST['c2'] + $_POST['c3'];
                        break;

                    case "restar":
                        echo $_POST['c1'] - $_POST['c2'] - $_POST['c3'];
                        break;

                    case "multiplicar":
                        if (empty( $_POST['c3'])){
                            echo $_POST['c1'] * $_POST['c2'];
                        }else{
                            echo $_POST['c1'] * $_POST['c2'] * $_POST['c3'];
                        }
                        break;

                    case "dividir":
                        if (empty( $_POST['c3'])){
                            echo $_POST['c1'] / $_POST['c2'];
                        }else{
                            echo $_POST['c1'] / $_POST['c2'] / $_POST['c3'];
                        }
                        break;

                    }
                    ?>
                </p>
            </div>
        </div>
    </body>
</html>
