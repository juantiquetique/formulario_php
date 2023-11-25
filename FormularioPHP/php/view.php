<?php
// Obtener la variable que viene por la URL
    $id =  $_GET['id'];
    include('conexion.php');
    $sql = "SELECT * 
            FROM usuario
            WHERE id = $id";
    $resultado = mysqli_query($conn,$sql);
    $usuario = $resultado -> fetch_assoc();
    if($usuario)
    {
        echo "<h2>ID: </h2>". $usuario['id'].'<br>';
        echo "<h2>Nombre: </h2>". $usuario['nombre'].'<br>';
        echo "<h2>Edad: </h2>". $usuario['edad'].'<br>';
        echo "<h2>Mail: </h2>". $usuario['email'].'<br>';
        echo "<h2>Departamento: </h2>". $usuario['departamento'].'<br>';
        echo "<h2>Municipio: </h2>". $usuario['municipio'].'<br>';
        echo "<h2>Género: </h2>". $usuario['genero'].'<br>';
        echo "<h2>Acepta términos: </h2>". $usuario['acepto'].'<br>';
    }
    else
    {
        echo "Error";
    }

?>