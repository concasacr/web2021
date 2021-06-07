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
        <title>Quienes Somos | CONCASA</title>
		<meta name="author" content="CONCASA desarrolladora inmobiliaria." />
		<meta name="description" content="Venta de apartamentos y casas, San Rafael Alajuela, Curridabat, Jáco - Costa Rica."/>
		<meta property="og:description" content="Quienes Somos en concasa, unidades disponibles que van desde los $<?=number_format(getPrecioProperty('Bosque','1'), 0, '.', ',');?> USD*" />
		<meta name="keywords"  content="Condominio, Apartamento, Condominio Caminos del Bosque, Proyectos en torre, Amenidades, San Rafael, Alajuela" />
	
<?php 
	include './header_section.php'; 
	include './nav-top-int.php'; 
?>

<link rel="stylesheet" href="./n-css/normalize.min.css">
<link rel='stylesheet' href='./n-css/swiper.min.css'>
<style>
body {
    overflow-x: hidden;
   
}
.page-dark {
	background: #26313c;
}
h4.timeline-title {
	color: #fff;
}
.title {
  font-size: 38px;
  color: #616161;
  font-style: italic;
  font-weight: 800;
}
.timeline {
  width: 100%;
  background-color: #fff;
  box-shadow: 0 5px 25px 5px rgba(0, 0, 0, 0.2);
}
.timeline .swiper-container {
  height: 650px;
  width: 100%;
  position: relative;
}
.timeline .swiper-wrapper {
  transition: 2s cubic-bezier(0.68, -0.4, 0.27, 1.34) 0.2s;
}
.timeline .swiper-slide {
  position: relative;
  color: #fff;
  overflow: hidden;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}
