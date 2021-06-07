<?php include $_SERVER['DOCUMENT_ROOT'].'/config/conf.php'; ?>
<!DOCTYPE html>
<html lang="es-CR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<title>CONCASA | SOBRE NOSOTROS</title>
	<meta name="author" content="CONCASA desarrolladora inmobiliaria." />
	<meta name="description" content="Venta de casas, condominios y apartamentos San Rafael de Alajuela - Costa Rica, Venezuela y Panamá."/>
	<meta property="og:description" content="Concasa | Unidades disponibles que van desde los $91.500 USD*" />
	<meta name="keywords"  content="Casas,Condominio,Apartamento,Alajuela,Venta de casas,Terrazas del Norte,Condominio 6-26,Condominio 9-10,Costa Lind, Proyectos" />

	<?php include $_SERVER['DOCUMENT_ROOT'].'/staff-top.php'; ?>
	
	<link rel="stylesheet" href="/css/reset.css">
	<link rel="stylesheet" href="/css/style.css"> 
	<style>
		.lbg-black {
		    margin-bottom: 29px;
		}
		div#gallerys-tabContent a {
		    margin: 0px 6px;
		}
		.formmodal {
		    margin-bottom: 25px !important;
		    border-radius: 55px !important;
		    border: 2px solid #333 !important;
		}
		.formmodal:hover {
		    background: #333 !important;
		}
		.cover-content-bottom img {
		    height: 100px;
		    margin: 0 auto;
		    display: block;
		}


         /* Inicio - Nuevos cambios del web enero 2019 */ 
         nav#menu-principal {
             background: #fff !important;
             color: #000 !important;
             z-index: 99999 !important;
         }
         .navbar-dark .navbar-nav .active>.nav-link, .navbar-dark .navbar-nav .nav-link.active, .navbar-dark .navbar-nav .nav-link.show, .navbar-dark .navbar-nav .show>.nav-link {
		    text-shadow: none !important;
		}
         .navbar-dark .navbar-brand {
             background: #002c6b !important;
             width: 225px !important;
             height: 58px !important;
             position: absolute;
             line-height: 48px !important;
             z-index: 999;
         }
         .navbar-dark .navbar-nav .active>.nav-link, .navbar-dark .navbar-nav .nav-link.active, .navbar-dark .navbar-nav .nav-link.show, .navbar-dark .navbar-nav .show>.nav-link {
             color: #002c6b !important;
         }
         .navbar {
             padding: .2rem 0.3rem !important;
         }

         a.navbar-brand-block {
             display: block;
             width: 50px;
             height: 115px;
             background: #002c6b;
             position: absolute;
             left: 0;
         }
        #sectionC li.nav-item {
		    width: auto !important;
		}
		#sectionD li.nav-item {
		    width: auto !important;
		}
		#sectionE li.nav-item {
		    width: auto !important;
		}
		#section4 li.nav-item {
		    width: auto !important;
		}
		.paddingtop10 {
		    padding-top: 47px !important;
		}
