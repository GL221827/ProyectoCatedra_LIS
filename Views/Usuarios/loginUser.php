<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso de Usuarios</title>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <h3>Ingreso de usuario</h3>

        </div>

        <div class="row">
            <div class="col-md-7">
                <form role="form" action="<?=PATH.'/Usuarios/check_user'?>" method="POST">
                <input type="hidden" name="op" value="insertar"/>
                    
                        <label for="correo" class="form-label">Correo Electronico:</label>
                        <input type="correo" class="form-control" id="correo" name="correo" placeholder="Ingresa su correo electronico">
                    </div>
                  
                    <div class="mb-3">
                        <label for="contra" class="form-label">Contraseña:</label>
                        <input type="password" class="form-control" id="contra" name="contra" placeholder="Ingrese su contraseña">
                    </div>
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                   
                    <a class="btn btn-danger" href="#contra">Recuperar contraseña</a>
                    <br>
                    <button type="submit" class="btn btn-primary">Cancelar</button>

                </form>
            </div>

        </div>

    </div>
</body>
</html>