.timeline .swiper-slide::after {
  content: "";
  position: absolute;
  z-index: 1;
  right: -115%;
  bottom: -10%;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.7);
  box-shadow: -230px 0 150px 60vw rgba(0, 0, 0, 0.7);
  border-radius: 100%;
}
.timeline .swiper-slide-content {
  position: absolute;
  text-align: center;
  width: 80%;
  max-width: 510px;
  right: 50%;
  top: 13%;
  -webkit-transform: translate(50%, 0);
          transform: translate(50%, 0);
  font-size: 12px;
  z-index: 2;
}
.timeline .swiper-slide .timeline-year {
  display: block;
  font-style: italic;
  font-size: 42px;
  margin-bottom: 50px;
  -webkit-transform: translate3d(20px, 0, 0);
          transform: translate3d(20px, 0, 0);
  color: #d4a024;
  font-weight: 300;
  opacity: 0;
  transition: .2s ease .4s;
}
.timeline .swiper-slide .timeline-title {
  font-weight: 800;
  font-size: 34px;
  margin: 0 0 30px;
  opacity: 0;
  -webkit-transform: translate3d(20px, 0, 0);
          transform: translate3d(20px, 0, 0);
  transition: .2s ease .5s;
}
.timeline .swiper-slide .timeline-text {
  line-height: 1.5;
  opacity: 0;
  -webkit-transform: translate3d(20px, 0, 0);
          transform: translate3d(20px, 0, 0);
  transition: .2s ease .6s;
}
.timeline .swiper-slide-active .timeline-year {
  opacity: 1;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
  transition: .4s ease 1.6s;
}
.timeline .swiper-slide-active .timeline-title {
  opacity: 1;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
  transition: .4s ease 1.7s;
}
.timeline .swiper-slide-active .timeline-text {
  opacity: 1;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
  transition: .4s ease 1.8s;
}
.timeline .swiper-pagination {
  right: 15% !important;
  height: 100%;
  display: none;
  flex-direction: column;
  justify-content: center;
  font-style: italic;
  font-weight: 300;
  font-size: 18px;
  z-index: 1;
}
.timeline .swiper-pagination::before {
  content: "";
  position: absolute;
  left: -30px;
  top: 0;
  height: 100%;
  width: 1px;
  background-color: rgba(255, 255, 255, 0.2);
}
.timeline .swiper-pagination-bullet {
  width: auto;
  height: auto;
  text-align: center;
  opacity: 1;
  background: transparent;
  color: #d4a024;
  margin: 6px 0 !important;
  position: relative;
}
.timeline .swiper-pagination-bullet::before {
  content: "";
  position: absolute;
  top: 8px;
  left: -32.5px;
  width: 6px;
  height: 6px;
  border-radius: 100%;
  background-color: #d4a024;
  -webkit-transform: scale(0);
          transform: scale(0);
  transition: .2s;
}
.timeline .swiper-pagination-bullet-active {
  color: #d4a024;
}
.timeline .swiper-pagination-bullet-active::before {
  -webkit-transform: scale(1);
          transform: scale(1);
}
.timeline .swiper-button-next,
.timeline .swiper-button-prev {
  background-size: 20px 20px;
  top: 10%;
  width: 20px;
  height: 20px;
  margin-top: 0;
  z-index: 2;
  transition: .2s;
}
.timeline .swiper-button-prev {
  left: 8%;
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23d4a024'%2F%3E%3C%2Fsvg%3E");
}
.timeline .swiper-button-prev:hover {
  -webkit-transform: translateX(-3px);
          transform: translateX(-3px);
}
.timeline .swiper-button-next {
  right: 8%;
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23d4a024'%2F%3E%3C%2Fsvg%3E");
}
.timeline .swiper-button-next:hover {
  -webkit-transform: translateX(3px);
          transform: translateX(3px);
}
@media screen and (min-width: 768px) {
  .timeline .swiper-slide::after {
    right: -30%;
    bottom: -8%;
    width: 240px;
    height: 50%;
    box-shadow: -230px 0 150px 50vw rgba(0, 0, 0, 0.7);
  }
  .timeline .swiper-slide-content {
    right: 30%;
    top: 50%;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
    width: 510px;
    font-size: 11px;
    text-align: right;
  }
  .timeline .swiper-slide .timeline-year {
    margin-bottom: 0;
    font-size: 32px;
  }
  .timeline .swiper-slide .timeline-title {
    font-size: 35px;
    margin: 0;
  }
  .timeline .swiper-pagination {
    display: flex;
  }
  .timeline .swiper-button-prev {
    top: 10%;
    left: auto;
    right: 15%;
    -webkit-transform: rotate(90deg) translate(0, 10px);
            transform: rotate(90deg) translate(0, 10px);
  }
  .timeline .swiper-button-prev:hover {
    -webkit-transform: rotate(90deg) translate(-3px, 10px);
            transform: rotate(90deg) translate(-3px, 10px);
  }
  .timeline .swiper-button-next {
    top: auto;
    bottom: 10%;
    right: 15%;
    -webkit-transform: rotate(90deg) translate(0, 10px);
            transform: rotate(90deg) translate(0, 10px);
  }
  .timeline .swiper-button-next:hover {
    -webkit-transform: rotate(90deg) translate(3px, 10px);
            transform: rotate(90deg) translate(3px, 10px);
  }
}
@media screen and (min-width: 1024px) {
  .timeline .swiper-slide::after {
    right: -20%;
    bottom: -12%;
    width: 240px;
    height: 50%;
    box-shadow: -230px 0 150px 39vw rgba(0, 0, 0, 0.7);
  }
  .timeline .swiper-slide-content {
    right: 25%;
  }
}
.page {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
}
.p-t-3 {
    padding-top: 0px !important;
}
.portfolio-overlay a {
    position: absolute;
    top: 42% !important;
    left: 25% !important;
    background-color: transparent !important;
    width: 200px !important;
    height: 50px !important;
    margin: 0 auto !important;
    font-size: 18px;
    line-height: 24px !important;
    text-align: center;
    color: #fff !important;
    border-radius: unset !important;
    -webkit-backface-visibility: hidden;
}
.heading-block.fancy-title.nobottomborder.title-bottom-border {
    margin-bottom: 0 !important;
}
</style> 	


	<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-color: #023a80; background-image: url('n-images/quienes-somos.jpg');  background-size: contain; background-position: center center;" data-bottom-top="background-position:0px 550px;" data-top-bottom="background-position:0px -500px;">
			<!--<div id="homepageint"></div>-->
			<div class="container clearfix">
				<h1>Desarrollamos <br>calidad de vida</h1>
				<span>Pase a conocer nuestra trayectoria </span>
			</div>

		</section><!-- #page-title end -->


<section id="content">

	<div class="content-wrap" style="padding: 80px 0 40px 0 !important;">

		<div class="container clearfix">

			<div class="col_one_third">

				<div class="heading-block fancy-title nobottomborder title-bottom-border">
					<h4>Lo que<span> hacemos</span></h4>
				</div>

				<p>Desarrollamos proyectos habitacionales con procesos optimizados y acabados de primera calidad, disponibles a precio asequible mediante un proceso de compra simple.</p>

			</div>

			<div class="col_one_third">

				<div class="heading-block fancy-title nobottomborder title-bottom-border">
					<h4>Nuestra <span>misión</span></h4>
				</div>

				<p>Permitir que el sueño de adquirir hogar sea una meta realizable.</p>

			</div>

			<div class="col_one_third col_last">

				<div class="heading-block fancy-title nobottomborder title-bottom-border">
					<h4>Por qué <span>Concasa</span></h4>
				</div>

				<p>Más que desarrolladores inmobiliarios somos creadores de comunidades.</p>

			</div>

		</div>
		
	</div>
	