#moreinfo {
    background-color: #002c6b;
    color: #fff !important;
}
#moreinfo:hover {
    -webkit-box-shadow: inset -3px -3px 20px 1px #02152e;
    box-shadow: inset -3px -3px 20px 1px #02152e;
}
ul.botton-left-nav {
    display: block;
    width: auto;
    left: 0;
    text-align: left;
    bottom: 10%;
    position: fixed;
    overflow: hidden;
}
ul.botton-left-nav li {
    display: block;
    width: 60px;
    overflow: hidden;
    padding: 10px;
    border-top: 1px solid rgba(255, 255, 255, 0.58);
    white-space: nowrap;
    background-color: rgba(0, 44, 107, 0.80);
    -webkit-transition: width 0.2s ease;
    -moz-transition: width 0.2s ease;
    -o-transition: width 0.2s ease;
    transition: width 0.2s ease;
        height: 61px;
}
ul.botton-left-nav li:hover {
   -webkit-transition: width 0.2s ease-in-out;
   -moz-transition: width 0.2s ease-in-out;
   -o-transition: width 0.2s ease-in-out;
   transition: width 0.2s ease-in-out;
    width:100%;
    background-color: rgba(0, 44, 107, 0.90);
}
ul.botton-left-nav li a {
    color: #fff;
    text-decoration: none;
}
ul.botton-left-nav li a span {
   font-size: 25px;
    margin-top: 8px;
    display: inline-block;
    float: right;
}
ul.botton-left-nav li img {
    margin-right: 10px;
    max-width: 42px;
    height: auto;
}
ul.botton-right-nav {
        display: block;
    width: 100%;
    max-width: 250px;
    height: 100%;
    right: 0;
    float: right;
}
ul.botton-right-nav li {
    display: block;
    text-align: left;
    height: 60px;
    padding: 7px;
    white-space: nowrap;
    overflow: hidden;
    position: relative;
    -webkit-transition: right 0.2s ease;
    -moz-transition: right 0.2s ease;
    -o-transition: right 0.2s ease;
    transition: right 0.2s ease;
    right: -190px;
    background: #5dbfe9;
    margin: 3px;
}
ul.botton-right-nav li:hover {
   -webkit-transition: right 0.2s ease-in-out;
   -moz-transition: right 0.2s ease-in-out;
   -o-transition: right 0.2s ease-in-out;
   transition: right 0.2s ease-in-out;
   right: 0;
}

ul.botton-right-nav li a {
    display: inline;
    width: 100%;
    height: 100%;
    text-decoration: none;
}
ul.botton-right-nav li a span {
    color: #fff;
    font-size: 19px;
}
ul.botton-right-nav li img {
    height: 100%;
    margin-right: 15px;
}
.l-r-padding {
	padding-left: 35px;
    padding-right: 35px;
}
#sectionC .nav-pills .nav-link {
    border-radius: 10px !important;
    color: #717175 !important;
    font-family: 'avenir_next_regular', sans-serif !important;
}
.bar-top {
    background-image: url(/images/bck-top.png);
    background-repeat: no-repeat;
    display: block;
    width: 100%;
    height: 35px;
    margin-bottom: 5px;
}
.bar-buttom {
    background-image: url(/images/bck-buttom.png);
    background-repeat: no-repeat;
    background-position: right;
    display: block;
    width: 100%;
    height: 35px;
    margin-top: 5px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
    text-align: center;
    max-width: 300px;
    width: 100%;
    margin: 0px auto;
    position: fixed;
    right: 35%;
}
ul#pills-tab li {
    width: 49%;
    text-align: center;
}
#sectionC .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff !important;
    background-color: #304c80 !important;
    font-family: 'avenir_next_regular', sans-serif !important;
    border: 2px solid #607aae !important;
} 
.newcouta {
    text-align: center;
    display: block;
    color: #304c80;
    font-size: 35px;
    margin-left: 50px;
}
.newcouta small {
    display: block;
    margin-top: 15px;
    font-size: 12px;
    font-family: 'avenir_next_regular', sans-serif !important;
}
.newicon-homes {
    background-image: url(/images/new-home.png);
    background-size: contain;
    display: inline-block;
    width: 30px;
    height: 30px;
}
#new-info-show {
    display: block;
    width: 100%;
    height: 100%;
}
.info-new-icon {
    display: block;
    margin-left: 15%;
    text-align: left;
    margin-top: 15%;
    color: #304c80;
}
.lamparaicon {
    background-image: url(/images/new-lampara.png);
    background-size: 30px;
    background-repeat: no-repeat;
}
.duckicon {
    background-image: url(/images/new-duck.png);
    background-size: 30px;
    background-repeat: no-repeat;
}
.softicon {
    background-image: url(/images/new-soft.png);
    background-size: 30px;
    background-repeat: no-repeat;
}
.parkicon {
    background-image: url(/images/new-park.png);
    background-size: 30px;
    background-repeat: no-repeat;
}
.starbicon {
    background-image: url(/images/new-star-b.png);
    background-size: 30px;
    background-repeat: no-repeat;
}
.mtsicon {
    background-image: url(/images/new-mts.png);
    background-size: 30px;
    background-repeat: no-repeat;
}
.starbicon2 {
    background-image: url(/images/new-star-f.png);
    background-size: contain;
    display: inline-block;
    width: 30px;
    height: 30px;
    margin-right: 10px;
    background-repeat: no-repeat;
}	
.info-new-icon span {
    font-size: 25px;
    padding-left: 40px;
}
.info-new-icon small {
    display: block;
    text-align: left;
    padding-left: 10%;
    padding-top: 8px;
    width: 80%;
    font-weight: lighter;
    font-family: 'avenir_next_regular', sans-serif !important;
}
.m-top-15 {
	 margin-top: 35px;
}
.m-top-7 {
	 margin-top: 7%;
}
#pills-tabContent {
	    min-height: auto;
}

