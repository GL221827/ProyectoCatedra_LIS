<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificacion de su cuenta</title>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <h2>Verificacion de su cuenta</h2>

        </div>

        <div class="row">
            <div class="col-md-7">
                <form role="form" action="<?=PATH.'/Usuarios/verifyAccount'?>" method="POST">
                <input type="hidden" name="op" value="insertar"/>
                <h3>Ingrese el codigo de verificacion enviado a su correo electronico</h3>
                    
                        <label for="codigo" class="form-label">Codigo de verificacion:</label>
                        <input type="tel" class="form-control" id="Correo" name="Correo" placeholder="Ingrese el codigo de verificacion">
                    </div>
                  
                    
                    <button type="submit" class="btn btn-primary">Verificar</button>
                   
                    <a class="btn btn-danger" href="#contra">Solicitar nuevo codigo</a>
                    <br>
                    <button type="submit" class="btn btn-primary">Cancelar</button>

                </form>
            </div>

        </div>

    </div>
</body>
</html>