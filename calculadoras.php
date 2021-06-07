<?php
	
include $_SERVER['DOCUMENT_ROOT'].'/config/conf.php';
		
	$Proyecto = $_GET['proyecto'];
	
switch ($Proyecto) 
{
    case '':
        $ProyectoCostaRica  = 'Terrazas del Norte General'; 
		$LogoProyecto 		= '/images/l-terrazas-w.png';
		$ImgProyecto 		= '/images/calc/tn.jpg';
		$TextoProyecto 		= 'Terrazas del Norte es nuestro proyecto de casas en condominio. Consta de unidades de <strong>2 y 3 habitaciones</strong> con dimensiones de <strong>75 m²</strong> y <strong>103 m²</strong> respectivamente. Está ubicado en San Rafael de Alajuela, cuenta con seguridad 24/7 y amenidades como casa club, terraza, piscina con juegos acuáticos, ranchos BBQ, parque para mascotas, entre otras.';
		$ValorProyecto 		= number_format(getPrecioProperty('Terrazas','1'), 0, '.', ',');
		$InicialProyecto 	= getPrimaProperty('Terrazas','1');
		$PlazoProyecto 		= '30';	
        break;
    case 'tn':
        $ProyectoCostaRica  = 'Terrazas del Norte General'; 
		$LogoProyecto 		= '/images/l-terrazas-w.png';
		$ImgProyecto 		= '/images/calc/tn.jpg';
		$TextoProyecto 		= 'Terrazas del Norte es nuestro proyecto de casas en condominio. Consta de unidades de <strong>2 y 3 habitaciones</strong> con dimensiones de <strong>75 m²</strong> y <strong>103 m²</strong> respectivamente. Está ubicado en San Rafael de Alajuela, cuenta con seguridad 24/7 y amenidades como casa club, terraza, piscina con juegos acuáticos, ranchos BBQ, parque para mascotas, entre otras.';
		$ValorProyecto 		= number_format(getPrecioProperty('Terrazas','1'), 0, '.', ',');
		$InicialProyecto 	= getPrimaProperty('Terrazas','1');
		$PlazoProyecto 		= '30';	
        break;
    case '626':
        $ProyectoCostaRica  = 'Condominio 6-26'; 
		$LogoProyecto 		= '/images/l-626-w.png';
		$ImgProyecto 		= '/images/calc/626.jpg';
		$TextoProyecto 		= 'Condominio 6-26 es uno de nuestros proyectos de apartamentos en torre. Consta de unidades de <strong>82 m²</strong> y <strong>94 m²</strong> con <strong>3 habitaciones</strong>. Está ubicado en San Rafael de Alajuela y cuenta con amenidades como acceso al lago, cancha de tenis, cancha multiuso, dos canchas de fútbol, pista de trote, parque para mascotas, centro comercial, entre otras.';
		$ValorProyecto 		= number_format(getPrecioProperty('626','1'), 0, '.', ',');
		$InicialProyecto 	= getPrimaProperty('626','1');
		$PlazoProyecto 		= '30';		
        break;
    case 'cl':
        $ProyectoCostaRica  = 'Costa Linda'; 
		$LogoProyecto 		= '/images/l-costa-w.png';
		$ImgProyecto 		= '/images/calc/cl.jpg';
		$TextoProyecto 		= 'Condominio Costa Linda es uno de nuestros proyectos de apartamentos en torre. Consta de unidades de <strong>89 m²</strong> con <strong>2 habitaciones</strong>. Está ubicado en Jacó, cerca de la playa, centro comercial, restaurantes y de amplia variedad de atractivos de costa del Pacífico de Costa Rica. Cuenta con área de piscina para niños y adultos, deck para bronceado, ranchos BBQ, juegos infantiles y amplias áreas verdes.';
		$ValorProyecto 		= number_format(getPrecioProperty('Costa','1'), 0, '.', ',');
		$InicialProyecto 	= getPrimaProperty('Costa','1');
		$PlazoProyecto 		= '30';		
        break;
    case 'ma':
        $ProyectoCostaRica  = 'Monte Alto'; 
		$LogoProyecto 		= '/images/l-monte-w.png';
		$ImgProyecto 		= '/images/calc/ma.jpg';
		$TextoProyecto 		= 'Monte Alto es nuestro primer proyecto en el sector este del Gran Área Metropolitana (GAM). Escogimos un hermoso terreno rodeado de naturaleza, especies nativas con una quebrada y aire fresco, ubicado en Granadilla de <strong>Curridabat</strong>. El proyecto se encuentra actualmente en etapa de preventa, con apartamentos de <strong>66 m²</strong> y <strong>81 m²</strong> con <strong>3 habitaciones</strong>.';
		$ValorProyecto 		= number_format(getPrecioProperty('Monte','1'), 0, '.', ',');
		$InicialProyecto 	= getPrimaProperty('Monte','1');
		$PlazoProyecto 		= '30';		
        break;  
}	
	
	
	
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link href="/css/widget.min.css?ver=1.1" rel="stylesheet">
		
		<!--Start of Zendesk Chat Script-->
		<script type="text/javascript">
		window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
		d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
		_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
		$.src="https://v2.zopim.com/?5nXDcUqorOdP490OjXUXDgMNm7HSaJIK";z.t=+new Date;$.
		type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
		</script>
		<!--End of Zendesk Chat Script-->
		
			<!-- Google Tag Manager -->
			<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','GTM-WWWFZD3');</script>
			<!-- End Google Tag Manager -->
	
	
		<style type="text/css">.input-group-addon{padding: 6px 12px !important; font-size: 14px !important; font-weight: 400; line-height: 1; color: #363636; text-align: center; background-color: transparent !important; border: none !important; border-radius: 0px !important;}.form-control{display: block; width: 100% !important; height: 50px !important; padding: 6px 12px !important; border: none !important; font-size: 20px !important; font-weight: bold; line-height: 1.42857143; color: #363636 !important; background-color: transparent !important; background-image: none !important; border-radius: 0px !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-transition: none !important; -o-transition: none !important; transition: none !important;}::-webkit-input-placeholder{/* Chrome/Opera/Safari */ color: rgba(255, 255, 255, 0.56) !important;}::-moz-placeholder{/* Firefox 19+ */ color: rgba(255, 255, 255, 0.56) !important;}:-ms-input-placeholder{/* IE 10+ */ color: rgba(255, 255, 255, 0.56) !important;}:-moz-placeholder{/* Firefox 18- */ color: rgba(255, 255, 255, 0.56) !important;}.select{position: relative; display: inline-block; margin-bottom: 15px; width: 100%;}.select select{font-family: 'Arial'; display: inline-block; width: 100%; cursor: pointer; padding: 14px 13px; outline: 0; border: 0px solid #000000; border-radius: 0px; background: transparent; color: #fff; appearance: none; -webkit-appearance: none; -moz-appearance: none;}.select select::-ms-expand{display: none;}.select select:hover, .select select:focus{color: #000000; background: #CCCCCC;}.select select:disabled{opacity: 0.5; pointer-events: none;}.select_arrow{position: absolute; top: 21px; right: 15px; pointer-events: none; border-style: solid; border-width: 8px 5px 0px 5px; border-color: #7B7B7B transparent transparent transparent;}.select select:hover ~ .select_arrow,.select select:focus ~ .select_arrow{border-top-color: transparent;}.select select:disabled ~ .select_arrow{border-top-color: #CCCCCC;}.a-btn{font-family:Roboto,sans-serif; font-size:11px; line-height:18px; letter-spacing:2px; font-weight:500; display:inline-block; text-decoration:none; position:relative; -webkit-box-sizing:border-box; box-sizing:border-box; padding:15px 46px; background-color:transparent; border:none; color:#fff; -webkit-transition:color .3s ease-in,background-color .3s ease-in; -o-transition:color .3s ease-in,background-color .3s ease-in; transition:color .3s ease-in,background-color .3s ease-in}.a-btn:after,.a-btn:before{content:''; display:block; position:absolute; -webkit-box-sizing:border-box; box-sizing:border-box}.a-btn:after{top:0; left:0}.a-btn:before{bottom:0; right:0}.a-btn .a-btn-line{position:absolute; top:0; left:0; right:0; bottom:0; z-index:20}.a-btn .a-btn-line:after,.a-btn .a-btn-line:before{content:''; display:block; position:absolute; -webkit-box-sizing:border-box; box-sizing:border-box; top:50%; height:1px; background-color:#fff}.a-btn .a-btn-line:before{left:-11px}.a-btn .a-btn-line:after{right:-11px}.a-btn.simple:after,.a-btn.simple:before{border:1px solid #fff; width:100%; height:100%}.a-btn.simple .a-btn-line:after,.a-btn.simple .a-btn-line:before{width:22px; -webkit-transition:background-color .3s ease-in; -o-transition:background-color .3s ease-in; transition:background-color .3s ease-in}.a-btn.creative:after,.a-btn.creative:before{border:1px solid #fff; width:0; height:0}.a-btn.creative:after{-webkit-transition:border-color 0s ease-in 1.5s,width .3s ease-in 1.2s,height .3s ease-in .9s; -o-transition:border-color 0s ease-in 1.5s,width .3s ease-in 1.2s,height .3s ease-in .9s; transition:border-color 0s ease-in 1.5s,width .3s ease-in 1.2s,height .3s ease-in .9s}.a-btn.creative:before{-webkit-transition:border-color 0s ease-in .9s,width .3s ease-in .6s,height .3s ease-in .3s; -o-transition:border-color 0s ease-in .9s,width .3s ease-in .6s,height .3s ease-in .3s; transition:border-color 0s ease-in .9s,width .3s ease-in .6s,height .3s ease-in .3s}.a-btn.creative .a-btn-line:after,.a-btn.creative .a-btn-line:before{width:0; -webkit-transition:width .3s ease-in 0s,background-color .3s ease-in; -o-transition:width .3s ease-in 0s,background-color .3s ease-in; transition:width .3s ease-in 0s,background-color .3s ease-in}.a-btn.creative.anima:after,.a-btn.creative.anima:before{width:100%; height:100%}.a-btn.creative.anima:after{border-top-color:#fff; border-right-color:#fff; -webkit-transition:width .3s ease-out,height .3s ease-out .3s; -o-transition:width .3s ease-out,height .3s ease-out .3s; transition:width .3s ease-out,height .3s ease-out .3s}.a-btn.creative.anima:before{border-bottom-color:#fff; border-left-color:#fff; -webkit-transition:border-color 0s ease-out .4s,width .3s ease-out .6s,height .3s ease-out .9s; -o-transition:border-color 0s ease-out .4s,width .3s ease-out .6s,height .3s ease-out .9s; transition:border-color 0s ease-out .4s,width .3s ease-out .6s,height .3s ease-out .9s}.a-btn.creative.anima .a-btn-line:after,.a-btn.creative.anima .a-btn-line:before{width:22px; -webkit-transition:width .3s ease-out 1.2s,background-color .3s ease-in; -o-transition:width .3s ease-out 1.2s,background-color .3s ease-in; transition:width .3s ease-out 1.2s,background-color .3s ease-in}.a-btn:focus,.a-btn:hover{color:transparent; background-color:#fff; text-decoration:none}.a-btn:focus .a-btn-line:after,.a-btn:focus .a-btn-line:before,.a-btn:hover .a-btn-line:after,.a-btn:hover .a-btn-line:before{background-color:transparent}.a-btn-2{font-family:Roboto,sans-serif; font-size:11px; line-height:18px; letter-spacing:2px; font-weight:500; display:block; text-decoration:none; position:relative; -webkit-box-sizing:border-box; box-sizing:border-box; padding:15px 36px; background-color:transparent; border:none; color:#363636; margin: 0 auto; -webkit-transition:color .3s ease-in,background-color .3s ease-in; -o-transition:color .3s ease-in,background-color .3s ease-in; transition:color .3s ease-in,background-color .3s ease-in}.a-btn-2:after,.a-btn-2:before{content:''; display:block; position:absolute; -webkit-box-sizing:border-box; box-sizing:border-box}.a-btn-2:after{top:0; left:0}.a-btn-2:before{bottom:0; right:0}.a-btn-2 .a-btn-line{position:absolute; top:0; left:0; right:0; bottom:0; z-index:20}.a-btn-2 .a-btn-line:after,.a-btn-2 .a-btn-line:before{content:''; display:block; position:absolute; -webkit-box-sizing:border-box; box-sizing:border-box; top:50%; height:1px; background-color:transparent}.a-btn-2 .a-btn-line:before{left:-11px}.a-btn-2 .a-btn-line:after{right:-11px}.a-btn-2.simple:after,.a-btn-2.simple:before{border:1px solid transparent; width:100%; height:100%}.a-btn-2.simple .a-btn-line:after,.a-btn-2.simple .a-btn-line:before{width:22px; -webkit-transition:background-color .3s ease-in; -o-transition:background-color .3s ease-in; transition:background-color .3s ease-in}.a-btn-2.creative:after,.a-btn-2.creative:before{border:1px solid #363636; width:0; height:0}.a-btn-2.creative:after{-webkit-transition:border-color 0s ease-in 1.5s,width .3s ease-in 1.2s,height .3s ease-in .9s; -o-transition:border-color 0s ease-in 1.5s,width .3s ease-in 1.2s,height .3s ease-in .9s; transition:border-color 0s ease-in 1.5s,width .3s ease-in 1.2s,height .3s ease-in .9s}.a-btn-2.creative:before{-webkit-transition:border-color 0s ease-in .9s,width .3s ease-in .6s,height .3s ease-in .3s; -o-transition:border-color 0s ease-in .9s,width .3s ease-in .6s,height .3s ease-in .3s; transition:border-color 0s ease-in .9s,width .3s ease-in .6s,height .3s ease-in .3s}.a-btn-2.creative .a-btn-line:after,.a-btn-2.creative .a-btn-line:before{width:0; -webkit-transition:width .3s ease-in 0s,background-color .3s ease-in; -o-transition:width .3s ease-in 0s,background-color .3s ease-in; transition:width .3s ease-in 0s,background-color .3s ease-in}.a-btn-2.creative.anima:after,.a-btn-2.creative.anima:before{width:100%; height:100%}.a-btn-2.creative.anima:after{border-top-color:transparent; border-right-color:transparent; -webkit-transition:width .3s ease-out,height .3s ease-out .3s; -o-transition:width .3s ease-out,height .3s ease-out .3s; transition:width .3s ease-out,height .3s ease-out .3s}.a-btn-2.creative.anima:before{border-bottom-color:transparent; border-left-color:transparent; -webkit-transition:border-color 0s ease-out .4s,width .3s ease-out .6s,height .3s ease-out .9s; -o-transition:border-color 0s ease-out .4s,width .3s ease-out .6s,height .3s ease-out .9s; transition:border-color 0s ease-out .4s,width .3s ease-out .6s,height .3s ease-out .9s}.a-btn-2.creative.anima .a-btn-line:after,.a-btn-2.creative.anima .a-btn-line:before{width:22px; -webkit-transition:width .3s ease-out 1.2s,background-color .3s ease-in; -o-transition:width .3s ease-out 1.2s,background-color .3s ease-in; transition:width .3s ease-out 1.2s,background-color .3s ease-in}.a-btn-2:focus,.a-btn-2:hover{color:#fff; background-color:#0d4683; text-decoration:none; outline-color:#fff}.a-btn-2:focus .a-btn-line:after,.a-btn-2:focus .a-btn-line:before,.a-btn-2:hover .a-btn-line:after,.a-btn-2:hover .a-btn-line:before{background-color:#fff}.a-btn-arrow{position:relative; display:inline-block; font-family:Roboto,sans-serif; font-size:11px; line-height:30px; letter-spacing:2px; font-weight:500; text-decoration:none; padding-right:50px; color:#fff}.a-btn-arrow .arrow-right{background-color:#fff}.a-btn-arrow .arrow-right:after,.a-btn-arrow .arrow-right:before{background-color:#fff}.a-btn-arrow:focus,.a-btn-arrow:hover{text-decoration:none; outline-color:transparent; color:#fff}.a-btn-arrow:focus .arrow-right,.a-btn-arrow:hover .arrow-right{right:0}.a-btn-arrow-2{position:relative; display:inline-block; font-family:Roboto,sans-serif; font-size:11px; line-height:30px; letter-spacing:2px; font-weight:500; text-decoration:none; padding-right:50px; color:#111}.a-btn-arrow-2 .arrow-right{background-color:#111}.a-btn-arrow-2 .arrow-right:after,.a-btn-arrow-2 .arrow-right:before{background-color:#111}.a-btn-arrow-2:focus,.a-btn-arrow-2:hover{text-decoration:none; outline-color:transparent; color:#111}.a-btn-arrow-2:focus .arrow-right,.a-btn-arrow-2:hover .arrow-right{right:0}.arrow-right{display:inline-block; position:absolute; top:50%; margin-top:-1px; right:10px; width:31px; height:1px; -webkit-transition:right .3s ease-in; -o-transition:right .3s ease-in; transition:right .3s ease-in}.arrow-right:after,.arrow-right:before{position:absolute; display:block; right:0; width:6px; height:1px; content:''}.arrow-right:before{bottom:1px; -webkit-transform:translateX(0) translateY(3px) rotate(-45deg); -ms-transform:translateX(0) translateY(3px) rotate(-45deg); transform:translateX(0) translateY(3px) rotate(-45deg)}.arrow-right:after{top:1px; -webkit-transform:translateX(0) translateY(-3px) rotate(45deg); -ms-transform:translateX(0) translateY(-3px) rotate(45deg); transform:translateX(0) translateY(-3px) rotate(45deg)}.arrow-right.grey{background-color:#7e7d7d}.arrow-right.grey:after,.arrow-right.grey:before{background-color:#7e7d7d}#rmcp_input_1_0{text-align: right;}#rmcp_input_1_1{text-align: right;}#rmcp_input_1_3{text-align: right;}#div_bancos{margin-top: 30px; background: #003476; color: #fff; padding: 20px; border-top: 1px solid #093037;}.negrita{font-weight: bolder;}.text-center{text-align: center;}#div_bancos h2{font-size: 5rem; color: #FF1F48; font-weight: lighter;}#div_bancos h5{font-size: 1.25rem; font-family: inherit; line-height: 1.1; margin-bottom: 0.5rem; margin-top: 0; color: #fff;}.pt-2{padding-top: 0.5rem; color: #fff;}.pt-2 span{color: #fff;}.p-3{font-size: 74%;}@import url('https://fonts.googleapis.com/css?family=Quicksand:300,400,500');body{font-family: 'Quicksand', sans-serif; font-weight: lighter !important;}pre{tab-size: 8;}@media screen and (max-width: 768px){.side-collapse-container{width:100%; position:relative; left:0; transition:left .4s;}.side-collapse-container.out{left:200px;}.side-collapse{top:50px; bottom:0; right:0; width:200px; position:fixed; overflow:hidden; transition:width .4s;}.side-collapse.in{width:0;}}a.navbar-brand{background-image: url(../images/logo-dark.png); display: block; width: 80%; background-size: contain; background-repeat: no-repeat; background-position: 70%;}.navbar-default{border-color: transparent !important;}.input-group{border-bottom: 1px solid #093037;}.select{border-bottom: 1px solid #093037 !important;}.logo-top{width: 70%; margin: 0 auto; display: block;}ul.social-fotter{list-style: none; margin: 0; padding: 0; text-align: center;}ul.social-fotter li{display: inline-block; width: 50px; text-align: center; height: 50px; line-height: 50px; font-size: 30px;}ul.social-fotter li a{color: #535353;}ul.social-fotter li a:hover{color: #4294df;}video#myVideo{width: 100%;}video{width: 100%;}#form1-mobiledesktop{-webkit-box-shadow: 1px 1px 6px 1px #DBDBDB; box-shadow: 1px 1px 6px 1px #DBDBDB; padding: 10px; margin: 5px; min-height: 255px; margin-top: 0px;}@media only screen and (min-width:1024px){.logo-top{width: 25% !important;}#form1-mobiledesktop{display: block !important; width: 58% !important; float: left !important;}#form2-mobiledesktop{display: block !important; width: 40% !important; float: left !important;}#myVideobotton{display: none !important;}.mobile{display: none !important;}.desktop{display: inline-block !important;}}@media only screen and (min-width:320px) and (max-width:1024px){#form2-mobiledesktop{display: none !important;}.mobile{display: inline-block !important;}.desktop{display: none !important;}}div#header-img{background-size: cover; padding: 100px 0px 100px 0px;}.modal-title{width: 84%; float: left;}.contactField::placeholder{color:#b5b5b5 !important; font-size: 15px !important; font-weight: lighter !important;}.contactField::-webkit-input-placeholder{color:#b5b5b5 !important; font-size: 15px !important; font-weight: lighter !important;}.contactField::-moz-placeholder{color:#b5b5b5 !important; font-size: 15px !important; font-weight: lighter !important;}.contactField:-ms-input-placeholder{color:#b5b5b5 !important; font-size: 15px !important; font-weight: lighter !important;}.contactField:-moz-placeholder{color:#b5b5b5 !important; font-size: 15px !important; font-weight: lighter !important;}.formFieldWrap{display: block; width: 100%; height: 56px;}.formFieldWrap i{font-size: 35px; display: inline-block; float: left; line-height: 56px;}.contactField{width: 86% !important; border: 1px solid #d8d7d7 !important; float: right; margin: 3px;}
div#header-img {
    background: center center;
}		
		</style>