.btn-outline-light {
    border-radius: 10px !important;
}
.btn-newconcasa {
    border-radius: 10px !important;
    color: #fff !important;
    padding: 5px !important;
    width: 190px;
    text-align: center;
    background-color: #213a73;
    line-height: 22px;
    font-size: 17px;
    margin: 15px auto 0 auto;
    font-family: 'avenir_next_regular', sans-serif !important;
    border: 2px solid #607aae !important;
}
/* Extra small devices (phones, 600px and down) */
/* 
@media only screen and (max-width: 600px) {

}
/* Small devices (portrait tablets and large phones, 600px and up) */
/* 
@media only screen and (min-width: 600px) {
} 

/* Medium devices (landscape tablets, 768px and up) */
/* 
@media only screen and (min-width: 768px) {
} 

/* Large devices (laptops/desktops, 992px and up) */
/* 
@media only screen and (min-width: 992px) {
} 

/* Extra large devices (large laptops and desktops, 1200px and up) */
/* 
@media only screen and (min-width: 1200px) {

}



@media only screen and (max-width: 1024px) {
    div#pills-tabContent {
	    min-height: 386px !important;
	}
}
@media only screen (min-width: 1025px) and (max-width: 1200px) {
    div#pills-tabContent {
	    min-height: 500px;
	}
}
@media only screen and (min-width: 1600px) {
    div#pills-tabContent {
	    min-height: 730px;
	}
}
*/

@media only screen (min-width: 640px) and (max-width: 1200px) {

  .newcouta {
      font-size: 25px !important;
      margin-left: 0px !important;
  } 
  .info-new-icon span {
      font-size: 17px !important;
  }
  .info-new-icon small {
      padding-left: 35px !important;
      width: 100% !important;
  }


}

 /*******************
  SWIPPER 
  ********************/
  .swiper-container {
      width: 100%;
      height: 300px;
      margin-left: auto;
      margin-right: auto;
    }
    .swiper-slide {
      background-size: cover;
      background-position: center;
    }
    .gallery-top {
      height: 80%;
      width: 100%;
    }
    .gallery-thumbs {
      height: 20%;
      box-sizing: border-box;
      padding: 10px 0;
    }
    .gallery-thumbs .swiper-slide {
      width: auto;
      height: 100%;
      opacity: 0.4;
    }
    .gallery-thumbs .swiper-slide-active {
      opacity: 1;
    }

