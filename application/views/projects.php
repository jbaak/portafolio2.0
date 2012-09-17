
<section id="content">
	<p><h2>Mis trabajos</h2></p>
	<?php foreach($projects->result() as $pro)
	{
		?>
	<article class="webs">
		<img width="200" heigth="260" src="<?php echo base_url(); ?>images/works/<?php echo $pro->imagen; ?>" />
		<p><?php echo $pro->nombre ?></p>
	</article>
	<?php
	}	
	?>

</section>

