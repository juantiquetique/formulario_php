<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

    <title>Update</title>
</head>
<body>
    <?php
        $id =  $_GET['id'];
        include('conexion.php');
        $sql = "SELECT * 
                FROM usuario
                WHERE id = $id";
        $resultado = mysqli_query($conn,$sql);
        $usuario = $resultado -> fetch_assoc();
    ?>
    <main class="container">
        
        <div class="card bg-light rounded shadow mb-3">
            <h5 class="card-header lead text-center">registro</h5>
                <div class="card-body">
                    <form action="edit.php" method="post" class="needs-validation" novalidate>
                        <div class="form-floating mb-3">
                        
                            <input type="hidden" class="form-control" id="id" name = "id" value = <?= $usuario['id'];?>> 
                            <input type="text" class="form-control" id="nombre" name = "nombre" value = <?= $usuario['nombre'];?>> 
                            <label for="nombre">Nombre</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="edad" name = "edad" value = <?= $usuario['edad'];?>>
                            <label for="edad">Edad</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name = "email" value = <?= $usuario['email'];?>>
                            <label for="email">E-mail</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="departamento" name = "departamento" value = <?= $usuario['departamento'];?>>
                            <label for="departamento">Departamento</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="municipio" name = "municipio" value = <?= $usuario['municipio'];?>>
                            <label for="municipio">Municipio</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select name="genero" id="genero" class="form-select" >
                                <option  selected value = <?= $usuario['genero'];?> disabled>Seleccione...</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                            <label for="genero">Género</label>
                        </div>
                            
                    </form>
                </div>
        </div>
    </main>



    
</body>
</html>