</head>
  <body style="color: #363636;">
	 
	 
	  
	<div id="header-img" style="background-image: url(<?=$ImgProyecto;?>);">
		<img src="<?=$LogoProyecto;?>" alt="Logo <?=$ProyectoCostaRica;?>" class="logo-top" style="margin: 25px auto 0 auto !important;padding-bottom: 70px;width: 40%;">  
	</div>
	
	<p style="text-align: center;padding: 31px;font-weight: lighter;background: #223a72;color: #fff;text-align: justify;"><?=$TextoProyecto;?></p>	  
	  
	  
	 



<div class="one-half first">
   <form method="post" name="rmcp_form" id="rmcp-form-1" class="rmcp-form rmcp-form-responsive rmcp-form-light">
      
<div class="container" style="margin-top: 20px;">

<div id="form1-mobiledesktop">
	
	
	<img src="../images/logo-b.svg" alt="Logo Concasa" class="logo-top" style="margin: 7px auto 5px auto;width: 45% !important;">
    <p style="text-align: center;padding: 2px;font-weight: lighter;color: #000;margin: 21px auto 45px auto;text-align: justify;">Aquí podés consultar la cuota mensual aproximada de tu nuevo apartamento. Si deseas más detalles o agendar una visita, podés solicitarla abajo.</p>
	

         <div class="form-group">
            <label class="col-md-4 control-label">Valor del Apartamento</label>
            <div class="col-md-8 inputGroupContainer rmcp-input">
               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="text" name="rmcp_input[1][0]" required="true" id="rmcp_input_1_0" class="rmcp-input-text form-control number" placeholder="$ Ingrese un valor en dolares." value="<?=$ValorProyecto;?>">
                <span class="input-group-addon">.00</span>
               </div>
               <span class="rmcp-error"></span>
            </div>
         </div>


         <div class="form-group">
            <label class="col-md-4 control-label">Pago Inicial</label>
            <div class="col-md-8 inputGroupContainer rmcp-input">
               <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                <input type="text" name="rmcp_input[1][1]" required="true" id="rmcp_input_1_1" class="rmcp-input-text form-control numbers" placeholder="% Debe ingresar un valor porcentual." value="<?=$InicialProyecto;?>">
                <span class="input-group-addon">.00</span>
               </div>
               <span class="rmcp-error"></span>
            </div>
         </div>


         <div class="form-group">
            <label class="col-md-4 control-label">Tasa de Interes</label>
            <div class="col-md-8 inputGroupContainer rmcp-input">
               <div class="select-group">
                <select name="rmcp_input[1][2]" id="rmcp_input_1_2" class="rmcp-input-select form-control select" style="width: 100%;">
                <!--<option value="8.35" selected>8.35% - $ Banco Nacional</option>
                <option value="7.95">7.95% - $ BAC San José</option>
                <option value="7.95">7.95% - $ Scotiabank</option>
                <option value="7.95">7.95% - $ Davivienda</option>-->
                
                <option value="7.80" selected>7.80% - $ Banco Nacional</option>
                <option value="7.10">7.10% - $ BAC San José</option>
                <!--option value="7.95">7.95% - $ BAC San José</option-->
                <option value="7.10">7.10% - $ Scotiabank</option>
                <option value="7.10">7.10% - $ Davivienda</option>
            </select>
               </div>
               <span class="rmcp-error"></span>
            </div>
         </div>


         <div class="form-group">
            <label class="col-md-4 control-label">Plazo del Crédito (Años)</label>
            <div class="col-md-8 inputGroupContainer rmcp-input">
               <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                <input type="number" name="rmcp_input[1][3]" required="true" id="rmcp_input_1_3" class="rmcp-input-text form-control" placeholder="años" value="<?=$PlazoProyecto;?>">
               </div>
               <span class="rmcp-error"></span>
            </div>
         </div>
         