</section>



<section class="bglight" id="timeline" style="padding-top: 1px;margin-bottom: 60px;padding-bottom: 50px;">
	<div class="container-2">
  

 <div class="heading-block topmargin-lg center">
						<h2>Nuestra Historia en Costa Rica</h2>
						<span class="divcenter" style="font-size: 20px;">Inició con una idea optimista que se transformó en una amplia gama de proyectos desarrollados en los últimos 16 años. Actualmente seguimos a la vanguardia innovando el sector inmobiliario.</span>
					</div>
  
  <div class="timeline">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url(n-images/timeline/Campo-Alto.jpg)" data-year="2004">
          <div class="swiper-slide-content"><span class="timeline-year">2004</span>
            <h4 class="timeline-title">Campo Alto</h4>
            <p class="timeline-text">Proyecto con 192 apartamentos en condominio vertical ubicado en Alajuela.</p>
          </div>
        </div>
        <div class="swiper-slide" style="background-image: url(n-images/timeline/Costa-linda.jpg)" data-year="2006">
          <div class="swiper-slide-content"><span class="timeline-year">2006</span>
            <h4 class="timeline-title">Costa Linda</h4>
            <p class="timeline-text">Proyecto con 192 apartamentos en condominio vertical ubicado en Alajuela.</p>
          </div>
        </div>
        <div class="swiper-slide" style="background-image: url(n-images/timeline/Bosque-Real.jpg)" data-year="2007">
          <div class="swiper-slide-content"><span class="timeline-year">2007</span>
            <h4 class="timeline-title">Bosque Real</h4>
            <p class="timeline-text">Proyecto con 336 apartamentos en condominio vertical ubicado en Alajuela.</p>
          </div>
        </div>
        <div class="swiper-slide" style="background-image: url(n-images/timeline/Paso-Real.jpg)" data-year="2009">
          <div class="swiper-slide-content"><span class="timeline-year">2009</span>
            <h4 class="timeline-title">Paso Real</h4>
            <p class="timeline-text">Proyecto con 224 apartamentos en condominio vertical ubicado en Alajuela.</p>
          </div>
        </div>
        <div class="swiper-slide" style="background-image: url(n-images/timeline/vista-real.jpg)" data-year="2010">
          <div class="swiper-slide-content"><span class="timeline-year">2010</span>
            <h4 class="timeline-title">Vista Real </h4>
            <p class="timeline-text">Proyecto con 196 apartamentos en condominio vertical ubicado en Alajuela.</p>
          </div>
        </div>
       
       <div class="swiper-slide" style="background-image: url(n-images/timeline/vistas-del-lago.jpg)" data-year="2011">
          <div class="swiper-slide-content"><span class="timeline-year">2011</span>
            <h4 class="timeline-title">Vistas del Lago</h4>
            <p class="timeline-text">Proyecto con 69 casas en condominio horizontal ubicado en Alajuela.</p>
          </div>
        </div>
        
        <div class="swiper-slide" style="background-image: url(n-images/timeline/Terrazas-del-Oeste.jpg)" data-year="2012">
          <div class="swiper-slide-content"><span class="timeline-year">2012</span>
            <h4 class="timeline-title">Terrazas Del Oeste</h4>
            <p class="timeline-text">Proyecto con 594 casas en condominio horizontal ubicado en Alajuela.</p>
          </div>
        </div>
        <div class="swiper-slide" style="background-image: url(n-images/timeline/Centro-comercial.jpg)" data-year="2013">
          <div class="swiper-slide-content"><span class="timeline-year">2013</span>
            <h4 class="timeline-title">Comercial Campo Real</h4>
            <p class="timeline-text">Proyecto con 40 locales comerciales ubicado en Alajuela.</p>
          </div>
        </div>
        <div class="swiper-slide" style="background-image: url(n-images/timeline/Villas-del-campo.jpg)" data-year="2013">
          <div class="swiper-slide-content"><span class="timeline-year">2013</span>
            <h4 class="timeline-title">Villas Del Campo</h4>
            <p class="timeline-text">Proyecto con 196 apartamentos en condominio vertical ubicado en Alajuela.</p>
          </div>
        </div>
        <div class="swiper-slide" style="background-image: url(n-images/timeline/Valle-escondido.jpg)" data-year="2014">
          <div class="swiper-slide-content"><span class="timeline-year">2014</span>
            <h4 class="timeline-title">Valle Escondido</h4>
            <p class="timeline-text">Proyecto con 198 casas en condominio horizontal ubicado en Alajuela.</p>
          </div>
        </div>
        <div class="swiper-slide" style="background-image: url(n-images/timeline/910.jpg)" data-year="2015">
          <div class="swiper-slide-content"><span class="timeline-year">2015</span>
            <h4 class="timeline-title">Condominio 9-10</h4>
            <p class="timeline-text">Proyecto con 380 apartamentos en condominio vertical ubicado en Alajuela.</p>
          </div>
        </div>
        <div class="swiper-slide" style="background-image: url(n-images/timeline/TN.jpg)" data-year="2017">
          <div class="swiper-slide-content"><span class="timeline-year">2017</span>
            <h4 class="timeline-title">Terrazas Del Norte</h4>
            <p class="timeline-text">Proyecto con 546 casas en condominio horizontal ubicado en Alajuela.</p>
          </div>
        </div>
        <div class="swiper-slide" style="background-image: url(n-images/timeline/626.jpg)" data-year="2018">
          <div class="swiper-slide-content"><span class="timeline-year">2018</span>
            <h4 class="timeline-title">Condominio 6-26</h4>
            <p class="timeline-text">Proyecto con 378 apartamentos en condominio vertical ubicado en Alajuela.</p>
          </div>
        </div>
        <div class="swiper-slide" style="background-image: url(n-images/timeline/MA.jpg)" data-year="2019">
          <div class="swiper-slide-content"><span class="timeline-year">2019</span>
            <h4 class="timeline-title">Monte Alto</h4>
            <p class="timeline-text">Proyecto con 288 apartamentos en condominio vertical ubicado en Curridabat.</p>
          </div>
        </div>
        <div class="swiper-slide" style="background-image: url(n-images/timeline/CDB.jpg)" data-year="2020">
          <div class="swiper-slide-content"><span class="timeline-year">2020</span>
            <h4 class="timeline-title">Caminos del Bosque</h4>
            <p class="timeline-text">Proyecto con 60 apartamentos en condominio vertical ubicado en Alajuela.</p>
          </div>
        </div>
      
        
        
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-pagination"></div>
     
    </div>
  </div>
