<!DOCTYPE HTML>
<?php 
	include $_SERVER['DOCUMENT_ROOT'].'/config/conf.php'; 
	
	include $_SERVER['DOCUMENT_ROOT'].'/Mobile_Detect.php';
	
	$detect = new Mobile_Detect;
	 
	if( $detect->isMobile() && !$detect->isTablet() ){
		echo '<script>window.location.href = "http://www.concasa.com/nosotros";</script>';
	}	
?>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Casas disponibles en Costa Rica - Concasa﻿</title>
		<meta name="author" content="Condominios de casas y apartamentos disponibles en Costa Rica﻿" />
		<meta name="description" content="Conozca nuestras casas disponibles en Costa Rica. Hemos construido y entregado 14 condominios en Costa Rica﻿"/>
		<meta property="og:description" content="Conozca nuestras casas disponibles en Costa Rica. Hemos construido y entregado 14 condominios en Costa Rica﻿" />
		<meta name="keywords"  content="casas en venta en Costa Rica﻿, Amenidades, San Rafael, Alajuela" />
	
<?php 
	include './header_section.php'; 
	include './nav-top-int.php'; 
?>

	
	<style>
h2.lead b {
    font-weight: bold;
}
.oc-item2 {
    display: flex;
    width: 100%;
    padding: 20px;
    position: relative;
    margin: 0 auto;
}
.iportfolio2 {
    position: relative;
    width: 100%;
}
.portfolio-image2 {
    display: block;
    width: 48%;
    float: left;
}
.portfolio-desc2 {
    display: block;
    width: 48%;
    float: right;
}
.portfolio-image2 a {
    display: block;
}
div#navproject {
    padding: 20px;
}
h4.top-price {
    text-align: right;
}
#navproject span {
    text-align: right;
    width: 100%;
    display: block;
}
</style>	

	<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-parallax page-title-dark" style="padding: 200px 0; background-color: #023a80; background-image: url('.../n-images/quienes-somos.jpg');  background-size: contain; background-position: center center;" data-bottom-top="background-position:0px 550px;" data-top-bottom="background-position:0px -500px;">
			<div class="container clearfix">
				<h1 title="Casas disponibles en Costa Rica﻿">Casas disponibles</h1>
				<span>En Costa Rica - Concasa</span>
			</div>

		</section><!-- #page-title end -->



<!-- Start Projects -->    
<div id="section-projects" class="page greyback">
   <div class="container">
      <div class="fifteen text-center">
         <h1 title="Casas disponibles en Costa Rica﻿">Proyectos disponibles</h1>
         <p class="lead">Preventa, entrega inmediata y a plazo</p>
         <hr>
      </div>
   </div>
   <div class="container-fluid p-t-3">
      <div id="oc-portfolio2" class="owl-carousel2 portfolio-carousel2 carousel-widget2">
         
 
         
         <div class="oc-item2">
            <div class="iportfolio2">
               <div class="portfolio-image2">
                  <a href="./condominios/condominio-terrazas-del-norte">
                  <img src="../n-images/proyectos/general/proyectos-tn.jpg" alt="Concasa - San rafael, alajuela">
                  </a>
               </div>
               <div class="portfolio-desc2">
	               
	               
	               <h3 class="lead">Condominios Terrazas del norte﻿</h3>
	               <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.  </p>
                  
				   	  <div id="navproject">
				   		<h4 class="top-price"><a href="./condominios/condominio-terrazas-del-norte">$<?=number_format(getPrecioProperty('Terrazas','1'), 0, '.', ',');?> USD*</a></h4>
				   		<span>
				   			<a href="./condominios/condominio-terrazas-del-norte"><i class="icon-map-pin"></i> San Rafael, Alajuela</a><br><br>
				   			<a href="./condominios/condominio-terrazas-del-norte" class="button button-3d nomargin infusion-recaptcha"  name="template-contactform-submit" >Ver Proyecto</a>
				   		</span>
				   	  </div>

                 
               </div>
            </div>
         </div>
         


         
        
         
      </div>
   </div>
</div>
<!-- End Projects -->




<?php include 'footer-int.php'; ?>
<!-- End Includes for all themes -->

<script src='./n-js/swiper.min.js'></script>

