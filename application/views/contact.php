<script type="text/javascript">  
$(document).ready(function(){  
       setTimeout(function(){ $(".mensajes").fadeOut(800).fadeIn(800).fadeOut(500).fadeIn(500).fadeOut(300);}, 3000);   
});  
</script> 

<div class="wrap sombra">
<center>	
<section id="contact">
	<?php if(isset($mensaje)):?><div class="exito mensajes"><?php echo $mensaje;?></div><?php endif; ?>
	
	<div class="separador"></div>
	<div class="separador"></div>
				
<h2>Si llegaste hasta aqui, tal vez quieras saber mas :)  </h2>

<div class="separador"></div>
	<article id="info-contacto">
		<div class="tit">
					<div class="titulo"><img src="<?php echo BASE_URL()?>images/iconos/list2.png"></div>
					<div class="forma"></div>
					<h2>Mis datos</h2>
		</div>

		<p>Merida, Yucatan, M&eacute;xico.</p>
		
		<br/>
		<p>Email:
		<span class="datos-cotacto">jesusbaak@hotmail.com</span>
		</p>
		
		<br />
		<p>
		M&oacute;vil:
		<span class="datos-cotacto">(+52) 9991 983710</span>
		</p>
		
		<br />
		<p>
		Social Media:
		</p>
		<br />
		<p>
			 <a href="http://facebook.com/jesusbaak" class="fade" title="Facebook" target="_blank"><img src="<?php echo base_url(); ?>images/iconos/Face_c.png"/></a>
			 <a href="http://twitter.com/jbaak" class="fade" title="Twitter" target="_blank"><img src="<?php echo base_url(); ?>images/iconos/Twitter_c.png"/></a>
			 <a href="http://github.com/jbaak" class="fade" title="github" target="_blank"><img src="<?php echo base_url(); ?>images/iconos/Github_c.png"/></a>


		</p>
		
	</article>

	<article id="contactanos">
			<div class="tit">
					<div class="titulo"><img src="<?php echo BASE_URL()?>images/iconos/mail2.png"></div>
					<div class="forma"></div>
					<h2>Envia un e-mail</h2>
			</div>
			

			<?php echo form_open('contact/envio'); ?>

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
							//'type'=>'email',
							'required'=>'',
							'value' => set_value('email')
				);
				$asunto = array(
							'name' => 'asunto',
							'id' => 'asunto',
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
	
		
<div class="separador"></div>	
</section>

</center>
</div><!-- termina wrap-->

