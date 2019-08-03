<?php
include('conexion.php');
$password=$_POST['password'];
$usuario=$_POST['usuario'];
$consulta="SELECT  `usuario`, `password` FROM `usuarios` WHERE `usuario`='$usuario' AND `password`= '$password'"; 
mysqli_set_charset($conexion,"utf8");
$result=mysqli_query($conexion,$consulta);

if(mysqli_num_rows($result)>0){
    session_start();
    $_SESSION['usuario']=$usuario;
    $resp='sesionIniciada'; //si hay un resultado de la consulta el variable $resp tendra el valor de sesionIniciada
}
else{
    $resp=mysqli_error ($conexion);
}
include('logout.php');
echo $resp;

?>