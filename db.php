<?php
function conexion(){
    $connection = mysqli_connect('localhost','root','', 'db_unal_php', '3306');
    if($connection){
        return $connection;
    }else return 'error en la conexion';
}
 
?>