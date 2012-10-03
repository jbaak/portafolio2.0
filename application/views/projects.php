
<section id="content">
	<section id="trabajos">
		<p><h2>Mis trabajos</h2></p>
		<?php foreach($projects->result() as $pro)
		{
			?>
		<article class="webs">
			<a rel="trabajos" title="<?php echo $pro->nombre ?>" href="<?php echo base_url(); ?>images/works/<?php echo $pro->imagen; ?>"><img width="200" heigth="260" src="<?php echo base_url(); ?>images/works/<?php echo $pro->img_small; ?>" /></a>
			<p><a href="<?php echo $pro->url ?>" target="_blank"><?php echo $pro->nombre ?></a></p>
		</article>
		<?php
		}	
		?>
	</section>
	<div id="paginacion" ><?php echo $paginacion; ?></div>
</section>

