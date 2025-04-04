<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de cupones</title>
    
</head>
<body>
   
    <div class="container mt-4">
        <div class="row">
            <h3>Lista de Cupones</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                
                <br><br>
                <table class="table table-striped table-bordered" id="tabla">
                    <thead class="table-dark">
                        <tr>
                            <th>Titulo:</th>
                            <th>Precio Regular:</th>
                            <th>Precio oferta:</th>
                            <th>Fecha inicio:</th>
                            <th>Fecha fin:</th>
                            <th>Fecha limite:</th>
                            <th>cantidad disponible:</th>
                            <th>Descripcion:</th>
                            <th>detalles:</th>
                            <th>Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                            foreach($cupones as $cupon): 
                        ?>

                            <tr>
                                <td><?= $cupon['titulo'] ?></td>
                                <td><?= $cupon['precio_regular'] ?></td>
                                <td><?= $cupon['precio_oferta'] ?></td>
                                <td><?= $cupon['fecha_inicio'] ?></td>
                                <td><?= $cupon['fecha_fin'] ?></td>
                                <td><?= $cupon['fecha_limite_uso'] ?></td>
                                <td><?= $cupon['cantidad_limite'] ?></td>
                                <td><?= $cupon['descripcion'] ?></td>
                                <td><?= $cupon['detalles'] ?></td>
                                
                                <a href="#" class="btn btn-info">Conjear</a></td>
                                
                                
                            </tr>

                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>