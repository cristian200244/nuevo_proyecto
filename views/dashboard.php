<?php
require_once '../models/ProfesorModel.php';
$data = new Profesor();
$registros = $data->Show();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/style.css">

    <title>Document</title>
</head>

<body>

    <div class="container">


        <h2 class="text-center">Lista de Profesores</h2><br>
        <td><button type="button" class="btn btn-outline-info"><a href="nuevo.php">Agregar</a></button>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre(S)</th>
                        <th scope="col">Apellido(s)</th>
                        <th scope="col">Fecha De Nacimiento</th>
                        <th scope="col">Titulo</th>
                        <th scope="col" colspan="2">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($registros) {

                        foreach ($registros as $teacher) : ?>
                            <tr>
                                <th><?php echo $teacher->Id_profesor; ?></th>
                                <td><?php echo $teacher->Nombre; ?></td>
                                <td><?php echo $teacher->Apellido; ?></td>
                                <td><?php echo $teacher->Fecha_nacimiento; ?></td>
                                <td><?php echo $teacher->Titulo_profesor; ?></td>

                                <td><button type="button" class="btn btn-outline-danger"><a href="?c=delete&id=<?php echo $teacher->Id_profesor; ?> ">Eliminar</a></button>
                                    <button type="button" class="btn btn-outline-warning"><a href="?c=nuevo&id=<?php echo $teacher->Id_profesor; ?> ">Actualizar</a></button>
                                </td>
                            </tr>
                    <?php
                        endforeach;
                    }
                    ?>
                </tbody>
            </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>