<?php include $_SERVER['DOCUMENT_ROOT'].'/config/conf.php'; ?>
<!DOCTYPE html>
<html lang="es-CR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<title>CONCASA | POST - VENTAS</title>
	<meta name="author" content="CONCASA desarrolladora inmobiliaria." />
	<meta name="description" content="Venta de casas, condominios y apartamentos San Rafael de Alajuela - Costa Rica, Venezuela y Panamá."/>
	<meta property="og:description" content="Concasa | Unidades disponibles que van desde los $91.500 USD*" />
	<meta name="keywords"  content="Casas,Condominio,Apartamento,Alajuela,Venta de casas,Terrazas del Norte,Condominio 6-26,Condominio 9-10,Costa Lind, Proyectos" />
	
		

	<?php include $_SERVER['DOCUMENT_ROOT'].'/staff-top.php'; ?>
	
	<style>
		/*
		.navbar-dark .navbar-nav .active>.nav-link, .navbar-dark .navbar-nav .nav-link.active, .navbar-dark .navbar-nav .nav-link.show, .navbar-dark .navbar-nav .show>.nav-link {
		    color: #444;
		}*/
		.fp-tableCell {
		    padding-top: 0px !important;
		}
		#fullpage p {
		    font-size: 100% !important;
		    text-align: justify;
		    color: #333;
		    
		}
		#postventa li {
		    float: left;
		    width: 100%;
		    text-align: left;
		    list-style-type: square;
		}
		/*
		.prague_services {
				   max-height: 520px !important;
		    height: 100% !important;
		    max-height: 100vh !important;
		}	
		*/	
		.prague_services {

    position: none !important;
    height: auto !important;
    max-width: none !important;
    margin: none !important;
    font-size: 14px !important;
    display: block;
    bottom: none !important;
    left: none !important;
    right: none !important;

}


		#picture-qs-constrccion {
		    background: url(/images/postventa.jpg) !important;
			background-position: 0% 75% !important;
		}
		.section footer ul li a {
		    color: #444;
		}
		.prague_services {
		    top: 0%;
		}
		.prague-services-wrapper {
		    max-height: 550px !important;
		    height: 100vh !important;
		}
		button#rmcp_input_1_4 {
		    position: relative;
		    left: 0;
		    right: 0;
		}
	</style>
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
/* Fin - Nuevos cambios del web enero 2019 */ 
	</style> 
	
</head>
<body>


<div id="fullpage" data-menuanchor="gotop">

		<div class="section" id="section-qs3">
			
		<?php include $_SERVER['DOCUMENT_ROOT'].'/nav.php'; ?>
		</div>


<div class="prague_services">
   
   


<iFrame src="https://wp.concasa.com/blog/" id="iframe" frameborder="0" style="width: 100%; height: 100%;" frameborder="0" allowtransparency="yes"></iFrame>
   
xxxxxxxxhttps://wp.concasa.com/blog/

</div>


<footer>
			<?php include $_SERVER['DOCUMENT_ROOT'].'/footer.php'; ?>	
		</footer>
<p>&nbsp;<p>
<p>&nbsp;<p>			
<p>&nbsp;<p>
<p>&nbsp;<p>			
<p>&nbsp;<p>
<p>&nbsp;<p>			
<p>&nbsp;<p>
<p>&nbsp;<p>
<p>&nbsp;<p>
<p>&nbsp;<p>			
<p>&nbsp;<p>
<p>&nbsp;<p>
<p>&nbsp;<p>
<p>&nbsp;<p>			
<p>&nbsp;<p>
<p>&nbsp;<p>			
<p>&nbsp;<p>
<p>&nbsp;<p>			
<p>&nbsp;<p>
<p>&nbsp;<p>
<p>&nbsp;<p>
<p>&nbsp;<p>			
<p>&nbsp;<p>
<p>&nbsp;<p>		
<p>&nbsp;<p>			
<p>&nbsp;<p>
<p>&nbsp;<p>
		
	</div>

	

</div>


<?php include $_SERVER['DOCUMENT_ROOT'].'/script.php'; ?>

<script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', {
        scrollOverflow: true,
		anchors: ['Privacidad'],
		//sectionsColor: ['#FFFFFF'],
        keyboardScrolling: true,
        navigation: true,
        showActiveTooltip: true,
        navigationPosition: 'left',
        navigationTooltips: ['Privacidad'],
    });
</script>
</body>
</html>