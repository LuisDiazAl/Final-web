<html>
<head>
	<title>Formularios GET y POST</title>
</head>
<body>
<h1>Respuesta</h1>
<ol>
	<?php

	var_dump($_POST);

	if(isset($_GET['nombre'])){
		$nombre=$_GET['nombre'];
		echo "<li>Nombre: $nombre</li>";
		
	}
	if(isset($_GET['apellido'])){
		$apellido=$_GET['apellido'];
		echo "<li>Apellido: $apellido</li>";
		
	}
	if(isset($_GET['mail'])){
		$mail=$_GET['mail'];
		echo "<li>Correo: $mail</li>";
		
	}
	if(isset($_GET['col'])){
		$col=$_GET['col'];
		echo "<li>Consulta: $col</li>";
		
	}


	?>
</ol>
</body>
</html>
</html>