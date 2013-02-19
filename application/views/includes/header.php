<!DOCTYPE html>
<html lang="es">
<head>
	<title><?php echo  $title; ?></title>
	<meta charset="utf-8">
	<meta name="author" content="L.C.C. Jesus J. Baak Baak"/>
	<meta name="description" content="Portafolio Web de Jesus Baak, Desarrollador Web de M&eacute;rida, Yucat&aacute;n , M&eacute;xico">
	<meta name="keywords" content="Desarrollador Web, Desarrollador PHP, Programador Web, Programador PHP, Programador, Desarrollador, Portafolio, Servicios, Web, Merida, Yucatan, Mexico, PHP, POO, MVC, ZANPHP, CodeIgniter, Joomla, Wordpress, Javascript, Ajax, JQuery, HTML5, CSS3, Sql, MySql, Api, Framework, Bootstrap de Twitter, Api de Facebook, Responsive Design, Api Google Maps"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front/css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/front/css/style.css" >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/front/css/responsive.css" >
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/jquery.spritely-0.6.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/funciones.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/jquery.fancybox.js?v=2.1.0"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/front/css/jquery.fancybox.css?v=2.1.0" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/front/css/jquery.fancybox-buttons.css?v=1.0.3" />
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/jquery.fancybox-buttons.js?v=1.0.3"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/front/css/jquery.fancybox-thumbs.css?v=1.0.6" />
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/jquery.fancybox-thumbs.js?v=1.0.6"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/jquery.fancybox-media.js?v=1.0.3"></script>

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

	<script type="text/javascript">
		$(window).load(function(){
			$(".flexslider").flexslider();
		});
	</script>

	<script type="text/javascript">
		(function($) {
			$(document).ready(function() {
			
				$('#city1').pan({fps: 30, speed: 1, dir: 'right'}); 
				
				$('#city2').pan({fps: 30, speed: 2, dir: 'right'}); 
				
				$('#nubes').pan({fps: 30, speed: 0.5, dir: 'right'}); 
				
				var stage_left = (($('body').width() - 866) / 2);
				var stage_top = 30;
				//alert(stage_left);
				
				$('#plane1').sprite({fps: 8, no_of_frames: 14})
					.spRandom({
						top: 40,
						left: stage_left + 20,
						right: 400,
						bottom: 140,
						speed: 3500,
						pause: 1000
					});
				
			
			});
		})(jQuery);
	</script>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


	

</head>

<body>

		<header>
			<div id="sigueme">
					<div class="wrap">
						 <a class="fade" href="http://facebook.com/jesusbaak"  title="Facebook" target="_blank"><img src="<?php echo base_url(); ?>images/iconos/face.png"/></a>
						 <a class="fade" href="http://twitter.com/jbaak"  title="Twitter" target="_blank"><img src="<?php echo base_url(); ?>images/iconos/twitter_bird.png"/></a>
						 <!-- <a class="fade" href="http://twitter.com/jbaak"  title="Google +" target="_blank"><img src="<?php echo base_url(); ?>images/iconos/g+.png"/></a>-->
						 <a class="fade" href="http://github.com/jbaak"  title="Github" target="_blank"><img src="<?php echo base_url(); ?>images/iconos/github.png"/></a>
					</div>

				
			</div>
			<div class="wrap">
					
					<!--<div  class="pic"><img src="<?php echo base_url();?>images/logo.png" alt="Jesus Baak Desarrollador Web de Merida, Yucatan , Mexico" /></div>-->
					<!--<div id="logo"><a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>images/logo.png" alt="Jesus Baak Desarrollador Web de Merida, Yucatan , Mexico" /></a></div>-->
						<div id="logo">
							<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>images/logojb.png"></a>
						</div>
						<div id="der">	
						<nav>
								<ul>
									<li><a href="<?php echo base_url();?>">Home</a></li>
									<li><a href="<?php echo base_url();?>services">SERVICIOS</a></li>
									<li><a href="<?php echo base_url();?>projects/">TRABAJOS</a></li>
									<li><a href="<?php echo base_url();?>contact">CONTACTO</a></li>
								</ul>
						</nav>
						
						<!--
						<hgroup>
								<h1><strong>Jesus</strong> Baak</h1>
								<h2><strong>Desarrollador</strong> Web</h2>
								<h3>de  M&eacute;xico</h3>
						</hgroup>-->
					</div>

					
		</div>
		</header>