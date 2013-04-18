<?php # echo $this->prueba ?>

<h2>Iniciar Sesi&oacuten</h2>

<form id="form1" class="well" method="post" action="<?php echo base_url(); ?>admin/usuarios/login">

	<input type="hidden" name="token" value="<?php echo $token; ?>">

	
		<label for="usuario">Usuario:</label>
		<input type="text" id="usuario" name="username" value=""/>
	
		<label for="pass">Password:</label>
		<input type="password" name="password" id="pass"/>

	

	<p><button type="submit" class="btn btn-info">Entrar</button></p>
</form>