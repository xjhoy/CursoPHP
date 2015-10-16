<!DOCTYPE html>
<html>
    <head>
        <title>Contacto</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
	<link href='http://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="container">
            <div class="row">
            <h1>Contacto</h1>
                <form  id="addRunner" action="guardar.php" method="post" name="frm">
                    <div class="form-group col-md-5">
                        <input name="nombre" class="form-control" type="text" placeholder="Introducir nombre">
                    </div>
                    <div class="form-group col-md-12">
                        <textarea name="comentario" class="form-control" rows="5" placeholder="Introducir texto"></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <button class="btn btn-success" type="submit" onblur="clearInputs()">Guardar</button>
                    </div>
                </form>
            </div>
            <div class="row">
                <h3>Eliminar archivo</h3>
                <form action="eliminar.php" name="frmEliminar" method="post" class="col-md-12 form-inline">
                    <div class="form-group">
                        <input type="file" name="archivo" class="btn btn-warning">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-danger" value="Eliminar">
                    </div>
                </form>
            </div>
            
        </div>
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    </body>
</html>
