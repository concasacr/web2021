<!DOCTYPE HTML>
<?php 
	include $_SERVER['DOCUMENT_ROOT'].'/config/conf.php'; 
	
	include $_SERVER['DOCUMENT_ROOT'].'/Mobile_Detect.php';
	
	$detect = new Mobile_Detect;
	 
	if( $detect->isMobile() && !$detect->isTablet() ){
		echo '<script>window.location.href = "//www.concasa.com/nosotros";</script>';
	}	
?>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Condominios de casas y apartamentos disponibles en Costa Rica﻿</title>
		<meta name="author" content="Condominios de casas y apartamentos disponibles en Costa Rica﻿" />
		<meta name="description" content="Conozca nuestros condominios disponibles en Costa Rica. Hemos construido y entregado 14 condominios en Costa Rica﻿﻿."/>
		<meta property="og:description" content="Conozca nuestros condominios disponibles en Costa Rica. Hemos construido y entregado 14 condominios en Costa Rica﻿﻿" />
		<meta name="keywords"  content="Condominios en Costa Rica﻿,Condominio, Apartamento, San Rafael, Alajuela" />
	
<?php 
	include 'header_int.php'; 
	include 'nav-top-int.php'; 
?>
<link rel="stylesheet" href="//cdn.concasa.com/concasa.com/css/n-css/magnific-popup.css" type="text/css" />
<link rel="stylesheet" href="//cdn.concasa.com/concasa.com/css/n-css/scalize.css" />
<link rel="stylesheet" href="//cdn.concasa.com/concasa.com/css/n-css/int.css" />
<link rel="stylesheet" href="//cdn.concasa.com/concasa.com/css/n-css/dark.css" type="text/css">
<link rel="stylesheet" href="//cdn.concasa.com/concasa.com/css/n-css/project.css" type="text/css">
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
		<section id="page-title" class="page-title-parallax page-title-dark" style="padding: 200px 0; background-color: #023a80; background-image: url('//cdn.concasa.com/concasa.com/images/n-images/quienes-somos.jpg');  background-size: contain; background-position: center center;" data-bottom-top="background-position:0px 550px;" data-top-bottom="background-position:0px -500px;">
			<div class="container clearfix">
				<h1 title="Condominios disponibles en Costa Rica">Condominios disponibles <br> en Costa Rica</h1>
				<span>Pase a conocer nuestra trayectoria </span>
			</div>

		</section><!-- #page-title end -->



