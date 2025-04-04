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
    


                <form role="form" action="<?= PATH?>/insert" method="POST">
                <input type="hidden" name="op" value="insertar"/>
                    <div class="mb-3">
                        <label for="nombres" class="form-label">Nombres</label>
                        <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Ingrese sus nombres">
                    </div>
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos:</label>
                        <input type="text" class="form-control" name="Apellido" id="Apellido" placeholder="Ingresa sus apellidos">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono:</label>
                        <input type="tel" class="form-control" id="Telefono" name="Telefono" placeholder="Ingresa su numero de telefono">
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo Electronico:</label>
                        <input type="text" class="form-control" id="Correo" name="Correo" placeholder="Ingresa su correo electronico">
                    </div>
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Direccion:</label>
                        <input type="text" class="form-control" id="Direccion" name="Direccion" placeholder="Ingresa su direccion">
                    </div>
                    <div class="mb-3">
                        <label for="DUI" class="form-label">DUI:</label>
                        <input type="text" class="form-control" id="DUI" name="DUI" placeholder="Ingrese su numero de DUI">
                    </div>
                    <div class="mb-3">
                        <label for="contraseña" class="form-label">Contraseña:</label>
                        <input type="text" class="form-control" id="Contrasena" name="Contrasena" placeholder="Ingrese su contraseña">
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                    <a class="btn btn-danger" href="#">Cancelar</a>

                </form>
            </div>

        </div>

    </div>
</body>
</html>