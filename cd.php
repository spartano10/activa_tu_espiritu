<?php
$conexion = mysqli_connect("localhost","root","","youcompany");
if(!$conexion){
	$echo "error al conectar a la base de datos";
}else{
	$echo "conetado a la base de datos";
}
>