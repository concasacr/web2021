<?php include $_SERVER['DOCUMENT_ROOT'].'/config/conf.php'; ?>
<!DOCTYPE html>
<html lang="es-CR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<title>CONCASA | CONTATENOS </title>
	<meta name="author" content="CONCASA desarrolladora inmobiliaria." />
	<meta name="description" content="Venta de casas, condominios y apartamentos San Rafael de Alajuela - Costa Rica, Venezuela y Panamá."/>
	<meta property="og:description" content="Concasa | Unidades disponibles que van desde los $91.500 USD*" />
	<meta name="keywords"  content="Casas,Condominio,Apartamento,Alajuela,Venta de casas,Terrazas del Norte,Condominio 6-26,Condominio 9-10,Costa Lind, Proyectos" />
	
		

	<?php include $_SERVER['DOCUMENT_ROOT'].'/staff-top.php'; ?>
	
	<style>
		/*
		.navbar-dark .navbar-nav .active>.nav-link, .navbar-dark .navbar-nav .nav-link.active, .navbar-dark .navbar-nav .nav-link.show, .navbar-dark .navbar-nav .show>.nav-link {
		    color: #444;
		}
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
		.prague_services {
		    max-height: 520px !important;
		    height: 100% !important;
		}	*/	
		#section0 {
		   /* background: url(https://concasa.com/wp-content/uploads/2018/07/postventa.jpg) !important;
			background-position: 0% 20% !important;*/
		}
		/*
		.intro h1 {
		    text-shadow: 1px 1px 1px #000;
		}
		*/
		div#section-cl02 .fp-tableCell {
		    padding-top: 0px !important;
		}
		.holder-home {
			background: url(/images/icons/home.svg) center center;
			display: block;
		    width: 50px;
		    height: 40px;
		    text-align: center;
		    background-repeat: no-repeat;
		}
		footer#blanckpage a {
		    color: #444 !important;
		}
		.btn-white {
				color: #444;
		}
		.btn-white:hover {
				color: #FFF;
		}
		.container-contact {
		    background: #fffffff2;
		    border-radius: 12px;
		    -webkit-box-shadow: 0 30px 50px rgba(0,0,0,.2);
		    box-shadow: 0 30px 50px rgba(0,0,0,.2);
		}
		/*.prague_services {
		    top: 35%;
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
		*/
		
		/* Conatct start */

        .header-title
        {
          text-align: center;
          color:#80d7ed;
        }

        #tip 
        {
            display:none;  
        }

        .fadeIn
        {
          animation-duration: 3s;
        }

        .form-control
        {
        	border-radius:0px;
        	border:1px solid #EDEDED;
        }

        .form-control:focus
        {
        	border:1px solid #80d7ed;
        }

        .textarea-contact
        {
        	resize:none; 
        }

        .btn-send
        {
        	border-radius: 0px;
        	border:1px solid #80d7ed;
        	background:#80d7ed;
        	color:#fff; 
        }

        .btn-send:hover
        {
        	border:1px solid #80d7ed;
        	background:#fff;
        	color:#80d7ed;
        	transition:background 0.5s;   
        }
        #parent {
		    margin-top: 15px;
		}
		/*
        .second-portion
        {
        	margin-top:50px; 
        }
*/

		.box > .icon { text-align: center; position: relative; }
		.box > .icon > .image { position: relative; z-index: 2; margin: auto; width: 88px; height: 88px; border: 8px solid white; line-height: 88px; border-radius: 50%; background: #80d7ed; vertical-align: middle; }
		.box > .icon:hover > .image { background: #093c78; }
		.box > .icon > .image > i { font-size: 36px !important; color: #fff !important; }
		.box > .icon:hover > .image > i { color: white !important; }
		.box > .icon > .info { margin-top: -10px; background: rgba(0, 0, 0, 0.04); border: 1px solid #e0e0e0; padding: 15px 0 10px 0; min-height:163px;}
		.box > .icon:hover > .info { background: rgba(0, 0, 0, 0.04); border-color: #e0e0e0; color: white; }
		.box > .icon > .info > h3.title { font-family: "Robot",sans-serif !important; font-size: 16px; color: #222; font-weight: 700; }
		.box > .icon > .info > p { font-family: "Robot",sans-serif !important; font-size: 13px; color: #666; line-height: 1.5em; margin: 20px;}
		.box > .icon:hover > .info > h3.title, .box > .icon:hover > .info > p, .box > .icon:hover > .info > .more > a { color: #222; }
		.box > .icon > .info > .more a { font-family: "Robot",sans-serif !important; font-size: 12px; color: #222; line-height: 12px; text-transform: uppercase; text-decoration: none; }
		.box > .icon:hover > .info > .more > a { color: #fff; padding: 6px 8px; background-color: #63B76C; }
		.box .space { height: 30px; }

		@media only screen and (max-width: 768px)
		{
			.contact-form
			{
				margin-top:25px; 
			}

			.btn-send
			{
				width: 100%;
				padding:10px; 
			}

			.second-portion
			{
				margin-top:25px; 
			}
		}
	/* Conatct end */
		.col-md-6 {
		    float: left;
		}
		.fp-tableCell {
		    padding-top: 0% !important;
		
		}
		.section footer ul li a {
    color: #444;
}
.navbar-dark .navbar-nav .active>.nav-link, .navbar-dark .navbar-nav .nav-link.active, .navbar-dark .navbar-nav .nav-link.show, .navbar-dark .navbar-nav .show>.nav-link {
    color: #444;
}
.intro {
    padding-top: 6%;
}

.intro h1 {
    color: #444;
    font-size: 30px;
}
.intro h1 span {
	    font-size: 47% !important;
}	
.form-control {
    font-weight: lighter !important;
    font-family: "Robot",sans-serif !important;
}
.second-portion {
    margin-bottom: 30px;
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
	<style>

/* CSS IF FOMRS */
.infusion-form {
    width: 85%;
    margin: 0 auto;
    display: block;
}
.infusion-field label {
    display: none;
}
.infusion-field input {
    width: 100%;
    border-bottom: 1px dashed #ced4da !important;
    border-top: 0px !important;
    border-left: 0px !important;
    border-right: 0px !important;
    border-radius: 0px !important;
    margin-bottom: 10px;
    height: 35px;
    color: #6b6868;
}
.infusion-field textarea {
    width: 100%;
    border-bottom: 1px dashed #ced4da !important;
    border-top: 0px !important;
    border-left: 0px !important;
    border-right: 0px !important;
    border-radius: 0px !important;
    margin-bottom: 5px;
}
.infusion-submit button {
	font-size: 17px !important;
    position: relative;
    -webkit-appearance: button;
    cursor: pointer;
    border-radius: 10px !important;
    border: 2px solid #6b6868 !important;
    background-color: transparent;
    background-image: none;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    line-height: 1.5;
    padding: .375rem .75rem;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    width: 220px !important;
    display: block !important;
    margin: 10px auto !important;
    color: #6b6868 !important;
}
.infusion-submit button:hover {
	background: #6b6868 !important;
	color: #fff !important;
	border: 2px solid #403f3f !important;
}

</style>
</head>
<body>


<div id="fullpage" data-menuanchor="gotop">

		<div class="section" id="section00">
			
		<?php include $_SERVER['DOCUMENT_ROOT'].'/nav.php'; ?>

			   
				<div class="intro">
					<h1>CONTÁCTENOS
						<span>MANTÉNGASE EN CONTACTO</span>
					</h1>
				</div>
			


				<!--<div class="container container-contact">-->
				   



<div class="container animated fadeIn">

  <div class="row">
   
    <div class="col-sm-12" id="parent">
    	
    	<div class="col-md-6">
    	<iframe width="100%" height="262px;" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.726095613583!2d-84.22944858465324!3d9.956731892880848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0f9276632e8d3%3A0x7de9161fd926e03d!2sCONCASA!5e0!3m2!1ses!2scr!4v1533655308310" allowfullscreen></iframe>
    	</div>

    	<div class="col-md-6">
			    
			 <form accept-charset="UTF-8" action="https://wx394.infusionsoft.com/app/form/process/70fd1ac48bd8dbc90fdea7225d204128" class="infusion-form" id="inf_form_70fd1ac48bd8dbc90fdea7225d204128" method="POST">
			    <input name="inf_form_xid" type="hidden" value="70fd1ac48bd8dbc90fdea7225d204128" />
			    <input name="inf_form_name" type="hidden" value="Website Form ~br~Todos los Proyectos ~br~Contacto" />
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
        <textarea cols="24" id="inf_misc_¿Algunapreguntaenespecial" name="inf_misc_¿Algunapreguntaenespecial" placeholder="&iquest;Alguna pregunta en especial?" rows="2"></textarea></div>
    <div class="infusion-submit">
        <button class="infusion-recaptcha" id="recaptcha_70fd1ac48bd8dbc90fdea7225d204128" type="submit">CONTACTENOS</button>
    </div>
</form>
    	</div>
    	
    </div>
    
  </div>

  <div class="container second-portion">
	<div class="row">
        <!-- Boxes de Acoes -->
    	<div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">TELEFONO</h3>
						<p>
							<i class="fa fa-envelope" aria-hidden="true"></i> &nbsp info@concasa.com
							<br>
							<br>
							<i class="fa fa-globe" aria-hidden="true"></i> &nbsp www.concasa.com
						</p>
					
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
			
        <div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">CONTACTO</h3>
    					<p>
							<i class="fa fa-mobile" aria-hidden="true"></i> &nbsp (+506) 2438 9075
							<br>
							<br>
							<i class="fa fa-mobile" aria-hidden="true"></i> &nbsp  (+506) 8848 2272 &nbsp Whatsapp
						</p>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
			
        <div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">DIRECCION</h3>
    					<p>
							 <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp Condominio Campo Real, Antiguo Hipódromo del Sol, San Rafael de Alajuela, sobre Autopista Ruta 27, 7km Oeste de Forum 1, Provincia de Alajuela
						</p>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>		    
		<!-- /Boxes de Acoes -->
		
		<!--My Portfolio  dont Copy this -->
	    
	</div>
</div>
</div>
				
				<!--</div>-->

				<footer><?php include $_SERVER['DOCUMENT_ROOT'].'/footer.php'; ?></footer>

		</div>

</div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/script.php'; ?>

<script type="text/javascript" src="scripts_new/jquery.js"></script>

<script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', {
        scrollOverflow: true,
		anchors: ['Contactenos'],
		sectionsColor: ['#FFFFFF'],
        keyboardScrolling: true,
        navigation: true,
        showActiveTooltip: true,
        navigationPosition: 'left',
        navigationTooltips: ['Contáctenos'],
    });
    
   
  
</script>

<script type="text/javascript" src="https://wx394.infusionsoft.app/app/webTracking/getTrackingCode"></script>
<script type="text/javascript" src="https://wx394.infusionsoft.com/resources/external/recaptcha/production/recaptcha.js?b=1.70.0.216758-hf-202004090156"></script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadInfusionRecaptchaCallback&render=explicit" async="async" defer="defer"></script>
<script type="text/javascript" src="https://wx394.infusionsoft.com/app/timezone/timezoneInputJs?xid=70fd1ac48bd8dbc90fdea7225d204128"></script>

</body>
</html>