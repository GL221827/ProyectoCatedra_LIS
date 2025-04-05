<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <h3>Registro de nuevo usuario</h3>

        </div>

        <div class="row">
            <div class="col-md-7">
    


                <form role="form" action="<?= PATH.'/Usuarios/registerUser'?>" method="POST">
                <input type="hidden" name="op" value="insertar"/>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese sus nombres">
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido:</label>
                        <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingresa sus apellidos">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono:</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Ingresa su numero de telefono">
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo Electronico:</label>
                        <input type="text" class="form-control" id="correo" name="correo" placeholder="Ingresa su correo electronico">
                    </div>
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Direccion:</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingresa su direccion">
                    </div>
                    <div class="mb-3">
                        <label for="DUI" class="form-label">DUI:</label>
                        <input type="text" class="form-control" id="DUI" name="DUI" placeholder="Ingrese su numero de DUI">
                    </div>
                    <div class="mb-3">
                        <label for="contra" class="form-label">Contraseña:</label>
                        <input type="text" class="form-control" id="contra" name="contra" placeholder="Ingrese su contraseña">
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                    <a class="btn btn-danger" href="#">Cancelar</a>

                </form>
     

            </div>

        </div>

    </div>
</body>
</html>