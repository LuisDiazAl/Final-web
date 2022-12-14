<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TuViaje.Design</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<?php
session_start( );
?>

<style>
form{ float: left; width: 45%;}
</style>
<h1>Login para Administradores</h1>
<?php

if( isset($_GET['alta'])){
	echo 'Salio todo ok, podes loguearte';
}
if( isset($_GET['login'])){
	echo '<strong style="color: red">Mal tu usuario o tu clave</strong>';
}

?>
<form method="post" action="login.php">
	<h2>Ingrese datos</h2>
	<div><input type="email" placeholder="Dame tu email" name="email" /></div>
	<div><input type="password" placeholder="Dame tu clave" name="clave" /></div>
	<div><input type="submit" value="Entrar!" /></div>	
</form>
