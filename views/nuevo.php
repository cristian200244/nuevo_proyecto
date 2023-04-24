<!DOCTYPE html>
<html lang="en">

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
        
        <h2 class="text-center">Inscripcion De Profesores</h2>
        <button type="submit" class="btn btn-info "><a href=" dashboard.php">Ver Informacion</a> </button>
        <form action="?c=guardar" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre(s)</label>
                <input type="text" class="form-control" id="Nombre" name="Nombre" required>
                 

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Apellido(s)</label>
                <input type="text" class="form-control" id="Apellido" name="Apellido" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha De Nacimiento</label>
                <input type="date" class="form-control" id="Fecha_nacimiento" name="Fecha_nacimiento" required>

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="Titulo_profesor" name="Titulo_profesor" required>
                <div id="emailHelp" class="form-text">ingrese la materia o profesion que tiene</div>
            </div>

            <button type="submit" class="btn btn-info "><a href="index.php">Guardar</a> </button>
            
        </form>
        <br>
        <hr>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>