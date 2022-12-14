<?php 
include_once "header.php";


if(mysqli_connect('localhost','root','','carrito')){
	//conexion a la base de datos con 4 parametros (servidor, usuarioServidor, contraseña usuario y nombre de la base de datos)
	print "<h1>Destinos Soñados</h1>";
	
	$con = mysqli_connect('localhost','root','','carrito');
	//guardo los datos de conexion
	$consulta = "SELECT idCategoria, categoria FROM categorias";
		//guardo la consulta que quiero hacerle a la base de datos
	if($resultado = mysqli_query($con, $consulta)){
		//guardo el resultado de la consulta de base de datos
		print "<ul>";
		while($fila = mysqli_fetch_array($resultado) ){
			//divide el resultado
			print "<li>";
				print "<a href=portada.php?categoria=$fila[idCategoria]> $fila[categoria] </a>";
			print "</li>";
			
			
		}
		
		
		print "</ul>";
		
	}else{
		print "<h1>Ups.. Algo no anda bien, Keep trying</h1>";
	}
	
	
}else{
	
	print "<h1>Ups.. Algo no anda bien, Keep trying</h1>";
}





include_once "footer.php";
?>

<input type="button" value="Admin" id="botonAdmin">
<script type="text/javascript">
	var Admin = document.getElementById ('botonAdmin');

	Admin.onclick = function(){
		window.location = "indexLogin.php";
	}

</script>