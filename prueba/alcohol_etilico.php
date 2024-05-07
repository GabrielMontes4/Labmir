<?php
include('dos.php');
include('tres.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Laboratorios Miranda C.A</title>
<!-- Stylesheets -->
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
<link href="../css/responsive.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

<!-- Color Switcher Mockup -->
<link href="../css/color-switcher-design.css" rel="stylesheet">

<!-- Color Themes -->
<link id="theme-color-file" href="../css/color-themes/default-color.css" rel="stylesheet">

<link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
<link rel="icon" href="../images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>
 
<div class="page-wrapper">
	
    <!-- Preloader -->
    <div class="preloader"></div>
	<!-- End Preloader -->
 	
  	<!-- Main Header -->
      <header class="main-header header-style-two">
    	
			<!-- Header Top -->
			<div class="mg-head-detail hidden-xs" style="background-color: #244e82;">
				<div class="container-fluid">
					<div>
						<div col-md-12="" col-xs-12="">
							<div class="container-fluid" id="cinti">
								<img src="../images/cintillotop.jpg" width="1600" alt="cintillo">
							</div>
						</div>
	
					</div>
				</div>
			</div>

        <!-- Header Lower -->
        <div class="header-lower">
            
			<div class="auto-container">
				<div class="inner-container d-flex justify-content-between align-items-center">
					
					<!-- Logo Box -->
					<div class="logo-box d-flex">
						<div class="logo"><a href="index.html"><img src="../images/lab_mir/logo1.png" alt="" title=""></a></div>
					</div>
					
					<div class="nav-outer d-flex align-items-center">
						
						<!-- Main Menu -->
						<nav class="main-menu show navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							
							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
                                    <li><a href="index.html">Inicio</a></li>
                                    <li class="dropdown"><a href="#">Nosotros</a>
										<ul>
											<li><a href="mision_vision.html">Misión <span style="text-transform:lowercase;">y</span> Visión</a></li>
											<li><a href="Historia.html">Historia</a></li>
											<li><a href="organigrama.html">Organigrama</a></li>
											<li><a href="planta.html">Planta Produción</a></li>
										
										</ul>
									</li>
                                    <li><a href="productos.php">Productos</a></li>
									<li><a href="atencionalciudadano.html">Atención <span style="text-transform:lowercase;">al</span> ciudadano</a></li>
									
									<li>
										<a href="#map-one" >
											<img src="../images/icons/usuario-de-perfil.png" alt="" id="imgcontacto">
											¡Contáctanos!
										</a>
									</li>
								</ul>
							</div>
							
						</nav>
						<!-- Main Menu End-->
						
					</div>
					
					<!-- Outer Box -->
					<div class="outer-box d-flex align-items-center">
						
						<!-- Phone Box -->
						<!--<a href="#map-one">
							<div class="header-phone">
								<div class="header-phone_inner">
									<span class="header-phone_icon flaticon-telephone"></span>
									<h6>¡Contáctanos!</h6>
								
								</div>
							</div>
							</a>-->
						
						<!-- Mobile Navigation Toggler -->
						<div class="mobile-nav-toggler"><span class="icon"><img src="../images/icons/menu.png" alt="" /></span></div>
						
					</div>
					<!-- End Outer Box -->
					
				</div>
				
			</div>
        </div>
        <!-- End Header Lower -->
        
		<!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container">
				<div class="d-flex justify-content-between align-items-center">
					<!-- Logo -->
					<div class="logo">
						<a href="index.html" title=""><img src="../images/lab_mir/logo1.png" width="120"  alt="" title=""></a>
					</div>
					
					<!-- Right Col -->
					<div class="right-box">
						<!-- Main Menu -->
						<nav class="main-menu">
							<!--Keep This Empty / Menu will come through Javascript-->
						</nav>
						<!-- Main Menu End-->
						
						<!-- Mobile Navigation Toggler -->
						<div class="mobile-nav-toggler"><span class="icon"><img src="../images/icons/menu.png" alt="" /></span></div>
						
					</div>
					
				</div>
            </div>
        </div>
		<!-- End Sticky Menu -->
    
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="../images/lab_mir/logo1.png" alt="" title=""></a></div>
				<!-- Search -->
				<div class="search-box">
					<form method="post" action="contact.html">
						<div class="form-group">
							<input type="search" name="search-field" value="" placeholder="SEARCH HERE" required>
							<button type="submit"><span class="icon flaticon-search"></span></button>
						</div>
					</form>
				</div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div>
		<!-- End Mobile Menu -->
	
    </header>
    <!-- End Main Header -->
	
	<!-- Page Title -->
    <section class="page-title" style="background-image:url(../images/lab_mir/banner.jpg)">
        <div class="auto-container">
			<h1>PRODUCTOS</h1>
			
        </div>
    </section>
    <!-- End Page Title -->
	
	<!-- About One -->
	<section class="about-one style-two">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Image Column -->

				<!-- Image Column -->
				<div class="about-one_content-column col-lg-6 col-md-12 col-sm-12">
					<div class="about-one_content-inner">
					
                        <!--<h1 class="texto_titulo_seccion">Alcohol Etilico al 70%</h1>-->
						<?php 
						echo "<h1 class='texto_titulo_seccion'>".$fila['titulo']."</h1>";
						
						?>

                        <div class="sec-title_separator"></div>
                        <div class="sec-title_text"> 

							<!--Presentaciones:  1 GALÓN  -   1L   -   500ML
							<br>
							<b>COMPOSICIÓN:</b>
							<ul>
								<li> Alcohol Etílico 70% v/v</li>
								<li> Excipiente cs</li>

							</ul>
							<br>
							<b>INDICACIONES DE USO:</b>
							<br>Antiseptico de uso externo.
							<br><br>
							<b>PRECAUCIONES DE USO:</b>

							<ul>
								<li>• Manténgase fuera del alcance de los niños. Consérvese en un lugar fresco y seco a temperatura inferior a 25°C.
								</li>
								<li>• Evitar el contacto con los ojos y mucosas, de suceder enjuagarse con bastante agua fresca.
								</li>
								<li>• No usar con personas de piel sensible, alérgicas, ni en áreas extensas de la piel. No ingerir.
								</li>
								
							</ul>

							<b>Elaborado y Distribuido por:</b>
							<br>
							LABORATORIOS MIRANDA, C.A. (LABMIRCA). Zona industrial Maturín, Manzana 6, Parcela 8 a 10, Sector Los Naranjos, Guarenas, Edo. Miranda.
							República Bolivariana de Venezuela. R.I.F: G-20010477-5. Telf: (0212)361-7563
							Registrado en el Ministerio del Poder Popular para la Salud bajo el No. PMP.47.238
							Conglomerado Productivo del Sector salud.-->
							
							<?php
							echo $fila['descripcion'];
							?>
							
						</div>
					
					
					</div>
				</div>


				<div class="about-one_image-column col-lg-6 col-md-12 col-sm-12">
					<div class="about-one_image-inner">
				
						<div class="parallax-scene-4">
							<div class="about-one_image-two" data-depth="0.20">
								<?php 
									echo "<img id='img' src='../images/lab_mir/productos/".$fila['imagen']."'>"
								?>
							</div>
						</div>
						
					</div>
				</div>



				
			</div>
		</div>
	</section>
	<!-- End About One -->


<!--Carrusel de productos-->	
<section class="gallery-one">
	<div class="outer-container">
		<div class="gallery-carousel owl-carousel owl-theme">

				<!-- Gallery One Block -->
				<div class="gallery-one_block">
					<div class="gallery-one_block-inner">
						<div class="gallery-one_block-image">
							<a href="alcohol etilico.html">
							<!--<img src="../images/lab_mir/productos/etilico.png" style="height: 380px; width: 348px;" alt="" />-->
							<?php 
								echo "<img id='img' style='width: 450px;' src='../images/lab_mir/productos/".$fila['imagen']."'>"
							?>
							<div class="gallery-one_block-overlay">
								<div class="gallery-one_block-overlay-content">
									<div class="gallery-one_block-category">Laboratorio Miranda</div>
									<h4 class="gallery-one_block-heading" id="letras_img">ALCOHOL ETÍLICO AL 70%</h4>
								</div>
							</div>
							</a>
						</div>
					</div>
				</div>

				<!-- Gallery One Block -->
				<div class="gallery-one_block">
					<div class="gallery-one_block-inner">
						<div class="gallery-one_block-image">
							<a href="alcohol isopropilico.html">
							<img src="../images/lab_mir/productos/isopropilico.png" style="width: 450px;" alt="" />
							<div class="gallery-one_block-overlay">
								<div class="gallery-one_block-overlay-content">
									<div class="gallery-one_block-category">Laboratorio Miranda</div>
									<h4 class="gallery-one_block-heading" id="letras_img">ALCOHOL ISOPROPILICO AL 70%</h4>
								</div>
							</div>
						</a>
						</div>
					</div>
				</div>

				<!-- Gallery One Block -->
				<div class="gallery-one_block">
					<div class="gallery-one_block-inner">
						<div class="gallery-one_block-image">
							<a href="concentrado.html">
							<img src="../images/lab_mir/productos/concentrados.png" style="width: 450px;" alt="" />
							<div class="gallery-one_block-overlay">
								<div class="gallery-one_block-overlay-content">
									<div class="gallery-one_block-category">Laboratorio Miranda</div>
									<h4 class="gallery-one_block-heading" id="letras_img">CONCENTRADOS</h4>
								</div>
							</div>
							</a>
						</div>
					</div>
				</div>

				<!-- Gallery One Block -->
				<div class="gallery-one_block">
					<div class="gallery-one_block-inner">
						<div class="gallery-one_block-image">
							<a href="solucion45.html">
							<img src="../images/lab_mir/productos/solucion45.jpg" style="width: 450px;" alt="" />
							<div class="gallery-one_block-overlay">
								<div class="gallery-one_block-overlay-content">
									<div class="gallery-one_block-category">Laboratorio Miranda</div>
									<h4 class="gallery-one_block-heading" id="letras_img">CLORURO DE SODIO AL 0,45%</h4>
								</div>
							</div>
							</a>
						</div>
					</div>
				</div>

				<!-- Gallery One Block -->
				<div class="gallery-one_block">
					<div class="gallery-one_block-inner">
						<div class="gallery-one_block-image">
							<a href="solucion45.html">
							<img src="../images/lab_mir/productos/solucion90.jpg" style="width: 450px;" alt="" />
							<div class="gallery-one_block-overlay">
								<div class="gallery-one_block-overlay-content">
									<div class="gallery-one_block-category">Laboratorio Miranda</div>
									<h4 class="gallery-one_block-heading" id="letras_img">CLORURO DE SODIO AL 0,90%</h4>
								</div>
							</div>
							</a>
						</div>
					</div>
				</div>

		
			
		</div>
	</div>
</section>
<!-- FIN CARRUSEL DE PRODUCTOS -->

<article class="post" >
	
	<img src="../images/main-slider/slider2.jpg" id="imgproductospost"/>

</article>

	<br>
	<br>
	


	
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="sec-title_title"><h4>CONGLOMERADO DE</h4></div>
				<h2 class="sec-title_heading">EMPRESAS PRODUCTORAS DEL MPPS</h2>
				<div class="sec-title_separator"></div>
			</div>
		</div>

    <!-- Sponsors Section / Style Two -->
    <section class="sponsors-one style-two">
        <div class="auto-container">
			<div class="sponsors-outer">
				<!-- Sponsors Carousel -->
				<ul class="sponsors-carousel owl-carousel owl-theme">
					<li class="slide-item"><figure class="image-box"><a target="_blank"  href="https://espromedbio.gob.ve/">        <img src="../images/lab_mir/empresas/1.png" style="width: 120px; height: 120px;" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a target="_blank"  href="http://mpps.gob.ve/">                <img src="../images/lab_mir/empresas/2.png" style="width: 120px; height: 120px;" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a target="_blank"  href="https://twitter.com/profarmacosmpps"><img src="../images/lab_mir/empresas/3.png" style="width: 120px; height: 120px;" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a                  href="index.html">                         <img src="../images/lab_mir/empresas/4.png" style="width: 120px; height: 120px;" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a target="_blank"  href="http://www.quimbiotec.gob.ve/">      <img src="../images/lab_mir/empresas/5.png" style="width: 120px; height: 120px;" alt=""></a></figure></li>
			
				
				</ul>
			</div>
        </div>
    </section>
    <!-- End Sponsors Section / Style Two -->




	<!-- Map One -->
	<section class="map-one">
		<a name="map-one"></a>
		<div class="map-one_content d-flex justify-content-end">
			<div class="map-one_content-box">
				<ul class="map-one_info">
					<li>
						<a target="_blank" href="https://maps.app.goo.gl/rk1Kzp1T7mUnoLH8A">
							 <span class="icon flaticon-map"> </span>
							 <h5 style="text-align: center;"><b>Los Naranjos, Guarenas, Edo. Miranda</b></h5>
							 </a>
							 <p style="text-align: center;"> Zona Industrial, Av. Maturín, Manzana 6, Parcela 8,9 y 10.
							</p>
							</li>
					
					
					<li>
						<a target="_blank">
							<span class="icon flaticon-email-1"></span>
								
						</a>

									<a class="header-top_email" href="mailto:laboratoriosmiranda.ca@gmail.com" >
										<h5 style="text-align: center;" class="correos"><b>Laboratoriosmiranda.ca@gmail.com</b></h5> 
									</a> 
									<p style="text-align: center;">Correo institucional</p> 
									
									

									<a class="header-top_email" href="mailto:labmirandacomercializacion@gmail.com">
										<h5 style="text-align: center;" class="correos"> <b>Labmirandacomercializacion@gmail.com</b></h5> 
									</a>
									<p style="text-align: center;">Comercialización</p>
									 
									<a class="header-top_email" href="mailto:reclutamientolabmiranda@gmail.com" >
										<h5 style="text-align: center;" class="correos"><b>Reclutamientolabmiranda@gmail.com</b></h5> 
									</a> 
									<p style="text-align: center;">Reclutamiento Talento humano</p>
									 

					</li>
					<!-- numeros de contacto
							<li>
								
								<span class="icon flaticon-telephone"></span>
								<a href="tel:+584126229419"><strong >0412-6229419</strong></a>
								<a href="tel:+584126836767"><strong >0412-6836767</strong></a>
								<a href="tel:+584126120752"><strong >0412-6120752 <p><b>(Whatsapp)</b></p></strong> 
								</a>
							
								Números de Contacto
			
							</li>
					numeron de contacto -->

				</ul>
			</div>
		</div>
        <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=10.473542751925564,%20-66.5999232136717+(Laboratorio%20Miranda)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/population/">Calculate population in area</a></iframe></div>	</section>
	<!-- End Map One -->




    	<!-- CTA One -->
	<section class="cta-one style-two">
		<div class="auto-container">
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<!-- CTA Logo -->
				<div class="cta-logo">
					<img src="../images/lab_mir/logo1.png" style="width: 100px;" alt="" />
				</div>
				<!-- Redes sociales -->
				<div >
					<h3 style="color:white">
						<a target="_blank"  href="https://www.instagram.com/LabmirandaCA">                   <img src="../images/lab_mir/instagram-icon.png" style="width: 60px;" alt=""></a>
						<a target="_blank"  href="https://www.facebook.com/LabmirandaCA">  <img src="../images/lab_mir/facebook-icon.png" style="width: 60px;" alt=""></a>
						<a target="_blank"  href="https://www.twitter.com/LabmirandaCA">  <img src="../images/lab_mir/x-icon.png" style="width: 60px;" alt=""></a>
						@LabmirandaCA
						</h3>
						
				</div>
			</div>
		</div>
	</section>
	<!-- End CTA One -->

	<!-- Main Footer -->
    <footer class="main-footer">
		<div class="auto-container">
        	<!--Widgets Section-->
         
		</div>
		<div class="footer-copyright">
			<div class="auto-container">
				<div class="copyright"><a href="index.html">Laboratorios Miranda C.A</a> &copy; Copyright-2023 All Rights Reserved.</div>
			</div>
		</div>
	</footer>
	<!-- End Main Footer -->









</div>
<!-- End PageWrapper -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fas fa-arrow-up fa-fw"></span></div>

<script src="../js/jquery.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/magnific-popup.min.js"></script>
<script src="../js/appear.js"></script>
<script src="../js/parallax.min.js"></script>
<script src="../js/tilt.jquery.min.js"></script>
<script src="../js/owl.js"></script>
<script src="../js/wow.js"></script>
<script src="../js/parallax-scroll.js"></script>

<script src="../js/odometer.js"></script>
<script src="../js/nav-tool.js"></script>
<script src="../js/jquery-ui.js"></script>
<script src="../js/color-settings.js"></script>
<script src="../js/script.js"></script>

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="../js/respond.js"></script><![endif]-->

</body>
</html>