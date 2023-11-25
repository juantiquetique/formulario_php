<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Formulario de registro</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Respuesta</h1>
        <?php
            $nombre = $_POST['nombre'];
            $edad = $_POST['edad'];
            $email = $_POST['email'];
            $departamento = $_POST['departamento'];
            $municipio = $_POST['municipio'];
            $genero = $_POST['genero'];
            $acepto = $_POST['acepto'];

            // :::::::::: Conexión :::::::::::::

            // -------------- Variables de conexión --------------

            include('conexion.php');

            //  |||||||||| Petición de inserción |||||||||||

            // Script de conexión

            $sql = "INSERT INTO usuario (nombre, edad, email, departamento, municipio, genero, acepto)
                    VALUES ('$nombre', '$edad', '$email','$departamento','$municipio','$genero','$acepto')";

            echo $sql . '<br><br>';

            // Enviar petición

            if(mysqli_query($conn, $sql))
            {
                echo "¡Se ha guardado el registro exitosamente!<br><br>";
            }
            else
            {
                echo "Error: $sql <br>" . mysqli_error($conn) . '<br><br>'; 
            }

            // Cerrar conexión

            mysqli_close($conn);
            

        ?>
        <a href="../index.php" class="btn btn-primary">Volver</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

