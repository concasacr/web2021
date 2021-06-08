<?php
error_reporting(0);
//@session_name('Ses_id');
//@session_set_cookie_params(0, '/', '.concasa.com');
//@session_start();
//@set_time_limit(600);

//Ip del visitante
if ($_SERVER['REMOTE_ADDR']=='::1') $ipuser= ''; else $ipuser= $_SERVER['REMOTE_ADDR'];

$geoPlugin_array = unserialize( file_get_contents('//www.geoplugin.net/php.gp?ip='.$ipuser) );

$_SESSION["CodigoPais"]=$geoPlugin_array['geoplugin_countryCode'];
$_SESSION["NombrePais"]=$geoPlugin_array['geoplugin_countryName'];

if ($_SESSION["CodigoPais"]=='PA' AND $_SESSION["web"]==''){ ?><script> window.location = "//panama.concasa.com"; </script><? } ?>

<?php 
	include './conf.php'; 
		
	include './Mobile_Detect.php';
	
	$detect = new Mobile_Detect;
	 
	if( $detect->isMobile() && !$detect->isTablet() ){
  
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
   <head>
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="author" content="Constructora Concasa" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="Cache-Control" content="no-cache" />
      <meta http-equiv="Pragma" content="no-cache" />
      <meta http-equiv="Expires" content="0" />
      <!-- Document Title ============================================= -->
      <title>Home - Mobile | Concasa</title>
      <meta name="author" content="CONCASA desarrolladora inmobiliaria." />
      <meta name="description" content="CONCASA MOBILE Venta de casas, condominios y apartamentos San Rafael de Alajuela - Costa Rica, Venezuela y Panamá."/>
      <meta property="og:description" content="Unidades disponibles que van desde los $<?=number_format(getPrecioProperty('Bosque','1'), 0, '.', ',');?> USD*" />
      <meta name="keywords"  content="Casas,Condominio,Apartamento,Alajuela,Venta de casas,Terrazas del Norte,Condominio 6-26,Condominio 9-10,Costa Lind, Proyectos" />
      <?php include('m-head-home.php')?>
      <!-- Slider
         ============================================= -->
      <section id="slider" class="slider-element revslider-wrap full-screen clearfix">
         <div id="lechefheader_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="le-chef-header64" data-source="gallery" style="background:#000000;padding:0px;">
            <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
            <div id="lechefheader" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8.1">
               <ul class="one-page-menu">
                  <!-- SLIDE  -->
                  <li class="dark" data-index="rs-555" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                     <div class="tp-caption Concept-Title   tp-resizeme rs-parallaxlevel-2" id="slide-672-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-65','-65','-57','-54']" data-fontsize="['25','25','20','20']" data-lineheight="['25','25','20','20']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0.5;s:1500;e:Power3.easeInOut;" data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;">Desarrollamos calidad de vida
                     </div>
                     <div class="tp-caption Concept-SubTitle   tp-resizeme rs-parallaxlevel-2" id="slide-672-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['70','70','50','40']" data-lineheight="['70','70','50','40']" data-width="['none','none','none','400']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0.5;s:1500;e:Power3.easeInOut;" data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-start="1700" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;text-align:center;">
                        <a href="#" data-href="#projects" target="_self"> Ver más </a>	
                     </div>
                     <img src="//cdn.concasa.com/concasa.com/images/m-images/home/proyectos-626.jpg" data-lazyload="//cdn.concasa.com/concasa.com/images/m-images/home/proyectos-626.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="2" class="rev-slidebg" data-no-retina>
                     <div class="backopacity"></div>
                     <!-- LAYERS -->
                  </li>
                  <!-- SLIDE  -->
                  <li data-index="rs-556" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                     <div class="tp-caption Concept-Title   tp-resizeme rs-parallaxlevel-2" id="slide-672-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-65','-65','-57','-54']" data-fontsize="['25','25','20','20']" data-lineheight="['25','25','20','20']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0.5;s:1500;e:Power3.easeInOut;" data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;">Vivir a gusto está a su alcance
                     </div>
                     <div class="tp-caption Concept-SubTitle   tp-resizeme rs-parallaxlevel-2" id="slide-672-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['70','70','50','40']" data-lineheight="['70','70','50','40']" data-width="['none','none','none','400']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0.5;s:1500;e:Power3.easeInOut;" data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-start="1700" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;text-align:center;">
                        <a href="#" data-href="#projects" target="_self"> Ver más </a>	
                     </div>
                     <img src="//cdn.concasa.com/concasa.com/images/m-images/home/proyectos-tn.jpg" data-lazyload="//cdn.concasa.com/concasa.com/images/m-images/home/proyectos-tn.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="2" class="rev-slidebg" data-no-retina>
                     <div class="backopacity"></div>
                     <!-- LAYERS -->
                  </li>
                  <!-- SLIDE  -->
                  <li data-index="rs-557" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                     <div class="tp-caption Concept-Title   tp-resizeme rs-parallaxlevel-2" id="slide-672-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-65','-65','-57','-54']" data-fontsize="['25','25','20','20']" data-lineheight="['25','25','20','20']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0.5;s:1500;e:Power3.easeInOut;" data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;">Asesoría inmobiliaria y financiera
                     </div>
                     <div class="tp-caption Concept-SubTitle   tp-resizeme rs-parallaxlevel-2" id="slide-672-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['70','70','50','40']" data-lineheight="['70','70','50','40']" data-width="['none','none','none','400']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0.5;s:1500;e:Power3.easeInOut;" data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-start="1700" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;text-align:center;">
                        <a href="#" data-href="#projects" target="_self"> Ver más </a>	
                     </div>
                     <img src="//cdn.concasa.com/concasa.com/images/m-images/home/proyectos-ma.jpg" data-lazyload="//cdn.concasa.com/concasa.com/images/m-images/home/proyectos-ma.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="2" class="rev-slidebg" data-no-retina>
                     <div class="backopacity"></div>
                     <!-- LAYERS -->
                  </li>
               </ul>
               <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
         </div>
         <!-- END REVOLUTION SLIDER -->
      </section>
      <div class="clear"></div>
      <div class="section parallax notopmargin nobottommargin noborder dark" style="background-color: #4294df;">
         <div class="heading-block center nobottomborder nobottommargin">
            <h2>Innovamos para que adquirir hogar sea una experiencia simple y satisfactoria</h2>
         </div>
      </div>
      <div class="clear"></div>
      <?php include 'm-other-projects-all.php';?>
      <div class="section dark notopmargin nobottommargin noborder" style="height: 300px; padding: 90px 0;">
         <div class="container clearfix">
            <div class="slider-caption slider-caption-center" style="position: relative;">
               <div data-animate="fadeInUp">
                  <h2 style="font-size: 1.5rem;">Vea en detalle nuestros proyectos disponibles</h2>
               </div>
            </div>
         </div>
         <div class="video-wrap">
            <video poster="//cdn.concasa.com/concasa.com/images/videos/explore.jpg" preload="none" loop autoplay muted playsinline>
               <source src='//cdn.concasa.com/concasa.com/images/videos/VideoProyectos-30s_2.mp4' type='video/mp4' />
               <source src='//cdn.concasa.com/concasa.com/images/videos/VideoProyectos-30s_2.webm' type='video/webm' />
            </video>
            <div class="video-overlay" style="background-color: rgba(0,0,0,0.3);"></div>
         </div>
      </div>
      <section id="clients">
         <div class="content-wrap notopmargin nobottommargin">
            <div class="container clearfix">
               <p>Empresa desarrolladora inmobiliaria con amplia experiencia en la construcción y venta de complejos habitaciones en condominio vertical y horizontal. Nuestros proyectos están ubicados en Costa Rica, Panamá y Venezuela.</p>
               <div class="heading-block center topmargin-sm nobottommargin">
                  <h3 class="nobottommargin">Publicaciones</h3>
               </div>
               <ul class="clients-grid grid-4 topmargin-sm clearfix">
                  <li><a href="https://www.construccion.co.cr/Post/Detalle/33532/concasa-invierte-40-millones-en-su-nuevo-proyecto-monte-alto" target="_blank"><img src="//cdn.concasa.com/concasa.com/images/n-images/press/5-C.png" alt="Cámara Costarricense de la Construcción"></a></li>
                  <li><a href="https://www.larepublica.net/noticia/busca-casa-concasa-lanza-plataforma-virtual" target="_blank"><img src="//cdn.concasa.com/concasa.com/images/n-images/press/3-C.png" alt="larepublica.net"></a></li>
                  <li><a href="https://www.elfinancierocr.com/tecnologia/firmas-de-joyeria-juguetes-bienes-raices-y-agro/ELRRU5B66VDSVGEQSBVCDNBDAA/story/" target="_blank"><img src="//cdn.concasa.com/concasa.com/images/n-images/press/1-C.png" alt="El Financiero, Grupo Nación"></a></li>
                  <li><a href="https://www.vidayexito.net/negocios/concasa-invertira-us40-millones-en-nuevo-proyecto-en-costa-rica/" target="_blank"><img src="//cdn.concasa.com/concasa.com/images/n-images/press/2-C.png" alt="Revista Vida y Éxito"></a></li>
               </ul>
            </div>
         </div>
      </section>
      <section id="carousel-bottom">
         <div class="content-wrap notopmargin nobottommargin">
            <div class=" clearfix">
               <div id="igimages"></div>
            </div>
         </div>
      </section>
      <section id="recent-posts">
         <div class="content-wrap notopmargin nobottommargin">
            <div class="container clearfix">
               <div id="post-lists" class="widget clearfix">
                  <h4 class="highlight-me">Recent Posts</h4>
                  <div id="post-list-footer">
                     <?php
                        $cont = 0;
                              $url="https://concasa.com/blog-inmobiliario/wp-json/wp/v2/posts";
                              $ch = curl_init();
                              curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                              curl_setopt($ch, CURLOPT_URL,$url);
                              $result=curl_exec($ch);
                              $posts = json_decode($result, true);
                             
                              foreach ($posts as $post) { 
                               $cont++;
                                if ($cont < 4){
                             ?>
                     <div class="spost clearfix">
                        <div class="entry-image">
                           <a href="<?php echo $post['link']; ?>" target="_blank" class="nobg"><img src="<?php echo $post['featured_image_src']; ?>" alt=""></a>
                        </div>
                        <div class="entry-c">
                           <div class="entry-title">
                              <h4><a href="<?php echo $post['link']; ?>" target="_blank"><?php echo $post['title']['rendered']; ?></a></h4>
                           </div>
                           <ul class="entry-meta">
                              <li><?php echo date('F j, Y', strtotime($post['date'])); ?></li>
                           </ul>
                        </div>
                     </div>
                     <?php } } ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php include 'm-footer.php';?>
      </body>
</html>
      
<?php 
		  
	}else{
		
?>
<!DOCTYPE HTML>
<head>
    <meta charset="UTF-8">
    <title>Inmobiliaria Concasa: Codominios, casas y apartamentos en Costa Rica﻿</title>
    
    <meta http-equiv="Cache-Control" content="no-cache" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
	
  	<meta name="author" content="Inmobiliaria Concasa: Codominios, casas y apartamentos en Costa Rica﻿" />
	<meta name="description" content="Construimos comunidades inteligentes.Como inmobiliaria y constructora, innovamos para que adquirir hogar sea una experiencia simple y satisfactoria"/>
	<meta property="og:description" content="Construimos comunidades inteligentes.Como inmobiliaria y constructora, innovamos para que adquirir hogar sea una experiencia simple y satisfactoria" />
	<meta name="keywords"  content="inmobiliarias en costa rica﻿,Casas, Apartamentos, Condominios, Terrazas del Norte, Condominio 6-26, Condominio 9-10, Costa Linda, Caminos del Bosque, Monte Alto, Alajuela, Venta de casas, Proyectos" />
	<style>body { overflow-x: hidden !important; width: 101%; }.portfolio-overlay a:hover{color: #fff !important; background-color: transparent !important;}.portfolio-overlay a{left: 30% !important; width: 250px !important; line-height: 25px !important; border-radius: 0 !important; background-color: transparent !important;color: #fff !important;}.portfolio-overlay span{font-size: 80%;}</style> 
	
<?php 
	include 'header-top.php'; 
	include 'nav-top.php'; 
?>

<!-- Start Homepage -->
<div id="homepage">
   <div class="container">
      <div class="slider-text">
         <div class="twelve columns">
            <div id="slidecaption" data-animate="fadeIn" data-delay="200"></div>
         </div>
         <div class="four columns">
            <a id="prevslide" class="load-item"><i class="icon-chevron-left"></i></a>
            <a id="nextslide" class="load-item"><i class="icon-chevron-right"></i></a>
         </div>
      </div>
   </div>
</div>
<!-- End Homepage -->
<!-- Start About US -->
<div id="about-us" class="page">
   <div class="row container">
      <div class="col-4">
         <h1 title="Su inmobiliaria en Costa Rica﻿" name="Su inmobiliaria en Costa Rica﻿" data-animate="slideInLeft">Somos CONCASA</h1>
         <div class="line-b" style="opacity: 1;"></div>
      </div>
      <div class="col-8">
         <p class="newtext" data-animate="slideInRight" data-delay="200">Empresa desarrolladora inmobiliaria con amplia experiencia en la construcción y venta de complejos habitaciones en condominio vertical y horizontal. Nuestros proyectos están ubicados en Costa Rica, Panamá y Venezuela.</p>
      </div>
   </div>
</div>
<!-- End About US -->
<!-- Start Parallax Background (Counters) -->
<div id="parallax1" class="bg-animation">
   <div class="fondocontadores bg-animation"></div>
   <div class="pattern"></div>
   <div class="container">
      <div class="vertical-text-counters">
         <div class="row text-center">
            
             <div class="col">
               <div class="counter">
                  <h2 title="Casas, Apartamentos, Condominios" name="Casas, Apartamentos, Condominios" class="puls" style="animation-delay: 2.25s"><span class="timer count-title count-number puls" data-to="30" data-speed="1500" style="animation-delay: 2.25s"></span>+</h2>
                  <p class="newtext fwhite">Años de trayectoria</p>
               </div>
            </div>
            
            <div class="col">
               <div class="counter">
                  <h2 title="Casas, Apartamentos, Condominios" name="Casas, Apartamentos, Condominios" class="puls" style="animation-delay: 0s"><span class="timer count-title count-number puls" data-to="90" data-speed="1500" style="animation-delay: 0s"></span>+</h2>
                  <p class="newtext fwhite">Proyectos desarrollados</p>
               </div>
            </div>
            
            <div class="col">
               <div class="counter">
                  <h2 title="Casas, Apartamentos, Condominios" name="Casas, Apartamentos, Condominios" class="puls" style="animation-delay: .75s"><span class="timer count-title count-number puls" data-to="20" data-speed="1500" style="animation-delay: .75s"></span> <small>k</small></h2>
                  <p class="newtext fwhite">Unidades entregadas</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- End Parallax Background (Counters) -->

<?php include 'all-projects.php'; ?>

<!-- Start Parallax Background (Quote) -->
<div id="parallax4">
   <div class="bg1" style="background-position: 50% 81px;"></div>
   <div class="pattern"></div>
   <div class="container">
      <div class="vertical-text">
         <p class="prlx-quote">Innovamos para que adquirir hogar sea una experiencia simple y satisfactoria</p>
      </div>
   </div>
</div>
<!-- End Parallax Background (Quote) -->
<!-- Start Press -->
<div class="section section-bottom">
   <div class="container clearfix">
      <div class="fifteen text-center">
         <h1>Publicaciones</h1>
         <!--<p class="lead">Cuando nuestro trabajo es noticia</p>-->
         <hr>
      </div>
      <div id="text-carusel-concasa">“La empresa inmobiliaria Concasa planea invertir más de $73 millones en la construcción de 4 proyectos habitaciones en el transcurso de 2020 y 2021”<img src="//cdn.concasa.com/concasa.com/images/n-images/press/1-C.png" alt="La empresa inmobiliaria Concasa planea invertir más de $73 millones en la construcción de 4 proyectos habitaciones en el transcurso de 2020 y 2021" title="La empresa inmobiliaria Concasa planea invertir más de $73 millones en la construcción de 4 proyectos habitaciones en el transcurso de 2020 y 2021"  class="tumb-press-logo"></div>
      <hr>
      <div id="oc-clients" class="owl-carousel image-carousel carousel-widget" data-margin="0" data-loop="true" data-nav="false" data-autoplay="true" data-pagi="false" data-items-xs="1" data-items-sm="1" data-items-md="2" data-items-lg="4" data-items-xl="4">
         <div class="oc-item">
            <a href="https://www.elfinancierocr.com/negocios/concasa-invertira-mas-de-73-millones-en-el/7BM6GNSARVD2PGLGTCQB3QJJTE/story/" target="_blank">
            <img src="//cdn.concasa.com/concasa.com/images/n-images/press/1.png" alt="Concasa invertirá más de $73 millones en el desarrollo de cuatro proyectos habitacionales - El Financiero" title="Concasa invertirá más de $73 millones en el desarrollo de cuatro proyectos habitacionales - El Financiero">
            </a>
            <div class="caption hidediv">
               “El primero de los complejos residenciales comprenderá 378 apartamentos – espacios de 66, 81 y 93 metros cuadrados (m²)” 
               <img src="//cdn.concasa.com/concasa.com/images/n-images/press/1-C.png" alt="Concasa invertirá más de $73 millones en el desarrollo de cuatro proyectos habitacionales - El Financiero" title="Concasa invertirá más de $73 millones en el desarrollo de cuatro proyectos habitacionales - El Financiero" class="tumb-press-logo">
            </div>
         </div>
         <div class="oc-item">
            <a href="https://revistaconstruir.com/concasa-invertira-us40-millones-proyecto-residencial-curridabat-costa-rica/" target="_blank">
            <img src="//cdn.concasa.com/concasa.com/images/n-images/press/7.png" alt="Monte Alto: el nuevo complejo residencial en medio de la naturaleza" title="Monte Alto: el nuevo complejo residencial en medio de la naturaleza">
            </a>
            <div class="caption hidediv">
               “Monte Alto: el nuevo complejo residencial en medio de la naturaleza” 
               <img src="//cdn.concasa.com/concasa.com/images/n-images/press/7-C.png" alt="Monte Alto: el nuevo complejo residencial en medio de la naturaleza" title="Monte Alto: el nuevo complejo residencial en medio de la naturaleza" class="tumb-press-logo">
            </div>
         </div>
         <div class="oc-item">
            <a href="https://www.construccion.co.cr/Post/Detalle/33532/concasa-invierte-40-millones-en-su-nuevo-proyecto-monte-alto" target="_blank">
            <img src="//cdn.concasa.com/concasa.com/images/n-images/press/5.png" alt="Monte Alto está dirigido a personas con un estilo de vida sofisticado, activo y saludable, interesadas en mantener un equilibrio entre su vida personal, social y profesional…" title="Monte Alto está dirigido a personas con un estilo de vida sofisticado, activo y saludable, interesadas en mantener un equilibrio entre su vida personal, social y profesional…">
            </a>
            <div class="caption hidediv">
               “Monte Alto está dirigido a personas con un estilo de vida sofisticado, activo y saludable, interesadas en mantener un equilibrio entre su vida personal, social y profesional…” 
               <img src="//cdn.concasa.com/concasa.com/images/n-images/press/5-C.png" alt="Monte Alto está dirigido a personas con un estilo de vida sofisticado, activo y saludable, interesadas en mantener un equilibrio entre su vida personal, social y profesional…" title="Monte Alto está dirigido a personas con un estilo de vida sofisticado, activo y saludable, interesadas en mantener un equilibrio entre su vida personal, social y profesional…" class="tumb-press-logo">
            </div>
         </div>
         <div class="oc-item">
            <a href="https://nemvo.com/articulos/arquitectura/concasa-invertira-40-millones-en-monte-alto-nuevo-proyecto-residencial-en-curridabat/" target="_blank">
            <img src="//cdn.concasa.com/concasa.com/images/n-images/press/6.png" alt="Monte Alto ofrecerá 378 apartamentos en un amplio terreno rodeado de naturaleza, especies nativas, una quebrada y una espectacular vista del Valle Central" title="Monte Alto ofrecerá 378 apartamentos en un amplio terreno rodeado de naturaleza, especies nativas, una quebrada y una espectacular vista del Valle Central">
            </a>
            <div class="caption hidediv">
               “Monte Alto ofrecerá 378 apartamentos en un amplio terreno rodeado de naturaleza, especies nativas, una quebrada y una espectacular vista del Valle Central” 
               <img src="//cdn.concasa.com/concasa.com/images/n-images/press/6-C.png" alt="Monte Alto ofrecerá 378 apartamentos en un amplio terreno rodeado de naturaleza, especies nativas, una quebrada y una espectacular vista del Valle Central" title="Monte Alto ofrecerá 378 apartamentos en un amplio terreno rodeado de naturaleza, especies nativas, una quebrada y una espectacular vista del Valle Central" class="tumb-press-logo">
            </div>
         </div>
         <div class="oc-item">
            <a href="https://www.vidayexito.net/negocios/concasa-invertira-us40-millones-en-nuevo-proyecto-en-costa-rica/" target="_blank">
            <img src="//cdn.concasa.com/concasa.com/images/n-images/press/2.png" alt="Su principal atractivo será la posibilidad de disfrutar de la ciudad sin renunciar a los placeres que ofrece un contacto genuino con la naturaleza" title="Su principal atractivo será la posibilidad de disfrutar de la ciudad sin renunciar a los placeres que ofrece un contacto genuino con la naturaleza">
            </a>
            <div class="caption hidediv">
               “Su principal atractivo será la posibilidad de disfrutar de la ciudad sin renunciar a los placeres que ofrece un contacto genuino con la naturaleza” 
               <img src="//cdn.concasa.com/concasa.com/images/n-images/press/2-C.png" alt="Su principal atractivo será la posibilidad de disfrutar de la ciudad sin renunciar a los placeres que ofrece un contacto genuino con la naturaleza" title="Su principal atractivo será la posibilidad de disfrutar de la ciudad sin renunciar a los placeres que ofrece un contacto genuino con la naturaleza" class="tumb-press-logo">
            </div>
         </div>
         <div class="oc-item">
            <a href="https://www.larepublica.net/noticia/busca-casa-concasa-lanza-plataforma-virtual" target="_blank">
            <img src="//cdn.concasa.com/concasa.com/images/n-images/press/3.png" alt="...se pueden atender consultas, así como brindar asesoría inmobiliaria y financiera en tiempo real para los interesados" title="...se pueden atender consultas, así como brindar asesoría inmobiliaria y financiera en tiempo real para los interesados">
            </a>
            <div class="caption hidediv">
               “...se pueden atender consultas, así como brindar asesoría inmobiliaria y financiera en tiempo real para los interesados” 
               <img src="//cdn.concasa.com/concasa.com/images/n-images/press/3-C.png" alt="...se pueden atender consultas, así como brindar asesoría inmobiliaria y financiera en tiempo real para los interesados" title="...se pueden atender consultas, así como brindar asesoría inmobiliaria y financiera en tiempo real para los interesados" class="tumb-press-logo">
            </div>
         </div>
         <div class="oc-item">
            <a href="https://www.elfinancierocr.com/tecnologia/firmas-de-joyeria-juguetes-bienes-raices-y-agro/ELRRU5B66VDSVGEQSBVCDNBDAA/story/" target="_blank">
            <img src="//cdn.concasa.com/concasa.com/images/n-images/press/1.png" alt="Concasa ofrece atención, asesoría y visitas virtuales a sus proyectos" title="Concasa ofrece atención, asesoría y visitas virtuales a sus proyectos">
            </a>
            <div class="caption hidediv">
               “Concasa ofrece atención, asesoría y visitas virtuales a sus proyectos” 
               <img src="//cdn.concasa.com/concasa.com/images/n-images/press/1-C.png" alt="Concasa ofrece atención, asesoría y visitas virtuales a sus proyectos" title="Concasa ofrece atención, asesoría y visitas virtuales a sus proyectos" class="tumb-press-logo">
            </div>
         </div>
         <div class="oc-item">
            <a href="https://newsinamerica.com/pdcc/gerenciales/2020/clientes-de-concasa-optan-por-visitas-y-consultas-virtuales-ante-emergencia" target="_blank">
            <img src="//cdn.concasa.com/concasa.com/images/n-images/press/4.png" alt="El servicio también permite atender consultas y ofrecer asesoría inmobiliaria y financiera en tiempo real" title="El servicio también permite atender consultas y ofrecer asesoría inmobiliaria y financiera en tiempo real">
            </a>
            <div class="caption hidediv">
               “El servicio también permite atender consultas y ofrecer asesoría inmobiliaria y financiera en tiempo real” 
               <img src="//cdn.concasa.com/concasa.com/images/n-images/press/4-C.png" alt="El servicio también permite atender consultas y ofrecer asesoría inmobiliaria y financiera en tiempo real" title="El servicio también permite atender consultas y ofrecer asesoría inmobiliaria y financiera en tiempo real" class="tumb-press-logo">
            </div>
         </div>
      </div>
   </div>
</div>    
<!-- End Press -->

<?php include 'footer-top.php'; ?>

<script src="n-js/home.js"></script>
<script src="n-js/jquery.fancybox.pack.js"></script>
<script src="n-js/jquery.fancybox-media.js"></script>
<script>
	
		var owl = $("#oc-clients");
			owl.owlCarousel({
		    	autoplay: true,
		    	loop:true,
		    	dots: false,
		    	margin: 40,
		    	items: 4
		});
		owl.on('changed.owl.carousel',function(property){
		    var current = property.item.index;
		    var srctxt = $(property.target).find(".owl-item").eq(current).find(".caption").html();
		    $('#text-carusel-concasa').html(srctxt);
		});
	
	
</script> 
<?php
	
	} // End if Mobile Detect
		
?>


<div class="modal fade" id="COVID19" tabindex="-1" role="dialog" aria-labelledby="COVID19Label" data-target="#staticBackdrop" data-backdrop="static" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div id="body360" class="modal-body">
	            
            <img src="//cdn.concasa.com/concasa.com/images/Pop-Up-Asesoria-Virtual.jpg" class="img-fluid"/>
	            
            </div>
              <div class="modal-footer">
		        <button type="button" class="btnn btn-primary" data-dismiss="modal" style="float: left; position: absolute; left: 15px; padding: 10px;">Continuar con la navegación</button>
		        <a href="//concasa.com/asesoria-virtual/" class="btnn btn-primary" style="padding: 10px;">Agendar cita virtual</a>
		      </div>
      
        </div>
    </div>
</div>