.swiper-zoom-container>canvas, .swiper-zoom-container>img, .swiper-zoom-container>svg {
    width: 100%;
}
.swiper-container {
    position: sticky !important;
    bottom: 0 !important;
}
.swiper-zoom-container {
    border: 5px solid #fff;
}
.swiper-button-next, .swiper-button-prev {
    top: 40% !important;
}
.swiper-button-next, .swiper-container-rtl .swiper-button-prev {
    right: 5% !important;
}
.swiper-button-prev, .swiper-container-rtl .swiper-button-next {
    left: 5% !important;
}
.gallery-thumbs img {
    height: 110px;
    width: 110px;
}
.gallery-thumbs .swiper-slide {
    width: 120px !important;
    height: 70px !important;
    margin-bottom: 25px;
}
.swiper-slide {
    cursor: pointer;
}
.new-space {
    margin-top: 15px !important;
    position: absolute !important;
    display: block !important;
}

.hytPlayerWrap{display: inline-block; position: relative;width: 100%;}
.hytPlayerWrap.ended::after{content:""; 
position: absolute; 
top: 0; 
left: 0; 
bottom: 0; 
right: 0; 
cursor: pointer; 
background-color: black; 
background-repeat: no-repeat; 
background-position: center; 
background-size: 64px 64px; 

}
.hytPlayerWrap.paused::after{content:""; 
position: absolute; top: 70px; 
left: 0; 
bottom: 50px; 
right: 0; 
cursor: pointer; 
background-color: black; 
background-repeat: no-repeat; 
background-position: center; 
background-size: 40px 40px;
}
.hytPlayerWrapOuter {
    width: 100%;
}
.gallery-thumbs .swiper-slide-active .swiper-zoom-container {
    border: 5px solid #ff6c85;
}
#section-qs {
    background: url(/images/postventa.jpg) !important;
}
/* Fin - Nuevos cambios del web enero 2019 */ 
	</style> 
		 
</head>
<body>


<div id="fullpage" data-menuanchor="gotop">

	<div class="section " id="section-qs">
		

		<?php include $_SERVER['DOCUMENT_ROOT'].'/nav.php'; ?>


		<div class="intro">
			<h1 style="padding-bottom: 30px;">Nuestra meta es que vivás mejor
				<!-- <span>LOS MEJORES PROYECTOS HABITACIONALES</span> -->
			</h1>
			
			<a href="javascript:void(0);" onclick="Calendly.showPopupWidget('https://calendly.com/asesoria-virtual-concasa/asesoria-virtual');return false;" class="btn btn-outline-light agenda-visita" id="moreinfo" title="Mas info">Agendá una cita</a>
			<!--a href="javascript:void(0);" onclick="Calendly.showPopupWidget('https://calendly.com/fonchog/visita-guiada-a-nuestros-proyectos?inf_contact_key=8cd4267f8139a9b7c238447a1ab0b0ad351dddb64a3d53020a538fbcfc212007&back=1');return false;" class="btn btn-outline-light agenda-visita" id="moreinfo" title="Mas info">Agendá una cita</a-->
		</div>


		<span class="scroll-btn"> <a href="#Numeros"> <span class="mouse"> <span> </span> </span> </a>
		  <p>scroll me</p>
		</span>

	</div>

	<div class="section" id="section-qs2">
		<?php include $_SERVER['DOCUMENT_ROOT'].'/nav.php'; ?>
		<div class="intro"><h1>Nos apasiona<span>todo lo que hacemos</span></h1>
		</div>
		
		
	  <div class="container paddingtop10">
		  <div class="row">
		    <div class="col-sm">
		      
		      <div class="img-bg-qs">
			      <div class="box-text-qs">
				      <div class="row">
					  	<div class="col-sm col-qs-nu">+25<span>proyectos</span></div>
					  	<div class="col-sm col-qs-nu">+15000<span>clientes felices</span></div>
				      </div>
				      <div class="row">
					    <div class="col-sm col-qs-nu">+30<span>años de experiencia</span></div>
					  	<!--<div class="col-sm col-qs-nu">3<span>paises</span></div>-->
				      </div>
			      </div>
			      
		      </div>
		      
		      
		    </div>
		    <div class="col-sm">
			    <!--<h6 class="text-left-qs">NÚMEROS</h6>-->
			    <h2 class="title-left-qs">Nos apasiona lo que hacemos</h2>
		     <p class="font1vw">Somos una empresa desarrolladora inmobiliaria con amplia experiencia en la construcción y venta de complejos habitaciones en condominio vertical y horizontal. Nuestros proyectos están ubicados en Venezuela, Panamá y Costa Rica. Gracias a nuestro alto grado de compromiso y responsabilidad, en más de 30 años de trayectoria Concasa le ha permitido a más de 15 mil clientes estrenar con satisfacción su nuevo hogar.</p>
		    </div>
		  </div>
	  </div>
	  
	  <div id="footer-qs-numeros"><br>
		  <a onclick="Calendly.showPopupWidget('https://calendly.com/fonchog/visita-guiada-a-nuestros-proyectos?inf_contact_key=8cd4267f8139a9b7c238447a1ab0b0ad351dddb64a3d53020a538fbcfc212007&back=1');return false;" class="btn btn-outline-light btn-int-cita-models agenda-visita" id="cita_modelo_a" title="Cita Modelo A"><span class="icon-time"></span> Agendá una cita</a>
		  
		  
	  </div>
		
			
			<a href="#Inicio" class="topFunction" id="return-to-top" title="Back to top">&uarr;</a>


			<!--<span class="scroll-btn"> <a href="#Condominio_9-10"> <span class="mouse"> <span> </span> </span> </a>
		  <p>scroll me</p>
		</span>-->

	</div>
	
	

	<div class="section" id="section-qs3">
		<?php include $_SERVER['DOCUMENT_ROOT'].'/nav.php'; ?>

			<div id="picture-qs-constrccion">
				<div class="intro">
					<h1 style="text-transform: uppercase;"><!-- EN CONSTRUCCIÓN -->
					Esto es lo que hacemos
						<!-- <span>Esto es lo que hacemos</span> -->
					</h1>
				</div>
			</div>
			
			<div id="clear"></div>

