<?php

insertar ($conexion);


$conexion = mysql_connect('localhost', 'root', 'Exhr2004', usuarios)or die(mysql_error($mysqli))
fuction insertar ($conexion){
    email = $_POST['email'];
    password = $_POST['password'];
    
    $consulta = 'insert imto usuarios  (email password)
    values ('$email', '$password')';
    mysqli_query($conexion, $consulta); 
    mysqli_close($conexion);
}
?>