<?php
    #capturamos el id
    $id = $_GET['id'];

    #Coneccion DB
    include_once 'db.php';
    $connection = conexion();

    #Ejecutar promesa o consulta sql
    $sql = "DELETE FROM estudiantes WHERE id=$id";

    #Ejecutar la consulta
    $query = mysqli_query($connection, $sql);
    if($query){
        header('refresh:0;url=lista.php?eliminado');
    }

?>