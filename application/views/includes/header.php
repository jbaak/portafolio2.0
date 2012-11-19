<!DOCTYPE html>
<html lang="es">
<head>
	<title><?php echo  $title; ?></title>
	<meta charset="utf-8">
	<meta name="description" content="Bienvenido a mi portafolio web | Jesus Baak Desarrollador Web de Merida, Yucatan , Mexico">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/responsive.css" >
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/funciones.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.fancybox.js?v=2.1.0"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/jquery.fancybox.css?v=2.1.0" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/jquery.fancybox-buttons.css?v=1.0.3" />
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.fancybox-buttons.js?v=1.0.3"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/jquery.fancybox-thumbs.css?v=1.0.6" />
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.fancybox-thumbs.js?v=1.0.6"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.fancybox-media.js?v=1.0.3"></script>

	<script>
		$(document).ready(function(){
			$("a[rel=trabajos]").fancybox({
				"transitionIn": "fade",
				"transitionOut": "elastic",
				"titlePosition": "over",
				"titleFormat": function(title, currentArray,currentIndex, currentOpts){
					return "<span id='fancybox-title-over'>	Trabajo"+(currentIndex+1)+" de "+ currentArray.length+(title.length?"&nbsp;"+title:"")+"</span>"
				}
			});
		});
	</script>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


	

</head>

<body>

		<header>
			<div class="wrap">
					
					<div class="pic"><img src="<?php echo base_url();?>images/jesus.jpg" alt="Jesus Baak Desarrollador Web de Merida, Yucatan , Mexico" /></div>

					<div id="der">	
						<nav>
								<ul>
									<li><a href="<?php echo base_url();?>">ACERCA</a></li>
									<li><a href="<?php echo base_url();?>services">SERVICIOS</a></li>
									<li><a href="<?php echo base_url();?>projects/">TRABAJOS</a></li>
									<li><a href="<?php echo base_url();?>contact">CONTACTO</a></li>
								</ul>
						</nav>
						
						<hgroup>
								<h1><strong>Jesus</strong> Baak</h1>
								<h2><strong>Desarrollador</strong> Web</h2>
								<h3>de  M&eacute;xico</h3>
						</hgroup>
					</div>

					
			</div>
		</header>