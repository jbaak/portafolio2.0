
<section id="content">
	<p><h1>Contacto</h1></p>

	<div id="form_register">
			<?php echo form_open('home/envio'); ?>

			<?php 
				$name = array(
							'name' => 'name',
							'id' => 'name',
							'value' => set_value('name')
				);
				$email = array(
							'name' => 'email',
							'id' => 'email',
							'value' => set_value('email')
				);
				$tel = array(
							'name' => 'tel',
							'id' => 'username',
							'value' => set_value('tel')
				);
				$mensaje = array(
							'name' => 'mensaje',
							'id' => set_value('mensaje')
							
				);
				 ?>

				 <p><?php echo form_label('Nombre') ?>
				 <?php echo form_input($name); ?></p>
				 <p><?php echo form_label('Email') ?>
				<?php echo form_input($email); ?></p>
				 <p><?php echo form_label('Telefono') ?>	
				 <?php echo form_input($tel); ?></p>
				<p><?php echo form_label('Mensaje') ?>
				<?php echo form_password($mensaje); ?></p>

				<?php echo form_submit('submit','Enviar'); ?>

			<?php echo form_close()?>
		</div>

		<div>
		<?php echo  validation_errors(); ?>
		</div>
	
		
	
</section>

