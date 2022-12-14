<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TuViaje.Design</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<?php

if(mysqli_connect('localhost','root','','carrito')){
	//conexion a la base de datos con 4 parametros (servidor, usuarioServidor, contraseña usuario y nombre de la base de datos)
	print "<h1>Portada</h1>";
	
	
	if(isset($_GET['categoria'])){
		$codigo = $_GET['categoria'];
		
		$con = mysqli_connect('localhost','root','','carrito');
		//guardo los datos de conexion
		$consulta = "SELECT codigoProducto, nombreProducto, precioProducto, descripcionProducto, categoriaProducto FROM productos WHERE categoriaProducto=$codigo";
		//guardo la consulta que quiero hacerle a la base de datos
		
		if($resultado = mysqli_query($con, $consulta)){
			//guardo el resultado de la consulta de base de datos
				while($fila = mysqli_fetch_array($resultado) ){
					//divide el resultado
					print "<div>";
						print "<h2><a href=ficha.php?categoria=$fila[codigoProducto]>$fila[nombreProducto]</a></h2>";
						print "<p>Precio: $fila[precioProducto]</p>";
						print "<p>Descripcion: $fila[descripcionProducto]</p>";
					print "</div>";
				
			
		}
		
		
			
		
	}else{
		print "<h1>Algo se rompio</h1>";
	}
		
		
		
		
		
	}
	
	
	
}else{
	
	print "<h1>No ta funkando</h1>";
}





?>