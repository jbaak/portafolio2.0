
<section id="content">
	<p><h2>Cont&aacute;ctame</h2></p>

	<article id="info-contacto">
		Merida, Yucatan, M&eacute;xico.
		<br/>
		<br/>
		Email:
		<span class="datos-cotacto">jesusbaak@hotmail.com</span>
		<br />
		<br />
		M&oacute;vil:
		<span class="datos-cotacto">(+52) 9991 983710</span>
		<br />
		<br />
		Social Media:
		<br />
		<br />
		<p>
			 <a href="http://facebook.com/jesusbaak" class="fade" title="Facebook" target="_blank"><img src="<?php echo base_url(); ?>images/iconos/Face_c.png"/></a>
			 <a href="http://twitter.com/jbaak" class="fade" title="Twitter" target="_blank"><img src="<?php echo base_url(); ?>images/iconos/Twitter_c.png"/></a>
			 <a href="http://github.com/jbaak" class="fade" title="github" target="_blank"><img src="<?php echo base_url(); ?>images/iconos/Github_c.png"/></a>


		</p>
		
	</article>

	<article id="contactanos">
			<?php echo form_open('home/envio'); ?>

			<?php 
				$name = array(
							'name' => 'name',
							'id' => 'name',
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
							'rows'=>'4',
							'cols'=>'50',
							'id' => set_value('mensaje')
							
				);

				$boton =array(
							'type'=>'submit',
							'class'=> 'fade'
					);
				 ?>

				 <?php echo  form_fieldset('Para mas informacion envie un correo llenando los datos del formulario');?>
				 	
				 
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
						<?php echo form_submit($boton,'Enviar'); ?>
					</div>	
			
						

			<div>
			<?php echo  validation_errors(); ?>
			</div>

			<?php echo  form_fieldset_close();?>

			<?php echo form_close()?>
		</article>
	
		
	
</section>