</div>
<div id="form2-mobiledesktop">
	<video class="video" id="myVideo" loop muted data-autoplay controls poster="/images/video.png"><source src="/video/concasa_video.mp4" type="video/mp4"><source src="/video/concasa_video.webm" type="video/webm"></video>
</div>	
      

</div>

        <br style="clear:both">
      <div class="rmcp-input">
        <button type="submit" name="rmcp_input[1][4]" id="rmcp_input_1_4" class="protected-btn a-btn-2 creative anima"><span class="a-btn-line"></span>CALCULAR</button>
     </div>

      <div class="rmcp-results rmcp-results-5"></div>

      <input type="hidden" name="rmcp_ref" value="1">

   
   <div class="container" style="margin-top: 20px;">
	   
	   <div class="row">
		  <div class="col-xs-6"><a onclick="Calendly.showPopupWidget('https://calendly.com/fonchog');return false;" class="protected-btn a-btn-2 creative anima"><span class="a-btn-line"></span>+ <span class="mobile">Agendar cita</span><span class="desktop">Agendar cita con un Asesor</span></a></div>
		  <div class="col-xs-6"><a href="javascript:void();" data-toggle="modal" data-target="#exampleModal" class="protected-btn a-btn-2 creative anima"><span class="a-btn-line"></span><span class="mobile">Solicitar información</span><span class="desktop">Solicitar información</span></a></div>
		</div>
	   
   </div>
   
	   <div class="container" style="margin-top: 50px;margin-bottom: 50px;">
		   
		   <ul class="social-fotter">
			   <li><a target="_blank" href="//www.facebook.com/concasa/"><i class="fab fa-facebook-f"></i></a></li>
			   <li><a target="_blank" href="//www.instagram.com/concasa_cr/"><i class="fab fa-instagram"></i></a></li>
			   <li><a target="_blank" href="//api.whatsapp.com/send?phone=50688482272"><i class="fab fa-whatsapp"></i></a></li>
			   <li><a target="_blank" href="tel:50688482272"><i class="fas fa-mobile-alt"></i></a></li>
			   <li><a target="_blank" href="//www.waze.com/location?h=d1u0eked9"><i class="fas fa-map-marker-alt"></i></a></li>
		   </ul>   
		   
		 </div> 
   
      </form>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
	    
	<form accept-charset="UTF-8" class="infusion-form" id="inf_form_infusionsoft" method="POST"> 
		 <input name="LeadSourceId" type="hidden" value="33" />
         <input name="Country" type="hidden" value="Costa Rica" />
         <input name="ProyectoCostaRica" type="hidden" value="<?=$ProyectoCostaRica;?>" />
         <input name="ProyectoPanama" type="hidden" value="" />
         
         <input name="IdTag" type="hidden" value="359" /> <!-- Id Tag IF -->
         <input name="Integration" type="hidden" value="GL626" />
         <input name="CallName" type="hidden" value="landing626" />
		   
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Formulario de solicitud</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        
	        <div class="formFieldWrap bottom-30"><i class="far fa-user"></i><input type="text" id="inf_field_FirstName" name="inf_field_FirstName" value="" placeholder="Nombre" class="form-control contactField requiredField"  required="required"/></div>
	        
	        <div class="formFieldWrap bottom-30"><i class="far fa-user"></i><input type="text" id="inf_field_LastName" name="inf_field_LastName" value="" placeholder="Apellido" class="form-control contactField requiredField"  required="required"/></div>
	       
	        <div class="formFieldWrap bottom-30"><i class="fa fa-at"></i><input type="email" id="inf_field_Email" name="inf_field_Email" value="" placeholder="Email" class="form-control contactField requiredField requiredEmailField"  required="required"/></div>
	        
	        <div class="formFieldWrap bottom-30"><i class="far fa-user"></i><input type="text" id="inf_field_Phone1" name="inf_field_Phone1" value="" placeholder="Telefono" class="form-control contactField requiredField"  required="required"/></div>
	        
	        <div class="formFieldWrap bottom-30"><textarea class="form-control contactField" rows="2" id="inf_field_Notes" name="inf_field_Notes" placeholder="¿Alguna pregunta en especial?" title="¿Alguna pregunta en especial?" required=""></textarea></div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary contactSubmitButton" id="recaptcha_e50e816aba07a29f17ff143bf2717b91">Enviar</button>
      </div>
      
    </form>  
      
      
    </div>
  </div>
</div>




  </body>
</html>


<script type="text/javascript">
function validateEmail(email) {
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
return emailReg.test( email );
}
$('input[name="inf_field_Phone1"]').keyup(function(e){
	if (/\D/g.test(this.value)){ this.value = this.value.replace(/\D/g, ''); }
});
$('.infusion-form').on('click', '.contactSubmitButton',function() { 
	var email = $( "#inf_field_Email" ).val();
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	var validateEmail = emailReg.test( email );
		if ( email != '' && validateEmail == true ) {
			
			$('.contactSubmitButton').prop("disabled", true);
			
		 var datastring = $("#inf_form_infusionsoft").serialize();    
		 $.ajax({ type: "POST", url: "ContactSubmit.php", data: datastring, dataType: "json",
			    success: function(response) {
			      if ( response.SuccessIf == true ){
				      window.location.href = 'gracias.html'; 
			      }else{
				      $('.contactSubmitButton').prop("disabled", false);
				       alert('Los campos del formulario non obligatorios');
			      }
			    },
			    error: function() { 
				    $('.contactSubmitButton').prop("disabled", false);
				    alert('Opsss ocurrio un error intentelo de nuevo');  
				}
			});
		}else{
			 alert('Los campos del formulario son obligatorios\n por favor verifique su informacion');
			 $('.contactSubmitButton').prop("disabled", false);
		}
});
           
           

