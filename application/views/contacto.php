
<section id="content">
	<p><h2>Contactanos</h2></p>

	<article id="contactanos">
			<?php echo form_open('home/envio'); ?>

			<?php 
				$name = array(
							'name' => 'name',
							'id' => 'name',
							'class'=>'fade',
							'required'=>'',
							'value' => set_value('name')

				);
				$email = array(
							'name' => 'email',
							'id' => 'email',
							'type'=>'email',
							'required'=>'',
							'value' => set_value('email')
				);
				$asunto = array(
							'name' => 'asunto',
							'id' => 'username',
							'required'=>'',
							'value' => set_value('asunto')
				);
				$mensaje = array(
							'name' => 'mensaje',
							'id'=>'mensaje',
							'required'=>'',
							'rows'=>'6',
							'cols'=>'50',
							'id' => set_value('mensaje')
							
				);
				 ?>

				 <fielset>
				 	<legend>Para mas informacion envie un correo llenando los datos del formulario </legend>
				 </fieldset>
				 	<div>	
						 <?php echo form_label('Nombre: ') ?>
						 <?php echo form_input($name); ?>
					 </div>
					 <div>
						 <?php echo form_label('Email: ') ?>
						 <?php echo form_input($email); ?>
					 </div>
					 <div>
						 <?php echo form_label('Asunto: ') ?>	
						 <?php echo form_input($asunto); ?>
					 </div>
					<div>
						<?php echo form_label('Mensaje: ') ?>
						<?php echo form_textarea($mensaje); ?>
					</div>
					<div>	
						<?php echo form_submit('submit','Enviar'); ?>
					</div>	
			<?php echo form_close()?>
		</article>

		<div>
		<?php echo  validation_errors(); ?>
		</div>
	
		
	
</section>

