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
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $edad = $_POST['edad'];
            $email = $_POST['email'];
            $departamento = $_POST['departamento'];
            $municipio = $_POST['municipio'];
            $genero = $_POST['genero'];

            // :::::::::: Conexión :::::::::::::

            // -------------- Variables de conexión --------------

            include('conexion.php');

            //  |||||||||| Petición de inserción |||||||||||

            // Script de conexión

            $actualizar = "UPDATE usuario SET nombre = '$nombre', edad = '$edad', email = '$email', departamento = '$departamento', municipio = '$municipio', genero = '$genero' where id='$id'";
            echo $actualizar . '<br><br>';
            $resultad = mysqli_query($conn,$actualizar);

            // Enviar petición

            if(mysqli_query($conn, $actualizar))
            {
                echo "¡Se ha actualizado el registro exitosamente!<br><br>";
            }
            else
            {
                echo "Error: $actualizar <br>" . mysqli_error($conn) . '<br><br>'; 
            }

            // Cerrar conexión

            mysqli_close($conn);
            

        ?>
        <a href="../index.php" class="btn btn-primary">Volver</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