<div class="prague_services">
   
   <div class="portfolio-item-wrapp">
      <div class="portfolio-item">
         <div class="prague-services-wrapper">
            <span class="services-item-icon iconos-circle-compass"></span>
            <h3 class="services-item-title">Diseño</h3>
            <div class="services-item-description">
               <p>Nuestros equipo de ingenieros y arquitectos proporcionan una visión integral de donde se desarrollarán nuestros proyectos y sus principales características.</p>
            </div>
         </div>
      </div>
   </div>

   <div class="portfolio-item-wrapp">
      <div class="portfolio-item">
         <div class="prague-services-wrapper">
            <span class="services-item-icon iconos-tools-2"></span>
            <h3 class="services-item-title">Construcción</h3>
            <div class="services-item-description">
               <p>Una vez que se han decidido los conceptos de diseño, se preparan los dibujos y especificaciones de trabajo.</p>
            </div>
         </div>
      </div>
   </div>

   <div class="portfolio-item-wrapp">
      <div class="portfolio-item">
         <div class="prague-services-wrapper">
            <span class="services-item-icon iconos-paintbrush"></span>
            <h3 class="services-item-title">Decoración</h3>
            <div class="services-item-description">
               <p>Un decorador se encarga del diseño interior de la casa y apartamento modelo, nuestros clientes reciben asesoría sobre tendencias decoración y diseño.</p>
            </div>
         </div>
      </div>
   </div>

</div>
			

		<a href="#Inicio" class="topFunction" id="return-to-top" title="Back to top">&uarr;</a>

		<span class="scroll-btn"> <a href="#Costa_Linda"> <span class="mouse"> <span> </span> </span> </a>
		  <p>scroll me</p>
		</span>

	</div>

	<div class="section" id="section-qs4">
	<?php include $_SERVER['DOCUMENT_ROOT'].'/nav.php'; ?>
		
		
		    <div id="picture-qs4-constrccion">
				<div class="intro">
					<h1 style="margin-top: -40px;">CRONOGRAMA
						<span>Nuestros proyectos</span>
					</h1>
				</div>
			</div>
	
			
