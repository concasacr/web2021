<!DOCTYPE HTML>
<?php 
	include $_SERVER['DOCUMENT_ROOT'].'/conf.php'; 
	
	include $_SERVER['DOCUMENT_ROOT'].'/Mobile_Detect.php';
	
	$detect = new Mobile_Detect;
	 
	if( $detect->isMobile() && !$detect->isTablet() ){
		echo '<script>window.location.href = "//www.concasa.com/contactenos";</script>';
	}	
?>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Contáctenos | CONCASA</title>
		<meta name="author" content="CONCASA desarrolladora inmobiliaria." />
		<meta name="description" content="Venta de apartamentos y casas, San Rafael Alajuela, Curridabat, Jáco - Costa Rica."/>
		<meta property="og:description" content="Contáctenos, Condominios en macro condominio concasa, unidades disponibles que van desde los $<?=number_format(getPrecioProperty('Bosque','1'), 0, '.', ',');?> USD*" />
		<meta name="keywords"  content="Condominio, Apartamento, Condominios, Proyectos en torre, Amenidades, San Rafael, Alajuela, Curridabat, Jáco" />
		<style>.portfolio-overlay a{position: absolute; top: 42% !important; left: 25% !important; background-color: transparent !important; width: 200px !important; height: 50px !important; margin: 0 auto !important; font-size: 18px; line-height: 24px !important; text-align: center; color: #fff !important; border-radius: unset !important; -webkit-backface-visibility: hidden;}</style>
		 
<?php 
	include './header_section.php'; 
	include './nav-top-int.php'; 
?>

	


<section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-color: #0cb78f; background-image: url('//cdn.concasa.com/concasa.com/images/n-images/contacto.jpg'); background-size: contain; background-position: center center;" data-bottom-top="background-position:0px 850px;" data-top-bottom="background-position:0px -500px;">
	<!--<div id="homepageint"></div>-->
	<div class="container clearfix">
		<h1>Contáctenos</h1>
		<span>Será un gusto conversar</span>
	</div>

</section><!-- #page-title end -->

<!-- Google Map
============================================= -->
<section id="googlemap" class="gmap slider-parallax">
	<iframe width="100%" height="450px;" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.726095613583!2d-84.22944858465324!3d9.956731892880848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0f9276632e8d3%3A0x7de9161fd926e03d!2sCONCASA!5e0!3m2!1ses!2scr!4v1533655308310" allowfullscreen></iframe>
</section>



<!-- Content
		============================================= -->
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

			<!-- Postcontent
			============================================= -->
			<div class="postcontent nobottommargin">

				<h3>ENVIANOS UN EMAIL</h3>

				<div class="form-widget">

					<div class="form-result"></div>

					<!--[if lte IE 8]><script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script><![endif]-->
					<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
					<script>
					hbspt.forms.create({
					region: "na1",
					portalId: "8253184",
					formId: "e8c5cf97-3d5e-4d04-a803-74f037edccb5"
					});
					</script>
				</div>

			</div><!-- .postcontent end -->

			<!-- Sidebar
			============================================= -->
			<div class="sidebar col_last nobottommargin">

				<address>
					<strong>Dirección:</strong><br><br>
					Condominio Campo Real, Antiguo Hipódromo del Sol, San Rafael de Alajuela, sobre Autopista Ruta 27, 7km Oeste de Forum 1, Provincia de Alajuela<br>
				</address><br><br>
				<abbr title="Phone Number"><strong>Teléfono:</strong></abbr> (+506) 2438 9075<br>
				<abbr title="Fax"><strong>WhatsApp:</strong></abbr> (+506) 8848 2272<br>
				<abbr title="Email Address"><strong>Email:</strong></abbr> info@concasa.com


				<div class="widget noborder notoppadding">

					<a href="https://www.facebook.com/concasa/" class="social-icon si-small si-dark si-facebook">
						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>

					<a href="https://www.instagram.com/concasa_cr/" class="social-icon si-small si-dark si-instagram">
						<i class="icon-instagram"></i>
						<i class="icon-instagram"></i>
					</a>

					<a href="https://www.youtube.com/channel/UCqDT6PY81ojzQHpADtIa-7A" class="social-icon si-small si-dark si-youtube">
						<i class="icon-youtube"></i>
						<i class="icon-youtube"></i>
					</a>


				</div>

			</div><!-- .sidebar end -->

		</div>

	</div>

</section><!-- #content end -->





<!-- Star Includes for all themes -->
<?php include 'testimonials.php'; ?>

<?php include 'all-projects-int.php'; ?>

<?php include 'footer-int.php'; ?>

