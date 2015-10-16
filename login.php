<!DOCTYPE html>
<html>
    <head>
        <title>Usuarios</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
	<link href='http://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="container text-center">
            <div class="row espacio-arriba">
                
                <div class="col-md-8">
                    <h2>Registrar usuario</h2>
                    <form action="registrar.php" method="post" name="form-reg" class="form-horizontal">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-10">
                                <input name="name" type="text" class="form-control" id="inputEmail3" placeholder="Introducir nombre">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>
                            <div class="col-sm-10">
                                <input name="user" type="text" class="form-control" id="inputEmail3" placeholder="Introducir usuario o nick">
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                          <div class="col-sm-10">
                              <input name="pw" type="password" class="form-control" id="inputPassword3" placeholder="Password">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Confirmar Password</label>
                          <div class="col-sm-10">
                              <input name="pw2" type="password" class="form-control" id="inputPassword3" placeholder="Password">
                          </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input name="email" type="email" class="form-control" id="inputEmail3" placeholder="Introducir correo electronico">
                            </div>
                        </div>

                        <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Registrar</button>
                          </div>
                        </div>
                    </form>
                </div>
                
                <div class="col-md-4">
                    <h2>Iniciar sesion</h2>
                    <form action="loginReg.php" method="post" name="form-login" class="form-horizontal">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>
                            <div class="col-sm-10">
                                <input name="user" type="text" class="form-control" id="inputEmail3" placeholder="Introducir usuario o nick">
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input name="pw" type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> Remember me
                                </label>
                              </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Sign in</button>
                            </div>
                        </div>
                    </form>                   
                </div>
            </div>
        </div>
    </body>
</html>