<div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6 ">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
                <div class="awards-list ">
                    <div class="awards-item">
                        <div class="awards-date">2004</div> <span class="awards-separator"></span>
                        <div class="awards-info ">
                            <h4 class="awards-title">Condominio Campo Alto</h4></div>
                    </div>
                    <div class="awards-item">
                        <div class="awards-date">2006</div> <span class="awards-separator"></span>
                        <div class="awards-info ">
                            <h4 class="awards-title">Condominio Costa Linda</h4></div>
                    </div>
                    <div class="awards-item">
                        <div class="awards-date">2007</div> <span class="awards-separator"></span>
                        <div class="awards-info ">
                            <h4 class="awards-title">Condominios Bosque Real</h4></div>
                    </div>
                    <div class="awards-item">
                        <div class="awards-date">2009</div> <span class="awards-separator"></span>
                        <div class="awards-info ">
                            <h4 class="awards-title">Condominos Paso Real</h4></div>
                    </div>
                     <div class="awards-item">
                        <div class="awards-date">2010</div> <span class="awards-separator"></span>
                        <div class="awards-info ">
                            <h4 class="awards-title">Condominos Vista Real</h4></div>
                    </div>
                     <div class="awards-item">
                        <div class="awards-date">2011</div> <span class="awards-separator"></span>
                        <div class="awards-info ">
                            <h4 class="awards-title">Condominos Vista del Lago</h4></div>
                    </div>
                     <div class="awards-item">
                        <div class="awards-date">2012</div> <span class="awards-separator"></span>
                        <div class="awards-info ">
                            <h4 class="awards-title">Condominos Terrazas del Oeste</h4></div>
                    </div>
                    
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6 ">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
                <div class="awards-list ">
                    <div class="awards-item">
                        <div class="awards-date">2013</div> <span class="awards-separator"></span>
                        <div class="awards-info ">
                            <h4 class="awards-title">Centro Comercial - Campo Real</h4></div>
                    </div>
                    <div class="awards-item">
                        <div class="awards-date">2013</div> <span class="awards-separator"></span>
                        <div class="awards-info ">
                            <h4 class="awards-title">Condominio Villas del Campo</h4></div>
                    </div>
                    <div class="awards-item">
                        <div class="awards-date">2014</div> <span class="awards-separator"></span>
                        <div class="awards-info ">
                            <h4 class="awards-title">Condominios Valle Escondido</h4></div>
                    </div>
                    <div class="awards-item">
                        <div class="awards-date">2015</div> <span class="awards-separator"></span>
                        <div class="awards-info ">
                            <h4 class="awards-title">Condominos 9-10</h4></div>
                    </div>
                     <div class="awards-item">
                        <div class="awards-date">2017</div> <span class="awards-separator"></span>
                        <div class="awards-info ">
                            <h4 class="awards-title">Condominos Terrazas del Norte</h4></div>
                    </div>
                     <div class="awards-item">
                        <div class="awards-date">2017</div> <span class="awards-separator"></span>
                        <div class="awards-info ">
                            <h4 class="awards-title">Condominos 6-26</h4></div>
                    </div>
                     <div class="awards-item">
                        <div class="awards-date">2019</div> <span class="awards-separator"></span>
                        <div class="awards-info ">
                            <h4 class="awards-title">Condominos Monte Alto</h4></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
			

		<a href="#Inicio" class="topFunction" id="return-to-top" title="Back to top">&uarr;</a>

