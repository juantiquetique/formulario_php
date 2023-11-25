<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <main class="container">
        <h1 class="text-center my-3">Formulario de registro</h1>
        <div class="card bg-light rounded shadow mb-3">
            <h5 class="card-header lead text-center">registro</h5>
            <div class="card-body">
                <form action="php/acciones.php" method="post" class="needs-validation" novalidate>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nombre" name = "nombre" placeholder="nombre" required> 
                    <label for="nombre">Nombre</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="edad" name = "edad" placeholder="edad">
                    <label for="edad">Edad</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" name = "email" placeholder="email">
                    <label for="email">E-mail</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="departamento" name = "departamento" placeholder="departamento">
                    <label for="departamento">Departamento</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="municipio" name = "municipio" placeholder="municipio">
                    <label for="municipio">Municipio</label>
                </div>
                <div class="form-floating mb-3">
                    <select name="genero" id="genero" class="form-select">
                        <option selected value="" disabled>Seleccione...</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
                    <label for="genero">Género</label>
                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="acepto" id="acepto" value=1 checked>
                        <label class="form-check-label" for="acepto">
                            Acepto
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="acepto" id="acepto" value=0>
                        <label class="form-check-label" for="acepto">
                            No Acepto
                        </label>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary">Registrame</button>
                <button type="reset" class="btn btn-info">Limpiar</button>

                </form>
            </div>
        </div>
        <hr>
        <div class="mb-3 card bg light rounded shadow">
            <div class="container">
                <h2 class="text-center my-3">Usuarios registrados</h2>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            // Conectarse a la DB
                            include('php/conexion.php');
                            $sql = "SELECT id,nombre FROM usuario";
                            $usuarios = $conn->query($sql);
                            if($usuarios)
                            {
                                foreach ($usuarios as $usuario) 
                                {
                                    echo "<tr>";
                                        echo "<td>" . $usuario ['id'] . "</td>";
                                        echo "<td>" . $usuario ['nombre'] . "</td>";
                                        echo "<td><a href= 'php/view.php?id=".$usuario['id']."' class ='btn btn-info'>Ver</a> 
                                        <a href= 'php/update.php?id=".$usuario['id']."' class ='btn btn-warning ms-3'>Editar</a><a href= 'php/update.php?id=".$usuario['id']."' class ='btn btn-danger mx-3'>Eliminar</a></td>";
                                    echo "</tr>";
                                }
                            }
                            mysqli_close($conn);
                        
                        
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
            }, false)
        })
        })()
    </script>




</body>
</html>