<!DOCTYPE HTML>
	<html lang="es">
		<head>
			<meta charset="UTF-8">
			<title>bak-end</title>
			<meta name="viewport" content="width-device-width, initial-scale=1.0">
			<link rel="stylesheet" href="<?php echo $_layoutParams['ruta_css']; ?>bootstrap.css">
			<link rel="stylesheet" href="<?php echo $_layoutParams['ruta_css']; ?>bootstrap-responsive.css">
			<link rel="stylesheet" href="<?php echo $_layoutParams['ruta_css']; ?>style.css">
			
		</head>

		<body>
					
			<div class="navbar navbar-fixed-top">
		    	<div class="navbar-inner">
				    
				    <div class="container-fluid arriba">  
				    	<div class="row-fluid">
				    	 <a class="brand" href="<?php echo BASE_URL; ?>">Back-end</a>
				    	 
					    <ul class="nav pull-right">
							 <li class="dropdown">
							    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
							          <?php 
							          if(session::get('autenticado')){
							          echo "Bienvenid@ ".Session::get('usuario');
							          }
							          else{
							          	?>
							          		User
							          	<?php
							          }
							          ?>
							          <b class="caret"></b>
							    </a>
							    <ul class="dropdown-menu">
							    	<?php 
							          if(session::get('autenticado')){
							         ?>
							         		<li><a href=""><i class="icon-user"></i> Mi perfil</a></li>
							    	<li><a href="<?php echo BASE_URL."login/cerrar/" ?>"><i class="icon-off"></i> Salir</a></li>
							         <?php
							          }
							          else{
							          	?>
							          		<li><a href="<?php echo BASE_URL."registro"; ?>"><i class="icon-user"></i>Registrarse</a></li>
							    	<li><a href="<?php echo BASE_URL."login"; ?>"><i class="icon-off"></i>Iniciar sesion</a></li>
							          	<?php
							          }
							          ?>
							    	
									
									
							    </ul>
						 	 </li>
						</ul>
					</div><!--  termina row-fluid-->

				    </div><!--  termina container-->
  				</div>

		    </div>  <!--  termina Navbar-fixed-top-->
		    
		    <header>
		    <div class="container-fluid">
		    		<div class="row-fluid">
		    			<div class="span10 offset1">	
					    	<div class="logo">
								<a class="brand" href="<?php echo BASE_URL; ?>"><img  src="<?php echo $_layoutParams['ruta_img']; ?>logo2.png" alt="MiLogo" /></a>
							</div>

							<nav>
					    		<ul>
								  <?php if(isset($_layoutParams['menu'])): ?>
                            <?php for($i = 0; $i < count($_layoutParams['menu']); $i++): ?>
                            <?php 

                            if($item && $_layoutParams['menu'][$i]['id'] == $item ){ 
                            $_item_style = 'active-jb'; 
                            } else {
                            $_item_style = '';
                            }

                            ?>

                            <li><a class="<?php echo $_item_style; ?>" href="<?php echo $_layoutParams['menu'][$i]['enlace']; ?>"><?php  echo $_layoutParams['menu'][$i]['titulo']; ?></a></li>

                            <?php endfor; ?>
                            <?php endif; ?>
								</ul>


							</nav>

						</div>	
		    		</div>
		    </div>
		    <div class="barra"></div>

		    </header>

		    <div class="container-fluid">
		    	<div class="row-fluid">
		    		<div class="span10  offset1 bordes_redondeados">
		    			<div class="row-fluid">
		    				<div class="span8">
					    			<section id="contenido" class="bordes_redondeados">

					    				 <?php if(isset($this->_error)): ?>
					                        <div id="error" class="alert alert-error">
					                        	 <a class="close" data-dismiss="alert">×</a>
					                        	<?php  echo $this->_error; ?>
					                        </div>
					                        <?php endif;?>

					                         <?php if(isset($this->_mensaje)): ?>
					                        <div id="mensaje" class="alert alert-info">
					                        	 <a class="close" data-dismiss="alert">×</a>
					                       		 <?php  echo $this->_mensaje; ?>
					                        </div>
					                        <?php endif;?>