<?php include $_SERVER['DOCUMENT_ROOT'].'/config/conf.php'; ?>
<!DOCTYPE html>
<html lang="es-CR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<title>CONCASA</title>
	<meta name="author" content="CONCASA desarrolladora inmobiliaria." />
	<meta name="description" content="Venta de casas, condominios y apartamentos San Rafael de Alajuela - Costa Rica, Venezuela y Panamá."/>
	<meta property="og:description" content="Concasa | Unidades disponibles que van desde los $91.500 USD*" />
	<meta name="keywords"  content="Casas,Condominio,Apartamento,Alajuela,Venta de casas,Terrazas del Norte,Condominio 6-26,Condominio 9-10,Costa Lind, Proyectos" />
	
		

	<?php include $_SERVER['DOCUMENT_ROOT'].'/staff-top.php'; ?>
	
	<style>
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
		#privacidad li {
		    float: left;
		    width: 100%;
		    text-align: left;
		    list-style-type: square;
		}
				/*
		#section_privacidad{
		    background: url(/images/main-1.jpg);

		}*/
		.section footer ul li a {
		    color: #444;
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
    /* transition: color 0.25s ease; */
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
    /*background-color: rgba(255, 255, 255, 0.35);*/
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
    /*display: block;
    width: 60px;
    overflow: hidden;
    padding: 10px;
    border-top: 1px solid rgba(255, 255, 255, 0.58);
    white-space: nowrap;
    background-color: rgba(0, 44, 107, 0.80);
     transition: color 0.25s ease;
    -webkit-transition: width 0.2s ease;
    -moz-transition: width 0.2s ease;
    -o-transition: width 0.2s ease;
    transition: width 0.2s ease;
        height: 61px; */
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
   /*-webkit-transition: width 0.2s ease-in-out;
   -moz-transition: width 0.2s ease-in-out;
   -o-transition: width 0.2s ease-in-out;
   transition: width 0.2s ease-in-out;
    width:100%;
    background-color: rgba(255, 255, 255, 0.35);
    background-color: rgba(0, 44, 107, 0.90);*/
   -webkit-transition: right 0.2s ease-in-out;
   -moz-transition: right 0.2s ease-in-out;
   -o-transition: right 0.2s ease-in-out;
   transition: right 0.2s ease-in-out;
   right: 0;
}
/*
.li-price:hover {
    right: 0;
}
.li-location:hover {
    right: 0;
}
.li-rooms:hover {
    right: 0;
}
*/
ul.botton-right-nav li a {
    /*color: #fff;
    text-decoration: none;*/
    display: inline;
    width: 100%;
    height: 100%;
    text-decoration: none;
}
ul.botton-right-nav li a span {
  /* font-size: 25px;
    margin-top: 8px;
    display: inline-block;
    float: left;*/
    color: #fff;
    font-size: 19px;
}
ul.botton-right-nav li img {
   /* margin-right: 10px;
    max-width: 42px;
    height: auto;*/
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
    /*height: 55px;*/
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
      /*width: 25%;*/
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
/*
background-image: url(data:image/svg+xml;utf8;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMjgiIGhlaWdodD0iMTI4IiB2aWV3Qm94PSIwIDAgNTEwIDUxMCI+PHBhdGggZD0iTTI1NSAxMDJWMEwxMjcuNSAxMjcuNSAyNTUgMjU1VjE1M2M4NC4xNSAwIDE1MyA2OC44NSAxNTMgMTUzcy02OC44NSAxNTMtMTUzIDE1My0xNTMtNjguODUtMTUzLTE1M0g1MWMwIDExMi4yIDkxLjggMjA0IDIwNCAyMDRzMjA0LTkxLjggMjA0LTIwNC05MS44LTIwNC0yMDQtMjA0eiIgZmlsbD0iI0ZGRiIvPjwvc3ZnPg==);
*/
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
/*
 background-image: url(data:image/svg+xml;utf8;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEiIHdpZHRoPSIxNzA2LjY2NyIgaGVpZ2h0PSIxNzA2LjY2NyIgdmlld0JveD0iMCAwIDEyODAgMTI4MCI+PHBhdGggZD0iTTE1Ny42MzUgMi45ODRMMTI2MC45NzkgNjQwIDE1Ny42MzUgMTI3Ny4wMTZ6IiBmaWxsPSIjZmZmIi8+PC9zdmc+);
 */
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

	<div class="section " id="section_privacidad">
		
		<?php include $_SERVER['DOCUMENT_ROOT'].'/nav.php'; ?>

<div class="paddingtop45">&nbsp;</div>
	
 <div class="container paddingtop45" id="privacidad">
	 
		<div class="intro">
			<h2>POLÍTICA DE PRIVACIDAD</h2>
		</div>

<br>
<p>La presente Política de Privacidad establece los términos en que usa y protege la información que es proporcionada por sus usuarios al momento de utilizar su sitio web. Esta compañía está comprometida con la seguridad de los datos de sus usuarios. Cuando le pedimos llenar los campos de información personal con la cual usted pueda ser identificado, lo hacemos asegurando que sólo se empleará de acuerdo con los términos de este documento. Sin embargo esta Política de Privacidad puede cambiar con el tiempo o ser actualizada por lo que le recomendamos y enfatizamos revisar continuamente esta página para asegurarse que está de acuerdo con dichos cambios.</p><p><strong>Información que es recogida</strong></p><p>Nuestro sitio web podrá recoger información personal por ejemplo: Nombre,&nbsp; información de contacto como&nbsp; su dirección de correo electrónica e información demográfica. Así mismo cuando sea necesario podrá ser requerida información específica para procesar algún pedido o realizar una entrega o facturación.</p><p><strong>Uso de la información recogida</strong></p><p>Nuestro sitio web emplea la información con el fin de proporcionar el mejor servicio posible, particularmente para mantener un registro de usuarios, de pedidos en caso que aplique, y mejorar nuestros productos y servicios. &nbsp;Es posible que sean enviados correos electrónicos periódicamente a través de nuestro sitio con ofertas especiales, nuevos productos y otra información publicitaria que consideremos relevante para usted o que pueda brindarle algún beneficio, estos correos electrónicos serán enviados a la dirección que usted proporcione y podrán ser cancelados en cualquier momento.</p><p>Concasa está altamente comprometido para cumplir con el compromiso de mantener su información segura. Usamos los sistemas más avanzados y los actualizamos constantemente para asegurarnos que no exista ningún acceso no autorizado.</p><p><strong>Cookies</strong></p><p>Una cookie se refiere a un fichero que es enviado con la finalidad de solicitar permiso para almacenarse en su ordenador, al aceptar dicho fichero se crea y la cookie sirve entonces para tener información respecto al tráfico web, y también facilita las futuras visitas a una web recurrente. Otra función que tienen las cookies es que con ellas las web pueden reconocerte individualmente y por tanto brindarte el mejor servicio personalizado de su web.</p><p>Nuestro sitio web emplea las cookies para poder identificar las páginas que son visitadas y su frecuencia. Esta información es empleada únicamente para análisis estadístico y después la información se elimina de forma permanente. Usted puede eliminar las cookies en cualquier momento desde su ordenador. Sin embargo las cookies ayudan a proporcionar un mejor servicio de los sitios web, estás no dan acceso a información de su ordenador ni de usted, a menos de que usted así lo quiera y la proporcione directamente. Usted puede aceptar o negar el uso de cookies, sin embargo la mayoría de navegadores aceptan cookies automáticamente pues sirve para tener un mejor servicio web. También usted puede cambiar la configuración de su ordenador para declinar las cookies. Si se declinan es posible que no pueda utilizar algunos de nuestros servicios.</p><p><strong>Enlaces a Terceros</strong></p><p>Este sitio web pudiera contener en laces a otros sitios que pudieran ser de su interés. Una vez que usted de clic en estos enlaces y abandone nuestra página, ya no tenemos control sobre al sitio al que es redirigido y por lo tanto no somos responsables de los términos o privacidad ni de la protección de sus datos en esos otros sitios terceros. Dichos sitios están sujetos a sus propias políticas de privacidad por lo cual es recomendable que los consulte para confirmar que usted está de acuerdo con estas.</p><p><strong>Control de su información personal</strong></p><p>En cualquier momento usted puede restringir la recopilación o el uso de la información personal que es proporcionada a nuestro sitio web.&nbsp; Cada vez que se le solicite rellenar un formulario, como el de alta de usuario, puede marcar o desmarcar la opción de recibir información por correo electrónico. &nbsp;En caso de que haya marcado la opción de recibir nuestro boletín o publicidad usted puede cancelarla en cualquier momento.</p><p>Esta compañía no venderá, cederá ni distribuirá la información personal que es recopilada sin su consentimiento, salvo que sea requerido por un juez con un orden judicial.</p><p>Se reserva el derecho de cambiar los términos de la presente Política de Privacidad en cualquier momento.</p><p>&nbsp;</p><h3 style="text-align: center;">REGLAMENTO DE PROMOCIONES</h3><p>&nbsp;</p><p style="text-align: center;"><strong>REGALÍA DE $5000USD* APLICABLES A LA PRIMA </strong></p><p>&nbsp;</p><p><strong>QUIENES PARTICIPAN:</strong></p><p>La presente promoción aplicará únicamente para los clientes que reserven su casa de 3 habitaciones en Condominio Terrazas del Norte, para entrega inmediata y firmen la opción de compra máximo 15 días después. Dicha promoción aplica para todo el mes de Agosto del 2018.</p><p>&nbsp;</p><p><strong>&nbsp;</strong></p><p style="text-align: center;"><strong>REGALÍA DE TELEVISOR PANTALLA PLANA</strong></p><p><strong>QUIENES PARTICIPAN:</strong></p><p>La presente promoción aplicará únicamente para los clientes que reserven su casa de 2 habitaciones en Condominio Terrazas del Norte, para entrega inmediata y firmen la opción de compra máximo 15 días después. Dicha promoción aplica para todo el mes de Agosto del 2018.</p><p>&nbsp;</p><p><strong>RESTRICCIONES</strong></p><ol><li>Aplica únicamente para casas de entrega inmediata</li><li>La firma de la opción de compra debe realizarse en un plazo máximo de 15 días</li><li>No aplican con otras promociones o beneficios</li><li>Aplica solo para el mes de Agosto 2018</li></ol>
<p>&nbsp;<p>
<p style="text-align: center;"><strong>PROMOCIÓN PRIMA DE  1 MILLÓN</strong></p>
<p>QUIENES PARTICIPAN:</p>
<p>La presente promoción aplicará únicamente para los clientes que reserven su casa de 3 habitaciones en Condominio Terrazas del Norte, para entrega inmediata y firmen la opción de compra máximo 15 días después. Dicha promoción aplica hasta agotar existencias.</p>
<p>RESTRICCIONES</p>
<p>Aplica únicamente para casas de entrega inmediata<br>
  La firma de la opción de compra debe realizarse en un plazo máximo de 15 días<br>
  No aplican con otras promociones o beneficios<br>
  Aplica solo hasta agotar existencias</p>
<p style="text-align: center;"><strong>PROMOCIÓN PRIMA DE $3000 </strong></p>
<p>QUIENES PARTICIPAN:</p>
<p>La presente promoción aplicará únicamente para los clientes que reserven su apartamento en el Condominio 6-26, para entrega en el mes de octubre y firmen la opción de compra máximo 15 días después. Dicha promoción aplica hasta agotar existencias.</p>
<p>RESTRICCIONES</p>
<p>Aplica únicamente para apartamentos para entrega en el mes de octubre<br>
  La firma de la opción de compra debe realizarse en un plazo máximo de 15 días<br>
  El monto de la prima no incluye gastos de cierre y protocolización<br>
  No aplican con otras promociones o beneficios<br>
  Aplica solo hasta agotar existencias</p>	
<span class="space_text_int"></span>
	<p>&nbsp;<p>
		<p>&nbsp;<p>
			<p>&nbsp;<p>

	</div>

<footer>
			<?php include $_SERVER['DOCUMENT_ROOT'].'/footer.php'; ?>	
		</footer>

</div>



</div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/script.php'; ?>


<script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', {
        scrollOverflow: true,
		anchors: ['Privacidad'],
		sectionsColor: ['#FFFFFF'],
        keyboardScrolling: true,
        navigation: true,
        showActiveTooltip: true,
        navigationPosition: 'left',
        navigationTooltips: ['Privacidad'],
    });
</script>

</body>
</html>