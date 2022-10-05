<?php
include_once 'index.php';
include_once 'db.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="col-md-8">
    <h1>Lista</h1>
        <table class="table table-hover"> 
            <thead>
        <tr class="table-dark">
          <th scope="col">id</th>
          <th scope="col">Nombre</th>
          <th scope="col">fecha_nacimiento</th>
          <th scope="col">P.A.P.A</th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
        </thead>
        <?php
        # Conexion y Captura de la Conexion 
            $connection=conexion();
            $sql="SELECT * FROM estudiantes";
            $query= mysqli_query ($connection,$sql);
            if ($query){
                $contador=1;
                while ($row=mysqli_fetch_assoc($query)){
                    $id=$row ['id']; 
                    $Nombre=$row['nombre']; 
                    $fecha_nacimiento=$row['fecha_nacimiento']; 
                    $P_A_P_A=$row['p_a_p_a'];

             
        ?>
        <tbody>
            <tr class="table-ligth">
                <td><?php echo $id?></td>
                <td><?php echo  $Nombre?> </td>
                <td><?php echo $fecha_nacimiento?> </td>
                <td><?php echo $P_A_P_A?> </td>
                <td><a href="delete.php?id=<?php echo $id;?>" class="btn btn-danger">Eliminar</a>
                    <a href="update.php?id=<?php echo $id;?>" class="btn btn-primary">Actualizar</a>
                </td>
                

            </tr>
            <?php $contador++;
            }
        }?>
        </tbody>
        </table>
    </div>
    
    
    
</body>
</html>

