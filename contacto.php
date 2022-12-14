<?php
include_once "header.php"
?>
 <h2 class="subtitulo">Contactanos</h2>

<p>Aca te compartimos nuestro formulario para que puedas registrarte y seguir disfrutando no solo de nuestra información sino también descuentos y giveaways para poder disfrutar de nuestro servicio.</p>

<form action="res.php" method="post" enctype="multipart/form-data"  class="letraFormulario">
	<div>
		<p><label for="nombre">Nombre:</label></p>
		<input type="text" name="nombre" id="nombre" required />
	</div>
	<div>
		<p><label for="apellido">Apellido:</label></p>
		<input type="text" name="apellido" id="apellido"  required />
	</div>
	<div>
		<p><label for="email">Correo electronico:</label></p>
		<input type="email" name="email" id="email" required />
	</div>
	<div>
		<p><label for="archivo">Subir archivo:</label></p>
		<input accept="*" type="file" name="archivo" id="archivo" required/>
	</div>
	<div>
		<p><label for="com">Consulta:</label></p>
		<textarea id="com" name="comentario" rows="5" col="5"  placeholder="Consultas - Registro" required></textarea>
	</div>
	<div class="letraFormulario">
		<label  class="letraFormulario">
		<input type="checkbox" id="cb"/>
		Acepto terminos y condiciones
		</label>
		
	</div>
	<div>
		
		<input type="submit" id="sub" disabled="disabled"/>
		
	</div>
</form>

<script type="text/javascript">
var cb = document.getElementById('cb');
var sub = document.getElementById('sub');

cb.onclick = function(){
	if(cb.checked){
		sub.disabled = false;
		
	}else{
		sub.disabled = true;
		
	}
	
}

</script>

<?php 
include_once "footer.php"
?>