/* <![CDATA[ */
var rmcp_vars = {
    "settings": {
        "indian_system": 0,
        "thousands_separator": ",",
        "decimal_separator": ".",
        "decimal_places": 2,
        "percent_decimal_places": 2,
        "debug": 0,
        "max_processors": "100"
    },
    "definitions": {
        "1": {
            "interface": {
                "elements": [{
                    "element": "text_input",
                    "section": "interface",
                    "rank": 0,
                    "label": "Valor del Apartamento:",
                    "placeholder": "$ Ingrese un valor en d\u00f3lares.",
                    "help": "",
                    "error_message": "Valor requerido.",
                    "tag": "total_amount",
                    "required": 1,
                    "default": "",
                    "format": "currency"
                }, {
                    "element": "text_input",
                    "section": "interface",
                    "rank": 1,
                    "label": "Pago Inicial (Prima)",
                    "placeholder": "% Debe ingresar un valor porcentual.",
                    "help": "",
                    "error_message": "Valor requerido.",
                    "tag": "down_payment",
                    "required": 1,
                    "default": "",
                    "format": "percentage"
                }, {
                    "element": "select_input",
                    "section": "interface",
                    "rank": 2,
                    "label": "Tasa de Interes:",
                    "help": "",
                    "tag": "interest_rate",
                    "options": [{
                        "option_value": "8.35",
                        "option_text": "8.35% - $ Banco Nacional"
                    }, {
                        "option_value": "7.95",
                        "option_text": "7.95% - $ BAC San Jos\u00e9"
                    }, {
                        "option_value": "7.95",
                        "option_text": "7.95% - $ Scotiabank"
                    }, {
                        "option_value": "7.95",
                        "option_text": "7.95% - $ Davivienda"
                    }],
                    "default": "",
                    "format": "percentage"
                }, {
                    "element": "text_input",
                    "section": "interface",
                    "rank": 3,
                    "label": "Plazo del Cr\u00e9dito (a\u00f1os)",
                    "placeholder": "30 a\u00f1os",
                    "help": "",
                    "error_message": "Please enter an amortization period in years.",
                    "tag": "amortization_period",
                    "required": 1,
                    "default": "30",
                    "format": "number"
                }, {
                    "element": "submit_button",
                    "section": "interface",
                    "rank": 4,
                    "value": "Calcular"
                }, {
                    "element": "results",
                    "section": "interface",
                    "rank": 5,
                    "label": "Results",
                    "content": "<div id=\"div_bancos\"><h5 class=\"text-center negrita\">Cuota mensual aproximada<\/h5><h2 class=\"text-center\">$&nbsp;{mpc_payment_result}<\/h2><h6 class=\"negrita text-center pt-2\">Ingreso mínimo: <span>${mpc_min_salary}<\/span><\/h6><p class=\"text-center p-3\"><small> *Los siguientes son cálculos aproximados<br>*Las cuotas no incluyen los seguros<\/small><\/p><\/div><video class=\"video\" id=\"myVideobotton\" loop muted data-autoplay controls poster=\"/images/video.png\"><source src=\"/video/concasa_video.mp4\" type=\"video/mp4\"><source src=\"/video/concasa_video.webm\" type=\"video/webm\"></video>",
                    "annual_payment_text": "",
                    "semi_annual_payment_text": "",
                    "quarterly_payment_text": "",
                    "monthly_payment_text": "Monthly",
                    "bi_weekly_payment_text": "Bi-Weekly",
                    "weekly_payment_text": "Weekly",
                    "daily_payment_text": "",
                    "term_sw": "one week",
                    "term_pw": "{weeks} weeks",
                    "term_sm": "one month",
                    "term_pm": "{months} months",
                    "term_sy": "one year",
                    "term_py": "{years} years",
                    "term_sysw": "one year, one week",
                    "term_sypw": "one year, {weeks} weeks",
                    "term_sysm": "one year, one month",
                    "term_sypm": "one year, {months} months",
                    "term_pysw": "{years} years, one week",
                    "term_pypw": "{years} years, {weeks} weeks",
                    "term_pysm": "{years} years, one month",
                    "term_pypm": "{years} years, {months} months",
                    "no_period_text": "",
                    "annual_period_text": "",
                    "semi_annual_period_text": "",
                    "quarterly_period_text": "",
                    "monthly_period_text": "monthly",
                    "bi_weekly_period_text": "",
                    "weekly_period_text": "",
                    "daily_period_text": ""
                }],
                "settings": []
            },
            "processors": {
                "elements": {
                    "6": {
                        "element": "processor",
                        "section": "processors",
                        "rank": 6,
                        "label": "Loan Amount",
                        "error_message": "The down payment must be less than the total amount.",
                        "tag": "loan_amount",
                        "logic_value_1": "{total_amount}",
                        "logic_operator": ">=",
                        "logic_value_2": "{down_payment}",
                        "on_failure": "0",
                        "default": "{total_amount}",
                        "math_value_1": "{total_amount}",
                        "math_operator": "-",
                        "math_value_2": "{down_payment}",
                        "format": "currency"
                    },
                    "7": {
                        "element": "processor",
                        "section": "processors",
                        "rank": 7,
                        "label": "Total Cost of Monthly Loan",
                        "error_message": "",
                        "tag": "mpc_total_cost_of_loan",
                        "logic_value_1": "",
                        "logic_operator": "=",
                        "logic_value_2": "",
                        "on_failure": "0",
                        "default": "0",
                        "math_value_1": "{mpc_payment_result}",
                        "math_operator": "*",
                        "math_value_2": "{mpc_number_of_payments}",
                        "format": "currency"
                    },
                    "8": {
                        "element": "processor",
                        "section": "processors",
                        "rank": 8,
                        "label": "Interest Paid: Monthly",
                        "error_message": "",
                        "tag": "mpc_interest_paid",
                        "logic_value_1": "",
                        "logic_operator": "=",
                        "logic_value_2": "",
                        "on_failure": "0",
                        "default": "",
                        "math_value_1": "{mpc_total_cost_of_loan}",
                        "math_operator": "-",
                        "math_value_2": "{loan_amount}",
                        "format": "currency"
                    },
                    "9": {
                        "element": "processor",
                        "section": "processors",
                        "rank": 9,
                        "label": "Total Cost of Bi-Weekly Loan",
                        "error_message": "",
                        "tag": "bwpc_total_cost_of_loan",
                        "logic_value_1": "",
                        "logic_operator": "=",
                        "logic_value_2": "",
                        "on_failure": "0",
                        "default": "",
                        "math_value_1": "{bwpc_payment_result}",
                        "math_operator": "*",
                        "math_value_2": "{bwpc_number_of_payments}",
                        "format": "currency"
                    },
                    "10": {
                        "element": "processor",
                        "section": "processors",
                        "rank": 10,
                        "label": "Interest Paid: Bi-Weekly",
                        "error_message": "",
                        "tag": "bwpc_interest_paid",
                        "logic_value_1": "",
                        "logic_operator": "=",
                        "logic_value_2": "",
                        "on_failure": "0",
                        "default": "",
                        "math_value_1": "{bwpc_total_cost_of_loan}",
                        "math_operator": "-",
                        "math_value_2": "{loan_amount}",
                        "format": "currency"
                    },
                    "11": {
                        "element": "processor",
                        "section": "processors",
                        "rank": 11,
                        "label": "Total Cost of Weekly Loan",
                        "error_message": "",
                        "tag": "wpc_total_cost_of_loan",
                        "logic_value_1": "",
                        "logic_operator": "=",
                        "logic_value_2": "",
                        "on_failure": "0",
                        "default": "",
                        "math_value_1": "{wpc_payment_result}",
                        "math_operator": "*",
                        "math_value_2": "{wpc_number_of_payments}",
                        "format": "currency"
                    },
                    "12": {
                        "element": "processor",
                        "section": "processors",
                        "rank": 12,
                        "label": "Interest Paid: Weekly",
                        "error_message": "",
                        "tag": "wpc_interest_paid",
                        "logic_value_1": "",
                        "logic_operator": "=",
                        "logic_value_2": "",
                        "on_failure": "0",
                        "default": "",
                        "math_value_1": "{wpc_total_cost_of_loan}",
                        "math_operator": "-",
                        "math_value_2": "{loan_amount}",
                        "format": "currency"
                    },
                    "13": {
                        "element": "processor",
                        "section": "processors",
                        "rank": 13,
                        "label": "Monthly Property Tax",
                        "error_message": "",
                        "tag": "monthly_property_tax",
                        "logic_value_1": "",
                        "logic_operator": "=",
                        "logic_value_2": "",
                        "on_failure": "0",
                        "default": "",
                        "math_value_1": "{mpc_property_tax}",
                        "math_operator": "\/",
                        "math_value_2": "12",
                        "format": "currency"
                    },
                    "14": {
                        "element": "processor",
                        "section": "processors",
                        "rank": 14,
                        "label": "Monthly Mortgage Insurance",
                        "error_message": "",
                        "tag": "monthly_mortgage_insurance",
                        "logic_value_1": "",
                        "logic_operator": "=",
                        "logic_value_2": "",
                        "on_failure": "0",
                        "default": "",
                        "math_value_1": "{total_amount}",
                        "math_operator": "*",
                        "math_value_2": "0.000725",
                        "format": "currency"
                    },
                    "15": {
                        "element": "processor",
                        "section": "processors",
                        "rank": 15,
                        "label": "Cuota Mensual con Seguro",
                        "error_message": "",
                        "tag": "mpc_payment_insurance_result",
                        "logic_value_1": "",
                        "logic_operator": "=",
                        "logic_value_2": "",
                        "on_failure": "0",
                        "default": "",
                        "math_value_1": "{mpc_payment_result}",
                        "math_operator": "+",
                        "math_value_2": "{monthly_mortgage_insurance}",
                        "format": "currency"
                    },
                    "16": {
                        "element": "processor",
                        "section": "processors",
                        "rank": 16,
                        "label": "Ingreso Neto m\u00ednimo requerido",
                        "error_message": "",
                        "tag": "mpc_min_salary",
                        "logic_value_1": "",
                        "logic_operator": "=",
                        "logic_value_2": "",
                        "on_failure": "0",
                        "default": "",
                        "math_value_1": "{mpc_payment_insurance_result}",
                        "math_operator": "*",
                        "math_value_2": "2.45",
                        "format": "currency"
                    }
                },
                "settings": []
            },
            "subcalculations": {
                "elements": {
                    "17": {
                        "element": "cost",
                        "section": "subcalculations",
                        "rank": 17,
                        "label": "Inspection",
                        "tag": "inspection",
                        "base_cost": "400",
                        "base_rate": "",
                        "rate_basis": "property_value",
                        "rate_ranges": [],
                        "range_basis": "property_value"
                    },
                    "18": {
                        "element": "cost",
                        "section": "subcalculations",
                        "rank": 18,
                        "label": "Origination",
                        "tag": "origination",
                        "base_cost": "0",
                        "base_rate": "0.5",
                        "rate_basis": "loan_amount",
                        "rate_ranges": [],
                        "range_basis": "property_value"
                    },
                    "19": {
                        "element": "cost",
                        "section": "subcalculations",
                        "rank": 19,
                        "label": "Land Transfer Tax",
                        "tag": "land_transfer_tax",
                        "base_cost": "0",
                        "base_rate": "0",
                        "rate_basis": "property_value",
                        "rate_ranges": [{
                            "type": "rate",
                            "bottom_of_range": "",
                            "top_of_range": "55000",
                            "rate": "0.5",
                            "increment": ""
                        }, {
                            "type": "rate",
                            "bottom_of_range": "55000",
                            "top_of_range": "250000",
                            "rate": "1",
                            "increment": ""
                        }, {
                            "type": "rate",
                            "bottom_of_range": "250000",
                            "top_of_range": "",
                            "rate": "2",
                            "increment": ""
                        }],
                        "range_basis": "property_value",
                        "marginal": 1
                    },
                    "20": {
                        "element": "cost",
                        "section": "subcalculations",
                        "rank": 20,
                        "label": "Property Tax",
                        "tag": "property_tax",
                        "base_cost": "0",
                        "base_rate": "0.772",
                        "rate_basis": "property_value",
                        "rate_ranges": [],
                        "range_basis": "property_value"
                    },
                    "21": {
                        "element": "cost",
                        "section": "subcalculations",
                        "rank": 21,
                        "label": "Mortgage Insurance",
                        "tag": "mortgage_insurance",
                        "base_cost": "0",
                        "base_rate": "0",
                        "rate_basis": "loan_amount",
                        "rate_ranges": [{
                            "type": "rate",
                            "bottom_of_range": "",
                            "top_of_range": "80",
                            "rate": "0",
                            "increment": ""
                        }, {
                            "type": "rate",
                            "bottom_of_range": "80",
                            "top_of_range": "85",
                            "rate": "0.3",
                            "increment": ""
                        }, {
                            "type": "rate",
                            "bottom_of_range": "85",
                            "top_of_range": "90",
                            "rate": "0.6",
                            "increment": ""
                        }, {
                            "type": "rate",
                            "bottom_of_range": "90",
                            "top_of_range": "95",
                            "rate": "0.8",
                            "increment": ""
                        }, {
                            "type": "rate",
                            "bottom_of_range": "95",
                            "top_of_range": "",
                            "rate": "1.02",
                            "increment": ""
                        }],
                        "range_basis": "ltv"
                    }
                },
                "settings": []
            },
            "calculators": {
                "elements": {
                    "22": {
                        "element": "payment_calculator",
                        "section": "calculators",
                        "rank": 22,
                        "label": "Monthly Calculator",
                        "tag": "mpc",
                        "property_value": "{total_amount}",
                        "loan_amount": "{loan_amount}",
                        "payment_period": "12",
                        "compounding_period": "12",
                        "interest_rate": "{interest_rate}",
                        "amortization_period": "{amortization_period}",
                        "subcalculations": [
                            ["inspection"],
                            ["origination"],
                            ["land_transfer_tax"],
                            ["property_tax"],
                            ["mortgage_insurance"],
                            ["monthly_mortgage_insurance"]
                        ]
                    },
                    "23": {
                        "element": "payment_calculator",
                        "section": "calculators",
                        "rank": 23,
                        "label": "Bi-Weekly Calculator",
                        "tag": "bwpc",
                        "property_value": "{total_amount}",
                        "loan_amount": "{loan_amount}",
                        "payment_period": "26",
                        "compounding_period": "12",
                        "interest_rate": "{interest_rate}",
                        "amortization_period": "{amortization_period}",
                        "subcalculations": null
                    },
                    "24": {
                        "element": "payment_calculator",
                        "section": "calculators",
                        "rank": 24,
                        "label": "Weekly Calculator",
                        "tag": "wpc",
                        "property_value": "{total_amount}",
                        "loan_amount": "{loan_amount}",
                        "payment_period": "52",
                        "compounding_period": "12",
                        "interest_rate": "{interest_rate}",
                        "amortization_period": "{amortization_period}",
                        "subcalculations": null
                    }
                },
                "settings": []
            }
        }
    }
};

