<?php # echo $this->prueba ?>

<h2>Iniciar Sesi&oacuten</h2>

<form id="form1" class="well" method="post" action="">

	<input type="hidden" name="enviar" value="1">

	
		<label for="usuario">Usuario:</label>
		<input type="text" id="usuario" name="usuario" value="<?php if(isset($this->datos["usuario"])) echo $this->datos["usuario"] ?>"/>
	
		<label for="pass">Password:</label>
		<input type="password" name="pass" id="pass"/>

	

	<p><button type="submit" class="btn btn-info">Entrar</button></p>
</form>