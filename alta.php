<?php

$cnx = mysqli_connect('localhost','root','','usuarios');

$e = $_POST['email'];
$c = $_POST['clave'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];

$q =<<<ALGO
	INSERT INTO 
		usuarios 
	SET 
		NOMBRE='$nombre',
		APELLIDO='$apellido',
		EMAIL='$e', 
		CLAVE=MD5('$c'),
		NIVEL='usuario',
		FECHA_ALTA=NOW( )
ALGO;

mysqli_query($cnx, $q);
header("Location: index.php?alta=ok");



?>