/* ]]> */
</script>
<script>
    ! function(a) {
    var b = function() {
        var b = {},
            c = {},
            d = function() {
                var d, e, f, g, h, i = this,
                    j = function() {
                        switch (rmcp_vars.settings.thousands_separator) {
                            case "{space}":
                                d = " ";
                                break;
                            case ".":
                                d = ".";
                                break;
                            default:
                                d = ","
                        }
                        switch (rmcp_vars.settings.decimal_separator) {
                            case ",":
                                e = ",";
                                break;
                            default:
                                e = "."
                        }
                        f = i.clean.number(rmcp_vars.settings.decimal_places), g = i.clean.number(rmcp_vars.settings.percent_decimal_places), h = 1 === rmcp_vars.settings.indian_system ? 1 : 0
                    };
                this.addForm = function(c) {
                    var d = function() {
                        var d = i.formIndex(c.id);
                        d && (b[d] = c, i.addEvent("submit", c, function(b) {
                            b = b || a.event, i.process(v(b)), i.preventDefault(b)
                        }))
                    };
                    d()
                }, this.clean = {
                    number: function(a, b) {
                        if ("number" == typeof a) return a;
                        if ("string" != typeof a) return "number" == typeof b ? b : 0;
                        a = a.replace(/[^\d.,]/g, ""), "." === d ? a = a.replace(".", "") : "," === d && (a = a.replace(",", "")), "," === e && (a = a.replace(",", "."));
                        var c = a.match(/\./g);
                        return c && c.length > 1 && (a = a.slice(0, a.indexOf(".")) + "." + a.slice(a.indexOf(".") + 1).replace(".", "")), +a
                    },
                    period: function(a, b, c) {
                        return b.indexOf(+a) > 0 ? this.number(a) : "number" == typeof c ? c : 0
                    },
                    text: function(a) {
                        return a.replace(/</g, "&lt;").replace(/>/g, "&gt;")
                    }
                }, this.format = {
                    integer: function(a) {
                        return a = Math.ceil(+a).toFixed(0), a.toString().replace(/\B(?=(\d{3})+(?!\d))/g, d)
                    },
                    number: function(a, b) {
                        return b = b || f, "number" != typeof a && (a = 0), a = a.toFixed(b), a = a.toString().replace(/\B(?=(\d{3})+(?!\d))/g, d), b > 0 && "," === e && (a = a.substring(0, a.lastIndexOf(".")) + "," + a.substring(a.lastIndexOf(".") + 1)), a
                    },
                    currency: function(a) {
                        return 1 === h ? i.format.indianSystem(a) : i.format.number(a, f)
                    },
                    percentage: function(a) {
                        return i.format.number(a, g)
                    },
                    indianSystem: function(a) {
                        return a = a.toFixed(0), a.slice(0, -3).toString().replace(/\B(?=(\d{2})+(?!\d))/g, ",") + "," + a.slice(-3)
                    },
                    text: function(a) {
                        var b, c = "(?:[^\"'>]|\"[^\"]*\"|'[^']*')*",
                            d = new RegExp("<(?:!--(?:(?:-*[^->])*--+|-?)|script\\b" + c + ">[\\s\\S]*?</script\\s*|style\\b" + c + ">[\\s\\S]*?</style\\s*|/?[a-z]" + c + ")>", "gi");
                        do b = html, html = html.replace(d, ""); while (html !== b);
                        return html.replace(/</g, "&lt;")
                    }
                }, this.process = function(a) {
                    u = {}, error = !1;
                    var b = i.getDefinition(i.formIndex(a.id));
                    return i.d("Processing started."), b ? (i.removeFormErrors(a), input = i.getInput(a), o(input, b["interface"].elements, a) ? void(p(b.processors.elements, b.calculators.elements, b.subcalculations.elements, a) && t(b["interface"].elements, a)) : void i.d("Processing failed on Interface processor.", "error")) : void 0
                }, this.getInput = function(a) {
                    for (var b = a.elements, c = {}, d = 0, e = b.length; e > d; d++) b[d].value ? c[d] = b[d].value : b[d].selectedValue && (c[d] = b[d].selectedValue);
                    return c
                };
                var k, l, m, n, o = function(a, b, d) {
                        i.d("Interface processor started.");
                        var e, f = !0;
                        if ("object" != typeof b || 0 === b.length) return i.d("No Interface to process.", "warning"), !1;
                        for (var g, h = 0, j = 0, k = b.length; k > j; j++) {
                            if (g = j - h, !i.has(b[j], "element")) return i.d("Interface element definition is missing field type.", "error"), !1;
                            i.has(c, b[j].element) ? c[b[j].element].isInput ? (e = c[b[j].element].fn(j, a[g], b[j], d), e || (f = !1)) : (h++, i.d("Input processing skipped for element type: " + b[j].element + ".")) : (h++, i.d("No processor for element type: " + b[j].element + ".", "warning"))
                        }
                        return f
                    },
                    p = function(a, b, c, d) {
                        m = 0, n = 0, a = i.objVals(a), b = i.objVals(b), c = i.objVals(c);
                        for (var e = 0, f = rmcp_vars.max_processors ? rmcp_vars.max_processors : 100;
                            (q(a, c, d) || r(b, c, d)) && f > e;) e++;
                        return k ? (i.d("Processing failed on Processor: " + i.getVal(a[m], "label") + ".", "error"), !1) : l ? (i.d("Processing failed on Calculator: " + i.getVal(b[n], "label") + ".", "error"), !1) : e === f ? (i.d("Processing failed. Number of iterations exceeded maximum.", "error"), !1) : !0
                    },
                    q = function(a, b, d) {
                        if (k = !1, m >= a.length) return !1;
                        if (!s("Processor", a[m])) return k = !0, !1;
                        var e = c[a[m].element].fn(a[m], b, d);
                        return e ? (m++, !0) : (k = !0, !1)
                    },
                    r = function(a, b, d) {
                        if (l = !1, n >= a.length) return !1;
                        if (!s("Calculator", a[n])) return l = !0, !1;
                        var e = c[a[n].element].fn(a[n], b, d);
                        return e ? (n++, !0) : (l = !0, !1)
                    };
                this.processSubcalculations = function(a, b, d) {
                    return s("Subcalculation", b) ? c[b.element].fn(a, b, d) : !1
                };
                var s = function(a, b) {
                        return i.has(b, "element") ? i.has(c, b.element) ? !0 : (i.d("No processor for element type: " + b.element + ".", "warning"), !1) : (i.d(a + " definition is missing element type.", "error"), !1)
                    },
                    t = function(a, b) {
                        i.d("Output processing started.");
                        for (var d = 0, e = a.length; e > d; d++) {
                            if (!i.has(a[d], "element")) return i.d("Interface element definition is missing element type.", "error"), !1;
                            i.has(c, a[d].element) ? c[a[d].element].isInput ? i.d("Output processing skipped for element type: " + a[d].element + ".") : c[a[d].element].fn(d, a[d], b) : i.d("No processor for element type: " + a[d].element + ".", "warning")
                        }
                    },
                    u = {};
                this.setTag = function(a, b, c) {
                    c = "undefined" != typeof c ? c : null, u[a] = {
                        value: b,
                        fn: c
                    }
                }, this.getTagValue = function(a) {
                    return "undefined" != typeof u[a] ? u[a].value : ""
                }, this.getTagFormattedValue = function(a) {
                    return "undefined" != typeof u[a] && u[a].fn ? u[a].fn(u[a].value) : ""
                }, this.getTagCallback = function(a) {
                    return "undefined" != typeof u[a] ? u[a].fn : null
                };
                var v = function(a) {
                        var c = a.target.id,
                            d = i.formIndex(c);
                        return "undefined" != typeof b[d] ? b[d] : null
                    },
                    w = function(a, b) {
                        return "rmcp_input[" + a + "][" + b + "]"
                    };
                this.has = function(a, b) {
                    return a && a.hasOwnProperty(b)
                }, this.getVal = function(a, b) {
                    return i.has(a, b) ? a[b] : null
                }, this.objVals = function(a) {
                    var b, c = [],
                        d = 0;
                    for (b in a) c[d] = a[b], d++;
                    return c
                }, this.getDefinition = function(a) {
                    return "object" == typeof rmcp_vars.definitions[a] ? rmcp_vars.definitions[a] : null
                }, this.addEvent = function(a, b, c) {
                    b && b.addEventListener ? b.addEventListener(a, c, !1) : b && b.attachEvent && b.attachEvent("on" + a, c)
                }, this.removeEvent = function(a, b, c) {
                    b && b.removeEventListener ? b.removeEventListener(a, c, !1) : b && b.detachEvent && b.detachEvent("on" + a, c)
                }, this.preventDefault = function(a) {
                    return a.preventDefault ? a.preventDefault() : a.returnValue = !1, !1
                }, this.formIndex = function(a) {
                    return a.replace("rmcp-form-", "")
                }, this.registerProcessor = function(a) {
                    if (a.elementSlug && a.sectionSlug && a.processor) {
                        var b = "input" === a.timing;
                        c[a.elementSlug] = {
                            section: a.sectionSlug,
                            fn: a.processor,
                            isInput: b
                        }
                    }
                }, this.setError = function(a, b, c) {
                    i.d("Error occurred on input " + b + " with message: " + c);
                    var d = w(i.formIndex(a.id), b),
                        e = a[d],
                        f = i.getParentByClassName(e, "rmcp-input"),
                        g = i.getDescendentByClassName(f, "rmcp-error");
                    i.addClass(f, "rmcp-input-error"), g.innerHTML = c, i.addClass(g, "rmcp-error-active")
                }, this.removeError = function(a, b) {
                    var c = w(i.formIndex(a.id), b),
                        d = a[c],
                        e = i.getParentByClassName(d, "rmcp-input"),
                        f = i.getDescendentByClassName(e, "rmcp-error");
                    i.removeClass(e, "rmcp-input-error"), f.innerHTML = "", i.removeClass(f, "rmcp-error-active")
                }, this.setFormError = function(a, b) {
                    i.d("Setting form error: " + b);
                    var c, d, e, f, g, h, j, k = i.getDescendentByClassName(a, "rmcp-form-error-report");
                    if ("undefined" == typeof k) {
                        for (h = 0, j = a.length; j > h; h++) "submit" === a[h].type && (f = a[h], g = h);
                        d = i.getParentByClassName(f, "rmcp-input"), k = document.createElement("div"), k.className = "rmcp-form-error-report", c = document.createElement("ul"), k.appendChild(c), d.parentNode.insertBefore(k, d)
                    } else c = k.getElementsByTagName("ul")[0];
                    for (h = 0, j = c.childNodes.length; j > h; h++)
                        if (c.childNodes[h].innerHTML === b) return;
                    e = document.createElement("li"), e.innerHTML = b, c.appendChild(e)
                }, this.removeFormErrors = function(a) {
                    var b = i.getDescendentByClassName(a, "rmcp-form-error-report");
                    b && b.parentNode.removeChild(b)
                }, this.getParentByClassName = function(a, b) {
                    for (var c, d = !1, e = !1; !d || !e;) {
                        if (c = a.parentNode, c.className && c.className.match(new RegExp("(\\s|^)" + b + "(\\s|$)"))) return d = !0, c;
                        a = c, "undefined" == typeof c && (e = !0)
                    }
                }, this.getDescendentByClassName = function(a, b) {
                    for (var c = 0, d = a.childNodes.length; d > c; c++)
                        if (a.childNodes[c].className && a.childNodes[c].className.indexOf(b) > -1) return a.childNodes[c]
                }, this.addClass = function(a, b) {
                    var c = new RegExp("(\\s|^)" + b + "(\\s|$)");
                    a.className.match(c) || (a.className += " " + b)
                }, this.removeClass = function(a, b) {
                    var c = new RegExp("(\\s|^)" + b + "(\\s|$)");
                    a.className = a.className.replace(c, "")
                }, this.d = function(a, b) {
                    if (1 === rmcp_vars.settings.debug) {
                        var c = "DEBUG LOG: ";
                        switch (b) {
                            case "error":
                                c = "!" + c;
                                break;
                            case "warning":
                                c = "*" + c
                        }
                        console.log(c + a)
                    }
                };
                j()
            };
        return new d
    }(rmcp_vars);
    a.rmcp = b
}(window),
function() {
    rmcp.registerProcessor({
        elementSlug: "text_input",
        sectionSlug: "interface",
        timing: "input",
        processor: function(a, b, c, d) {
            var e = "number";
            return "undefined" == typeof b && (b = 0), b = "text" === rmcp.getVal(c, "format") ? rmcp.clean.text(b) : rmcp.clean.number(b), 1 !== rmcp.getVal(c, "required") || b ? (rmcp.getVal(c, "format") && (e = rmcp.getVal(c, "format")), tag = rmcp.getVal(c, "tag"), tag && rmcp.setTag(tag, b, e), rmcp.d("Input for " + rmcp.getVal(c, "label") + " set to " + b + "."), rmcp.removeError(d, a), !0) : (rmcp.d("Input value failed for " + rmcp.getVal(c, "label") + "."), rmcp.setError(d, a, rmcp.getVal(c, "error_message")), !1)
        }
    }), rmcp.registerProcessor({
        elementSlug: "select_input",
        sectionSlug: "interface",
        timing: "input",
        processor: function(a, b, c, d) {
            var e = "number";
            if ("undefined" == typeof b || "undefined" == typeof c.options) return rmcp.setError(d, a, "Options not set for input " + a + ": " + rmcp.getVal(c, "label") + "."), !1;
            for (var f = c.options[0].option_value, g = 0, h = c.options.length; h > g; g++)
                if (b === c.options[g].option_value) {
                    f = c.options[g].option_value;
                    break
                }
            return rmcp.getVal(c, "format") && (e = rmcp.getVal(c, "format")), f = "text" === e ? rmcp.clean.text(f) : rmcp.clean.number(f), tag = rmcp.getVal(c, "tag"), tag && rmcp.setTag(tag, f, e), rmcp.d("Input for " + rmcp.getVal(c, "label") + " set to " + f + "."), rmcp.removeError(d, a), !0
        }
    }), rmcp.registerProcessor({
        elementSlug: "compounding_period",
        sectionSlug: "interface",
        timing: "input",
        processor: function(a, b, c, d) {
            if ("undefined" == typeof b) return rmcp.setError(d, a, "Options not set for input " + a + ": " + rmcp.getVal(c, "label") + "."), !1;
            var e;
            switch (b) {
                case 0:
                    e = 0;
                    break;
                case 1:
                    e = 1;
                    break;
                case 2:
                    e = 2;
                    break;
                case 4:
                    e = 4;
                    break;
                case 26:
                    e = 26;
                    break;
                case 52:
                    e = 52;
                    break;
                case 365:
                    e = 365;
                    break;
                default:
                    e = 12
            }
            return tag = rmcp.getVal(c, "tag"), tag && rmcp.setTag(tag, b, "integer"), rmcp.d("Input for " + rmcp.getVal(c, "label") + " set to " + b + "."), rmcp.removeError(d, a), !0
        }
    }), rmcp.registerProcessor({
        elementSlug: "payment_period",
        sectionSlug: "interface",
        timing: "input",
        processor: function(a, b, c, d) {
            if ("undefined" == typeof b) return rmcp.setError(d, a, "Options not set for input " + a + ": " + rmcp.getVal(c, "label") + "."), !1;
            var e;
            switch (b) {
                case 1:
                    e = 1;
                    break;
                case 2:
                    e = 2;
                    break;
                case 4:
                    e = 4;
                    break;
                case 26:
                    e = 26;
                    break;
                case 52:
                    e = 52;
                    break;
                case 365:
                    e = 365;
                    break;
                default:
                    e = 12
            }
            return tag = rmcp.getVal(c, "tag"), tag && rmcp.setTag(tag, b, "integer"), rmcp.d("Input for " + rmcp.getVal(c, "label") + " set to " + b + "."), rmcp.removeError(d, a), !0
        }
    }), rmcp.registerProcessor({
        elementSlug: "results",
        sectionSlug: "interface",
        timing: "output",
        processor: function(a, b, c) {
            var d = "",
                e = function() {
                    if (rmcp.d("Results Processor: " + rmcp.getVal(b, "label") + " started."), !b.content) return void rmpc.d("No content to process in Results Processor: " + rmcp.getVal(b, "label") + ".", "warning");
                    d = b.content, f(), g(), h(), p();
                    var e = rmcp.getDescendentByClassName(c, "rmcp-results-" + a);
                    e && (e.innerHTML = d)
                },
                f = function() {
                    d = d.replace(/\'/g, "'")
                },
                g = function() {
                    for (var a, b, c, e = !0; e;) a = d.match(/{if(.*?)}(.*?){endif}/i), a ? (b = a[1].trim(), c = rmcp.getTagValue(b), d = c || b.indexOf("compounding_period") > -1 ? d.replace(a[0], a[2]) : d.replace(a[0], "")) : e = !1
                },
                h = function() {
                    for (var a, b, c, e, f, g = !0, h = []; g;)
                        if (a = d.match(/{(.*?)}/i)) {
                            if (b = a[1].trim(), h.indexOf(b) > -1) continue;
                            c = rmcp.getTagValue(b), e = rmcp.getTagCallback(b), f = new RegExp(a[0], "g"), d = "function" == typeof e ? d.replace(f, e(b, c)) : d.replace(f, i(b, c, e)), h.push(b)
                        } else g = !1
                },
                i = function(a, b, c) {
                    switch (c) {
                        case "compounding_period_text":
                            return j(a, b);
                        case "payment_period_text":
                            return k(a, b);
                        case "amortization_period_text":
                            return l(a, b);
                        case "text":
                            return b;
                        case "percentage":
                            return rmcp.format.number(b, 2);
                        case "currency":
                            return rmcp.format.currency(b);
                        case "integer":
                            return rmcp.format.integer(b);
                        default:
                            return rmcp.format.number(b)
                    }
                },
                j = function(a, c) {
                    var d;
                    switch (c) {
                        case 0:
                            d = "no_period_text";
                            break;
                        case 1:
                            d = "annual_period_text";
                            break;
                        case 2:
                            d = "semi_annual_period_text";
                            break;
                        case 4:
                            d = "quarterly_period_text";
                            break;
                        case 12:
                            d = "monthly_period_text";
                            break;
                        case 26:
                            d = "bi_weekly_period_text";
                            break;
                        case 52:
                            d = "weekly_period_text";
                            break;
                        case 365:
                            d = "daily_period_text"
                    }
                    return b[d] ? b[d] : c
                },
                k = function(a, c) {
                    var d;
                    switch (c) {
                        case 1:
                            d = "annual_payment_text";
                            break;
                        case 2:
                            d = "semi_annual_payment_text";
                            break;
                        case 4:
                            d = "quarterly_payment_text";
                            break;
                        case 12:
                            d = "monthly_payment_text";
                            break;
                        case 26:
                            d = "bi_weekly_payment_text";
                            break;
                        case 52:
                            d = "weekly_payment_text";
                            break;
                        case 365:
                            d = "daily_payment_text"
                    }
                    return b[d] ? b[d] : c
                },
                l = function(a, b) {
                    var c = m(a),
                        d = n(b, c),
                        e = o(d.years, d.months, d.weeks);
                    return e = e.replace("{years}", d.years), e = e.replace("{months}", d.months), e.replace("{weeks}", d.weeks)
                },
                m = function(a) {
                    var b = a.indexOf("amortization_period_text");
                    if (0 > b) return 12;
                    var c = a.substring(0, b).substring(1),
                        d = c + "payment_period",
                        e = rmcp.getTagValue(d);
                    return e ? e : 12
                },
                n = function(a, b) {
                    var c = Math.floor(a),
                        d = 0,
                        e = 0,
                        f = a - c;
                    return f > 0 && (26 === +b || 52 === +b ? e = 52 / b * Math.ceil(f * b) / b : 365 === +b ? e = Math.ceil(52 * f) / 52 : d = 12 / b * Math.ceil(f * b), (12 === d || 52 === e) && (c++, d = e = 0)), {
                        years: c,
                        months: d,
                        weeks: e
                    }
                },
                o = function(a, c, d) {
                    var e = "term_";
                    return 1 === +a ? e += "sy" : a > 1 && (e += "py"), 1 === +c ? e += "sm" : c > 1 ? e += "pm" : 1 === +d ? e += "sw" : d > 1 && (e += "pw"), b[e] ? b[e] : ""
                },
                p = function() {
                    for (var a = "([table|thead|tfoot|caption|col|colgroup|tbody|tr|td|th|div|dl|dd|dt|ul|ol|li|pre|p|select|option|form|map|area|blockquote|address|p|h[1-6]|hr|fieldset|legend|section|article|aside|hgroup|header|footer|nav|figure|figcaption|details|menu|summary])", b = new RegExp(/\r\n|\r|\n/g), c = d.split(b), e = "", f = "", g = 0, h = c.length; h > g; g++) e = c.shift().trim(), "" !== e && (f += "<p>" + e + "</p>\n");
                    b = new RegExp("<p><(/?" + a + ")", "ig"), f = f.replace(b, "<$1"), b = new RegExp(a + "></p>", "ig"), f = f.replace(b, "$1>"), d = f
                };
            e()
        }
    }), rmcp.registerProcessor({
        elementSlug: "processor",
        sectionSlug: "processors",
        timing: "primary",
        processor: function(a, b, c) {
            var d, e = !1,
                f = {},
                g = {
                    0: "logic_value_1",
                    1: "logic_value_2",
                    2: "default",
                    3: "math_value_1",
                    4: "math_value_2"
                },
                h = function() {
                    if (rmcp.d("Processor: " + rmcp.getVal(a, "label") + " started."), i(), e) return rmcp.d("Insufficient data for Processor: " + rmcp.getVal(a, "label") + ".", "warning"), !1;
                    if (l()) n();
                    else if (m(), e) return !1;
                    return o(), rmcp.d("Processor: " + rmcp.getVal(a, "label") + " set to " + d + "."), !0
                },
                i = function() {
                    for (var b = 0, c = 5; c > b; b++) {
                        var d = g[b],
                            h = j(rmcp.getVal(a, d));
                        switch (f[d] = {}, f[d].value = null, f[d].clean = !0, h[1]) {
                            case "tag":
                                var i = rmcp.getTagValue(h[0]);
                                "default" === d ? i || 0 === i ? (f[d].value = +i, f[d].clean = !0) : k() && (rmcp.d("Tag for default value not available for Processor: " + rmcp.getVal(a, "label") + ". Required by " + d + ".", "warning"), e = !0) : i || 0 === i ? (f[d].value = +i, f[d].clean = !0) : (rmcp.d("Tag for " + h[0] + " not available for Processor: " + rmcp.getVal(a, "label") + ". Required by " + d + ".", "warning"), e = !0);
                                break;
                            case "number":
                                f[d].value = h[0], f[d].clean = !1;
                                break;
                            case "text":
                                f[d].value = h[0], f[d].clean = !1;
                                break;
                            default:
                                "default" === d && k() && (rmcp.d("A value or tag must be provided for Processor: " + rmcp.getVal(a, "label") + "."), e = !0)
                        }
                    }
                },
                j = function(a) {
                    return a || 0 === a ? a.toString().replace(/[^0-9.,]{1,}/g, "") === a ? [a, "number"] : a.toString().match(/^{.*?}$/) ? [a.replace(/[{}]/g, ""), "tag"] : [a, "text"] : [null, "null"]
                },
                k = function() {
                    return !f.logic_value_1.value && 0 !== f.logic_value_1.value || !f.logic_value_2.value && 0 !== f.logic_value_2.value ? !1 : 1 !== rmcp.getVal(a, "on_failure") ? !1 : !0
                },
                l = function() {
                    var b = f.logic_value_1.value,
                        c = f.logic_value_2.value,
                        d = rmcp.getVal(a, "logic_operator");
                    if (!d || !b && 0 !== b || !c && 0 !== c) return !0;
                    switch (d) {
                        case "=":
                            return b === c ? !0 : !1;
                        case "!=":
                            return b !== c ? !0 : !1;
                        case ">":
                            return b > c ? !0 : !1;
                        case ">=":
                            return b >= c ? !0 : !1;
                        case "<":
                            return c > b ? !0 : !1;
                        case "<=":
                            return c >= b ? !0 : !1;
                        case "&&":
                            return b && c ? !0 : !1;
                        case "||":
                            return b || c ? !0 : !1;
                        case "!&&":
                            return b || c ? !1 : !0;
                        case "!||":
                            return b && c ? !1 : !0;
                        default:
                            return !1
                    }
                },
                m = function() {
                    var b = rmcp.getVal(a, "on_failure");
                    1 === +b ? (d = f["default"].value ? f["default"].clean ? f["default"].value : rmcp.clean.number(f["default"].value) : 0, rmcp.d("Set Failure Value for Processor: " + rmcp.getVal(a, "label") + " to " + d + ".", "warning")) : (rmcp.d("Logic failed gracefully for Processor: " + rmcp.getVal(a, "label") + "."), rmcp.setFormError(c, rmcp.getVal(a, "error_message")), e = !0)
                },
                n = function() {
                    var b = f.math_value_1.value,
                        c = f.math_value_2.value,
                        e = rmcp.getVal(a, "math_operator");
                    if (f.math_value_1.clean || (b = +rmcp.clean.number(b)), f.math_value_2.clean || (c = +rmcp.clean.number(c)), !e || "number" != typeof b || "number" != typeof c) return !1;
                    switch (e) {
                        case "+":
                            d = b + c;
                            break;
                        case "-":
                            d = b - c;
                            break;
                        case "*":
                            d = b * c;
                            break;
                        case "/":
                            0 === c ? (d = 0, rmcp.d("Division by zero for Processor: " + rmcp.getVal(a, "label") + ".", "warning")) : d = b / c;
                            break;
                        default:
                            d = 0
                    }
                    return !0
                },
                o = function() {
                    var b = "number";
                    rmcp.getVal(a, "format") && (b = rmcp.getVal(a, "format")), tag = rmcp.getVal(a, "tag"), tag && rmcp.setTag(tag, d, b)
                };
            return h()
        }
    }), rmcp.registerProcessor({
        elementSlug: "switch_assigner",
        sectionSlug: "processors",
        timing: "primary",
        processor: function(a, b, c) {
            var d, e = !1,
                f = {
                    switch_input: null,
                    switch_cases: {},
                    default_value: null
                },
                g = function() {
                    return rmcp.d("Switch Assigner: " + rmcp.getVal(a, "label") + " started."), h(), e ? (rmcp.d("Insufficient data for Switch Assigner: " + rmcp.getVal(a, "label") + ".", "warning"), !1) : !l() && (m(), e) ? !1 : (n(d), !0)
                },
                h = function() {
                    var b, c, d, g, h, k, l, m, n, o;
                    if (b = rmcp.getVal(a, "switch_input"), c = i(b), f.switch_input = j(c[0], c[1], "switch_input"), !f.switch_input.value && 0 !== f.switch_input.value) return !0;
                    if (d = rmcp.getVal(a, "switch_cases"), !d) return !0;
                    for (n = 0, o = d.length; o > n; n++) {
                        if (g = rmcp.getVal(d[n], "switch_case"), h = rmcp.getVal(d[n], "switch_assignment"), c = i(g), k = j(c[0], c[1], "switch_case"), c = i(h), l = j(c[0], c[1], "switch_assignment"), e) return !1;
                        (k.value || 0 === k.value) && (f.switch_cases[k.value] = l)
                    }
                    m = rmcp.getVal(a, "default"), c = i(m), f.default_value = j(c[0], c[1], "default")
                },
                i = function(a) {
                    return a || 0 === a ? a.toString().replace(/[^0-9.,]{1,}/g, "") === a ? [a, "number"] : a.toString().match(/^{.*?}$/) ? [a.replace(/[{}]/g, ""), "tag"] : [a, "text"] : [null, "null"]
                },
                j = function(b, c, d) {
                    switch (c) {
                        case "tag":
                            var f = rmcp.getTagValue(b);
                            return "default" === d ? f || 0 === f ? {
                                value: f,
                                clean: !0
                            } : (k() && (rmcp.d("Tag for default value not available for Processor: " + rmcp.getVal(a, "label") + ". Required by " + d + ".", "warning"), e = !0), null) : f || 0 === f ? {
                                value: f,
                                clean: !0
                            } : (rmcp.d("Tag for " + b + " not available for Processor: " + rmcp.getVal(a, "label") + ". Required by " + d + ".", "warning"), e = !0, null);
                        case "number":
                            return {
                                value: b,
                                clean: !1
                            };
                        case "text":
                            return {
                                value: b,
                                clean: !1
                            };
                        default:
                            return "default" === d && k() && (rmcp.d("A value or tag must be provided for Processor: " + rmcp.getVal(a, "label") + "."), e = !0), {
                                value: null,
                                clean: !0
                            }
                    }
                },
                k = function() {
                    return 1 !== +rmcp.getVal(a, "on_failure") ? !1 : !0
                },
                l = function() {
                    var a;
                    if (!f.switch_input.value && 0 !== f.switch_input.value) return !1;
                    for (a in f.switch_cases)
                        if (a.toString() === f.switch_input.value.toString()) return d = f.switch_input.clean ? f.switch_cases[a].value : +rmcp.clean.number(f.switch_cases[a].value), !0;
                    return !1
                },
                m = function() {
                    var b = rmcp.getVal(a, "on_failure");
                    1 === b ? f["default"].value ? f["default"].clean ? output = f["default"].value : output = +rmcp.clean.number(f["default"].value) : output = 0 : (rmcp.d("Logic failed gracefully for Processor: " + rmcp.getVal(a, "label") + "."), rmcp.setFormError(c, rmcp.getVal(a, "error_message")), e = !0)
                },
                n = function(b) {
                    var c = "number";
                    rmcp.getVal(a, "format") && (c = rmcp.getVal(a, "format")), tag = rmcp.getVal(a, "tag"), tag && rmcp.setTag(tag, b, c)
                };
            return g()
        }
    }), rmcp.registerProcessor({
        elementSlug: "cost",
        sectionSlug: "subcalculations",
        timing: "secondary",
        processor: function(a, b, c) {
            var d, e, f, g, h, i = 0,
                j = function() {
                    return rmcp.d("Cost Processor: " + rmcp.getVal(b, "label") + " started."), k(), l(), m(), rmcp.d(rmcp.getVal(b, "label") + " set to " + i + "."), i
                },
                k = function() {
                    i += +rmcp.clean.number(rmcp.getVal(b, "base_cost"))
                },
                l = function() {
                    var c = +rmcp.clean.number(rmcp.getVal(b, "base_rate"));
                    if (c) {
                        var e = rmcp.getVal(b, "rate_basis");
                        switch (e) {
                            case "property_value":
                                d = "property_value";
                                break;
                            default:
                                d = "loan_amount"
                        }
                        a[e] && (i += c * +a[e] / 100)
                    }
                },
                m = function() {
                    if (b.rate_ranges && !(b.rate_ranges.length < 1) && (d = q(), a[d])) {
                        e = a[d], f = r(), g = s(f);
                        var c = rmcp.getVal(b, "marginal");
                        h = c && 1 === c;
                        for (var j, k, l, m, t, u = 0, v = 0, w = b.rate_ranges.length; w > v; v++) j = b.rate_ranges[v], k = j.bottom_of_range ? +rmcp.clean.number(j.bottom_of_range) : null, l = j.top_of_range ? +rmcp.clean.number(j.top_of_range) : null, rate = j.rate ? +rmcp.clean.number(j.rate) : 0, m = j.type ? j.type : "rate", t = j.increment ? +rmcp.clean.number(j.increment) : null, h ? u += +n(rate, m, o(k, l), t) : p(k, l, g) && (u = +n(rate, m, e, t));
                        i += u
                    }
                },
                n = function(a, b, c, d) {
                    if ("fee" === b) {
                        if (d) {
                            var e = Math.ceil(c / d);
                            return e * a
                        }
                        return a
                    }
                    return c * a / 100
                },
                o = function(a, c) {
                    if (0 === e) return 0;
                    a || (a = 0);
                    var d, h;
                    return d = "ltv" === f ? g : e, a || c ? a >= d ? h = 0 : !c && d > a ? h = d - a : !a && c >= d ? h = d : d > a && c >= d ? h = d - a : d >= c ? (h = Math.abs(c - a), h !== c - a && rmcp.d("Bottom of Range is greater than Top of Range in Cost Process: " + rmcp.getVal(b, "label") + ".", "error")) : h = d > c ? c : 0 : h = d, "ltv" === f && (h *= data.property_value), h
                },
                p = function(a, b, c) {
                    var d = !a && !b || !a && b >= c || !b && c >= a || c >= a && b >= c;
                    return d
                },
                q = function() {
                    return b.rate_basis ? b.rate_basis : "loan_amount"
                },
                r = function() {
                    return b.range_basis ? b.range_basis : "loan_amount"
                },
                s = function(b) {
                    switch (b) {
                        case "ltv":
                            return 0 === a.property_value ? 0 : 100 * a.loan_amount / a.property_value;
                        case "property_value":
                            return a.property_value;
                        default:
                            return a.loan_amount
                    }
                };
            return j()
        }
    }), rmcp.registerProcessor({
        elementSlug: "payment_calculator",
        sectionSlug: "calculators",
        timing: "primary",
        processor: function(e, f, g) {
            var h, j = !1,
                k = {},
                l = {},
                m = {
                    0: "property_value",
                    1: "loan_amount",
                    2: "payment_period",
                    3: "compounding_period",
                    4: "interest_rate",
                    5: "amortization_period"
                },
                n = function() {
                    return rmcp.d("Calculator: " + rmcp.getVal(e, "label") + " started."), result = a(e, m, 6), k = i(result.data), (j = result.error) ? !1 : (l = d(k.interest_rate, k.payment_period, k.amortization_period, k.compounding_period), h = o(k, l), b(k, l, e), p(h, e), c(k.property_value, k.loan_amount, e, f, g), !0)
                },
                o = function(a, b) {
                    return b.r_factor && 1 !== b.r_factor ? a.loan_amount * (b.interest_rate_per_period * b.r_factor / (b.r_factor - 1)) : b.number_of_payments > 0 ? a.loan_amount * ((1 + b.nominal_interest_rate) / b.number_of_payments) : a.loan_amount
                },
                p = function(a, b) {
                    var c = rmcp.getVal(b, "tag") + "_";
                    rmcp.setTag(c + "payment_result", h)
                };
            return n()
        }
    }), rmcp.registerProcessor({
        elementSlug: "loan_calculator",
        sectionSlug: "calculators",
        timing: "primary",
        processor: function(e, f, g) {
            var h, j = !1,
                k = {},
                l = {},
                m = {
                    0: "payment_amount",
                    1: "payment_period",
                    2: "compounding_period",
                    3: "interest_rate",
                    4: "amortization_period"
                },
                n = function() {
                    return rmcp.d("Calculator: " + rmcp.getVal(e, "label") + " started."), result = a(e, m, 5), k = i(result.data), (j = result.error) ? !1 : (l = d(k.interest_rate, k.payment_period, k.amortization_period, k.compounding_period), h = o(k, l), b(k, l, e), p(h, e), c(h, h, e, f, g), !0)
                },
                o = function(a, b) {
                    return b.r_factor && 1 !== b.r_factor ? a.payment_amount / (b.interest_rate_per_period * b.r_factor / (b.r_factor - 1)) : b.number_of_payments > 0 ? a.payment_amount / ((1 + b.nominal_interest_rate) / b.number_of_payments) : a.payment_amount
                },
                p = function(a, b) {
                    var c = rmcp.getVal(b, "tag") + "_";
                    rmcp.setTag(c + "loan_result", h), rmcp.setTag(c + "property_value", h), rmcp.setTag(c + "loan_amount", h)
                };
            return n()
        }
    });
    var a = function(a, b, c) {
            var d = {},
                e = !1,
                f = function() {
                    return g(), {
                        data: d,
                        error: e
                    }
                },
                g = function() {
                    for (var f = 0, g = c; g > f; f++) {
                        var i = b[f];
                        switch (expected = j(i, a), d[i] = {}, d[i].value = null, d[i].clean = !1, expected[1]) {
                            case "tag":
                                var k = rmcp.getTagValue(expected[0]);
                                k || 0 === k ? (d[i].value = +k, d[i].clean = !0) : (rmcp.d("Tag for " + expected[0] + " not available for Calculator: " + rmcp.getVal(a, "label") + ". Required by " + i + ".", "warning"), e = !0);
                                break;
                            case "number":
                                d[i].value = expected[0]
                        }("compounding_period" === i || "payment_period" === i) && (d[i].value = h(i, d[i].value), d[i].clean = !0)
                    }
                    "payment_calculator" === rmcp.getVal(a, "element") && (d.property_value.value ? d.loan_amount.value || (d.loan_amount = d.property_value) : d.property_value = d.loan_amount)
                },
                h = function(a, b) {
                    switch (a) {
                        case "payment_period":
                            return rmcp.clean.period(b, [1, 2, 4, 12, 26, 52, 365], 12);
                        case "compounding_period":
                            return rmcp.clean.period(b, [0, 1, 2, 4, 12, 26, 52, 365]);
                        default:
                            return rmcp.clean.number(b)
                    }
                };
            return f()
        },
        b = function(a, b, c) {
            var d, e = rmcp.getVal(c, "tag") + "_";
            for (d in a) rmcp.setTag(e + d, a[d]);
            for (d in b) rmcp.setTag(e + d, b[d]);
            rmcp.setTag(e + "payment_period_text", a.payment_period, "payment_period_text"), rmcp.setTag(e + "amortization_period_text", a.amortization_period, "amortization_period_text"), rmcp.setTag(e + "compounding_period_text", a.compounding_period, "compounding_period_text")
        },
        c = function(a, b, c, d, e) {
            if (c.subcalculations && !(c.subcalculations.length < 1) && d && !(d.length < 1)) {
                rmcp.d("Processing Costs for Calculator: " + rmcp.getVal(c, "label") + ".");
                for (var f = {
                        property_value: a,
                        loan_amount: b
                    }, g = rmcp.getVal(c, "tag") + "_", h = 0, i = d.length; i > h; h++)
                    for (var j = 0, k = c.subcalculations.length; k > j; j++) c.subcalculations[j][0].replace(/[{}]/g, "") === d[h].tag && rmcp.setTag(g + d[h].tag, rmcp.processSubcalculations(f, d[h], e))
            }
        },
        d = function(a, b, c, d) {
            var i = e(b, c),
                j = f(a),
                k = g(j, b, d),
                l = h(k, i, d);
            return {
                number_of_payments: i,
                nominal_interest_rate: j,
                interest_rate_per_period: k,
                r_factor: l
            }
        },
        e = function(a, b) {
            return Math.ceil(a * b)
        },
        f = function(a) {
            return a / 100
        },
        g = function(a, b, c) {
            var d;
            return 0 === +b && (b = 12), d = 0 === +c ? a / b : Math.pow(1 + a / c, c / b) - 1
        },
        h = function(a, b, c) {
            var d;
            return d = 0 === +c ? null : Math.pow(a + 1, b)
        },
        i = function(a) {
            var b, c = {};
            for (b in a) a[b].clean ? c[b] = +a[b].value : c[b] = rmcp.clean.number(a[b].value);
            return c
        },
        j = function(a, b) {
            var c = rmcp.getVal(b, a);
            return c || 0 === c ? c.toString().replace(/[^0-9.,]{1,}/g, "") === c.toString() ? [c, "number"] : [c.toString().replace(/[{}]/g, ""), "tag"] : [null, "null"]
        }
}(),
function() {
    "use strict";
    rmcp.addEvent("load", window, function() {
        for (var a = document.forms, b = 0, c = a.length; c > b; b++) "rmcp_form" === a[b].name && rmcp.addForm(a[b])
    })
}(); // This is just a sample script. Paste your real code (javascript or HTML) here.

</script>
<script src="//assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>