</div>
</section>
<!--
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="row clearfix">

						<div class="col-lg-12">

							<h3>Futuros Desarrollos</h3>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa repellendus adipisci laborum placeat delectus labore cupiditate deserunt minus numquam consequatur esse, hic at earum illo animi eaque et, dolorem quo qui eos? Quam rerum possimus maxime veniam aut ratione eveniet aliquid cumque aspernatur ipsum libero quaerat, nam. Ad, sunt, error!</p>

						</div>

						

					</div>

				</div>
				
			</div>
			
		</section>
		
		
		
	<div class="promo parallax promo-dark promo-flat promo-full bottommargin" style="background-image: url('./images/proyectos/general/fondocontadores.png');" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
		<div class="container clearfix">
			<h3>Call us today at <span>+91.22.57412541</span> or Email us at <span>support@canvas.com</span></h3>
			<span>We strive to provide Our Customers with Top Notch Support to make their Theme Experience Wonderful</span>
			<a href="#" class="button button-light button-xlarge button-border button-rounded">Start Now</a>
		</div>
	</div>	
-->


<!-- Star Includes for all themes -->
<?php include 'testimonials.php'; ?>

<?php include 'all-projects-int.php'; ?>

<?php include 'footer-int.php'; ?>
<!-- End Includes for all themes -->

<script src='./n-js/swiper.min.js'></script>

<script>
var timelineSwiper = new Swiper ('.timeline .swiper-container', {
  direction: 'vertical',
  loop: false,
  speed: 6000,
  stopOnLastSlide: true,
  autoplay: {
    delay: 5000,
  },
  pagination: '.swiper-pagination',
  paginationBulletRender: function (swiper, index, className) {
    var year = document.querySelectorAll('.swiper-slide')[index].getAttribute('data-year');
    return '<span class="' + className + '">' + year + '</span>';
  },
  paginationClickable: true,
  nextButton: '.swiper-button-next',
  prevButton: '.swiper-button-prev',
  breakpoints: {
    768: {
      direction: 'horizontal',
    }
  }
});
    </script> 
