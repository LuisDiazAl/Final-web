<?php
include_once "header.php";
?>

<h2 class="subtitulo">Muchas Gracias por tu Consulta/Registro!</h2>
<p>¡Tus datos fueron recibidos correctamente!</p>

<ul>
<?php
if(isset($_POST['nombre'])){
	$nombre=$_POST['nombre'];
	print "<li>Nombre: $nombre</li>";
	

}
if(isset($_POST['apellido'])){
	$apellido=$_POST['apellido'];
	print "<li>Apellido: $apellido</li>";
	

}
if(isset($_POST['email'])){
	$mail=$_POST['email'];
	print "<li>mail: $mail</li>";
	

}
if(isset($_POST['comentario'])){
	$texto=$_POST['comentario'];
	print "<li>Comentario: $texto</li>";
	

}

move_uploaded_file($_FILES['archivo']['tmp_name'],"imagenes/".$_FILES['archivo']['name']);



?>

</ul>

<?php
include_once "footer.php";
?>