<!-- Start Projects -->    
<div id="section-projects" class="page greyback">
   <div class="container">
      <div class="fifteen text-center">
         <h2 title="Condominios en Alajuela, Condominio en Curridabat, Condominio en Ciudad Colón, condominio en playa Jacó" class="lead">Condominios en <b>Alajuela</b> | Condominio en <b>Curridabat</b> | Condominio en <b>Ciudad Colón</b> | Condominio en <b>playa Jacó</b>﻿</h2>
         <hr>
      </div>
   </div>
   <div class="container-fluid p-t-3">
      <div id="oc-portfolio2" class="owl-carousel2 portfolio-carousel2 carousel-widget2">
         
         <div class="oc-item2">
            <div class="iportfolio2">
               <div class="portfolio-image2">
                  <a href="./condominios/condominio-626">
                  <img src="//cdn.concasa.com/concasa.com/images/n-images/proyectos/general/proyectos-626.jpg" alt="Concasa - San rafael, alajuela">
                  </a>
               </div>
               <div class="portfolio-desc2">
	                <h3 class="lead">Condominios 6-26﻿</h3>
	               <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                  
			  <div id="navproject">
				<h4 class="top-price"><a href="./condominios/condominio-626">$<?=number_format(getPrecioProperty('626','1'), 0, '.', ',');?> USD*</a></h4>
				<span>
					<a href="./condominios/condominio-626"><i class="icon-map-pin"></i> San Rafael, Alajuela</a><br><br>
					<a href="./condominios/condominio-626" class="button button-3d nomargin infusion-recaptcha"  name="template-contactform-submit" >Ver Proyecto</a>
				</span>
			  </div>
               </div>
            </div>
         </div>
         
         <div class="oc-item2">
            <div class="iportfolio2">
               <div class="portfolio-image2">
                  <a href="./condominios/condominio-terrazas-del-norte">
                  <img src="//cdn.concasa.com/concasa.com/images/n-images/proyectos/general/proyectos-tn.jpg" alt="Concasa - San rafael, alajuela">
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
         
         <div class="oc-item2">
            <div class="iportfolio2">
               <div class="portfolio-image2">
                  <a href="./condominios/condominio-costa-linda">
                  <img src="//cdn.concasa.com/concasa.com/images/n-images/proyectos/general/proyectos-cl.jpg" alt="Concasa - Jaco">
                  </a>
               </div>
               <div class="portfolio-desc2">
	               
	               
	                <h3 class="lead">Condominios Costa linda﻿</h3>
	               <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.  </p>
                  
				   	  <div id="navproject">
				   		<h4 class="top-price"><a href="./condominios/condominio-costa-linda">$<?=number_format(getPrecioProperty('Costa','1'), 0, '.', ',');?> USD*</a></h4>
				   		<span>
				   			<a href="./condominios/condominio-costa-linda"><i class="icon-map-pin"></i> Jac&oacute;</a><br><br>
				   			<a href="./condominios/condominio-costa-linda" class="button button-3d nomargin infusion-recaptcha"  name="template-contactform-submit" >Ver Proyecto</a>
				   		</span>
				   	  </div>
	               
	               
	               
               </div>
            </div>
         </div>
         
         <div class="oc-item2">
            <div class="iportfolio2">
               <div class="portfolio-image2">
                  <a href="./condominios/condominio-monte-alto">
                  <img src="//cdn.concasa.com/concasa.com/images/n-images/proyectos/general/proyectos-ma.jpg" alt="Concasa - Curridabat">
                  </a>
               </div>
               <div class="portfolio-desc2">
	               
	               
	               
	               <h3 class="lead">Condominios Monte alto﻿</h3>
	               <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.  </p>
                  
				   	  <div id="navproject">
				   		<h4 class="top-price"><a href="./condominios/condominio-monte-alto">$<?=number_format(getPrecioProperty('Monte','1'), 0, '.', ',');?> USD*</a></h4>
				   		<span>
				   			<a href="./condominios/condominio-monte-alto"><i class="icon-map-pin"></i> Curridabat</a><br><br>
				   			<a href="./condominios/condominio-monte-alto" class="button button-3d nomargin infusion-recaptcha"  name="template-contactform-submit" >Ver Proyecto</a>
				   		</span>
				   	  </div>
	               
	               
               </div>
            </div>
         </div>
         
         <div class="oc-item2">
            <div class="iportfolio2">
               <div class="portfolio-image2">
                  <a href="./condominios/condominio-caminos-del-bosque">
                  <img src="//cdn.concasa.com/concasa.com/images/n-images/proyectos/general/proyectos-cb.jpg" alt="Concasa - San rafael, alajuela">
                  </a>
               </div>
               <div class="portfolio-desc2">
                 
                 
	 <h3 class="lead">Condominios Monte alto﻿</h3>
	       <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.  </p>

		  <div id="navproject">
			<h4 class="top-price"><a href="./condominios/condominio-caminos-del-bosque">$<?=number_format(getPrecioProperty('Bosque','1'), 0, '.', ',');?> USD*</a></h4>
			<span>
				<a href="./condominios/condominio-caminos-del-bosque"><i class="icon-map-pin"></i> San Rafael, Alajuela</a><br><br>
				<a href="./condominios/condominio-caminos-del-bosque" class="button button-3d nomargin infusion-recaptcha"  name="template-contactform-submit" >Ver Proyecto</a>
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

<script src='//cdn.concasa.com/concasa.com/js/n-js/swiper.min.js'></script>

