<?php
//credenciales de inicio de sesion en la base de datos
$serv="localhost";
$bd="sesion";
$usuario="root";
$contra="";

//conexion a BD
$conexion=new mysqli($serv,$usuario,$contra,$bd);

//verifica si hubo error en la conexion
if ($conexion->connect_errno){
    //mensaje de error
    echo "Error: ".mysqli_connect_error();
    exit();
}
?>