</div>
	
	<div class="section" id="section-qs5">
		<?php include $_SERVER['DOCUMENT_ROOT'].'/nav.php'; ?>
		
		
		 <div id="picture-qs5-constrccion">
				<div class="intro">
					<h1>TESTIMONIOS
						<span>¡LO QUE DICEN DE NOSOTROS!</span>
					</h1>
				</div>
			</div>
	
	
	
			<div class="col-12 whiteheight paddingtop10"  id="fotter-reviews">
				        
				        				        
					   <?php include $_SERVER['DOCUMENT_ROOT'].'/reviews.php'; ?>				        
				        
			        </div>	
	
	

		<a href="#Inicio" class="topFunction" id="return-to-top" title="Back to top">&uarr;</a>

		<footer>
			<?php include $_SERVER['DOCUMENT_ROOT'].'/footer.php'; ?>
		</footer>
	</div>

</div>


<?php include $_SERVER['DOCUMENT_ROOT'].'/script.php'; ?>


<!-- Modal
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
            <div class="modal-body">
               
               
                <form accept-charset="UTF-8" action="https://wx394.infusionsoft.com/app/form/process/6d0357860a48ae2c3f76da70b58f2370" class="infusion-form" id="inf_form_6d0357860a48ae2c3f76da70b58f2370" method="POST">
			    <input name="inf_form_xid" type="hidden" value="6d0357860a48ae2c3f76da70b58f2370" />
			    <input name="inf_form_name" type="hidden" value="Website Form &#a;Todos los Proyectos &#a;Quienes Somos" />
			    <input name="infusionsoft_version" type="hidden" value="1.70.0.216758" />
			    <div class="infusion-field">
			        <label for="inf_field_FirstName">Nombre *</label>
			        <input class="infusion-field-input" id="inf_field_FirstName" name="inf_field_FirstName" placeholder="Nombre *" type="text" />
			    </div>
			    <div class="infusion-field">
			        <label for="inf_field_LastName">Apellido *</label>
			        <input class="infusion-field-input" id="inf_field_LastName" name="inf_field_LastName" placeholder="Apellido *" type="text" />
			    </div>
			    <div class="infusion-field">
			        <label for="inf_field_Email">Email *</label>
			        <input class="infusion-field-input" id="inf_field_Email" name="inf_field_Email" placeholder="Email *" type="text" />
			    </div>
			    <div class="infusion-field">
			        <label for="inf_field_Phone1">Telefono *</label>
			        <input class="infusion-field-input" id="inf_field_Phone1" name="inf_field_Phone1" placeholder="Telefono *" type="text" />
			    </div>
			    <div>
			        <div>&nbsp;</div>
			    </div>
			    <div class="infusion-field">
			        <label for="inf_misc_¿Algunapreguntaenespecial">&iquest;Alguna pregunta en especial?</label>
			        <textarea cols="24" id="inf_misc_¿Algunapreguntaenespecial" name="inf_misc_¿Algunapreguntaenespecial" placeholder="&iquest;Alguna pregunta en especial?" rows="5"></textarea></div>
			    <div class="infusion-submit">
			        <button class="infusion-recaptcha" id="recaptcha_6d0357860a48ae2c3f76da70b58f2370" type="submit">Submit</button>
			    </div>
			</form>
                
                               
                

            </div>
        </div>
    </div>
</div>
 -->

<script src="/script/modernizr.js"></script>
<script src="/script/masonry.pkgd.min.js"></script>
<script src="/script/jquery.flexslider-min.js"></script>
<script src="/script/main.js"></script>

<script type="text/javascript" src="scripts_new/jquery.js"></script>

<script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', {
        anchors: ['Inicio', 'Números', 'Construcción','Cronograma','Testimonios'],
        sectionsColor: ['#FFFFFF', '#FFFFFF', '#FFFFFF', '#4294DF', '#FFFFFF'],
        keyboardScrolling: true,
        navigation: true,
        showActiveTooltip: true,
        navigationPosition: 'left',
        navigationTooltips: ['Inicio', 'Números', 'Construcción','Cronograma','Testimonios'],
    });
    
    
 
</script>

<script type="text/javascript" src="https://wx394.infusionsoft.app/app/webTracking/getTrackingCode"></script>


</body>
</html>