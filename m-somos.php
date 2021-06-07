<?php include $_SERVER['DOCUMENT_ROOT'].'/config/conf.php';  ?>
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
	<title>Quienes somos - Mobile | Concasa</title>
	
	<meta name="author" content="CONCASA desarrolladora inmobiliaria." />
	<meta name="description" content="CONCASA MOBILE Venta de casas, condominios y apartamentos San Rafael de Alajuela - Costa Rica, Venezuela y Panamá."/>
	<meta property="og:description" content="Unidades disponibles que van desde los $<?=number_format(getPrecioProperty('Bosque','1'), 0, '.', ',');?> USD*" />
	<meta name="keywords"  content="Casas,Condominio,Apartamento,Alajuela,Venta de casas,Terrazas del Norte,Condominio 6-26,Condominio 9-10,Costa Lind, Proyectos" />
	
	<?php include('m-head.php')?>
	
	<style>

#dates a {
    color: #fff !important;
    text-shadow: 1px 1px 2px #353434;
}
* {
	margin: 0;
	padding: 0;
}


	#timeline {
		    min-width: 320px;
		    max-width: 500px;
		    width: 100%;
		    height: 600px;
		    overflow: hidden;
		    margin: 0px auto;
		    position: relative;
		    background: #000;
		   /* background: url('//www.csslab.cl/ejemplos/timelinr/latest/images/dot.gif') 3px top repeat-y #000;*/
	}
		#dates {
			position: absolute;
		    z-index: 99999;
		    /*background: url('https://www.jqueryscript.net/demo/Simple-jQuery-Timeline-Plugin-Timelinr/images/grad_left.png') repeat-y;*/
		    top: 0;
		    margin: 0;
		    padding: 0;
		}
			#dates li {
				list-style: none;
				width: 33.33333333%;
				height: 100px;
				line-height: 100px;
				font-size: 24px;
				padding-left: 10px;
				/*background: url('//www.csslab.cl/ejemplos/timelinr/latest/images/biggerdot.png') left center no-repeat;*/
			}
				#dates a {
					line-height: 38px;
					padding-bottom: 10px;
				}
				#dates .selected {
			        font-size: 38px;
				}
				#dates li a:hover {
				    color: #fff;
				}
		#issues {
			width: 100%;
			height: 600px;
			overflow: hidden;
			float: left;
			position: absolute;
			z-index: 0;
		}	
			#issues li {
				width: 98%;
				height: 600px;
				list-style: none;

			}
				#issues li.selected img {
					-webkit-transform: scale(1.1,1.1);
					-moz-transform: scale(1.1,1.1);
				    -o-transform: scale(1.1,1.1);
				    -ms-transform: scale(1.1,1.1);
				    transform: scale(1.1,1.1);
				}
				#issues li img {
					position: absolute;
					-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#00FFFFFF,endColorstr=#00FFFFFF)"; /* IE 8 */   
					filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#00FFFFFF,endColorstr=#00FFFFFF);/* IE 6 & 7 */      
					zoom: 1;
					-webkit-transition: all 2s ease-in-out;
					-moz-transition: all 2s ease-in-out;
					-o-transition: all 2s ease-in-out;
					-ms-transition: all 2s ease-in-out; 
					transition: all 2s ease-in-out;
					-webkit-transform: scale(0.7,0.7);
					-moz-transform: scale(0.7,0.7);
				    -o-transform: scale(0.7,0.7);
				    -ms-transform: scale(0.7,0.7);
				    transform: scale(0.7,0.7);
				}
				#issues li h1 {
					font-size: 23px;
				    margin: 70% 0 10px 0;
				    position: absolute;
				    padding-left: 32%;
				    color: #fff;
				    text-align: center;
				    display: block;
				    width: 100%;
				    text-shadow: 1px 1px 2px #353434;
				}
				#issues li p {
					font-size: 16px;
				    font-weight: normal;
				    line-height: 22px;
				    margin: 83% 0 10px 0;
				    position: absolute;
				    padding-left: 35%;
				    padding-right: 3%;
				    color: #fff;
				    display: block;
				    width: 100%;
				    text-align: center;
				    text-shadow: 1px 1px 2px #353434;
				}
		
		#grad_top,
		#grad_bottom {
			min-width: 320px;
			max-width: 500px;
			width: 100%;
			height: 80px;
			position: absolute;
		}
			#grad_top {
		        top: 0;
		       /* background: url('//www.csslab.cl/ejemplos/timelinr/latest/images/grad_top.png') repeat-x; */
			}
			#grad_bottom {
		        bottom: 0;
		       /* background: url('//www.csslab.cl/ejemplos/timelinr/latest/images/grad_bottom.png') repeat-x;*/
			}
		
		#next,
		#prev {
			position: absolute;
			left: 55%;
			font-size: 70px;
			width: 38px;
			height: 22px;
			background-position: 0 -44px;
			background-repeat: no-repeat;
			text-indent: -9999px;
			overflow: hidden;
		}
			#next:hover,
			#prev:hover {
				background-position:  0 0;
			}
			#next {
				bottom: 0;
				background-image: url('../images/next_v.png');
			}
			#prev {
				top: 0;
				background-image: url('../images/prev_v.png');
			}
				#next.disabled,
				#prev.disabled {
					opacity: 0.2;
				}
				.lower {
					text-transform: lowercase;
				}
	    
	</style>
	








<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element revslider-wrap full-screen clearfix">

			<div id="lechefheader_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="le-chef-header64" data-source="gallery" style="background:#000000;padding:0px;">
			<!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
				<div id="lechefheader" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8.1">
					<ul>	<!-- SLIDE  -->
						<li class="dark" data-index="rs-555" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
							<!-- MAIN IMAGE -->
							<img src="include/rs-plugin/demos/assets/images/dummy.png"  alt=""  data-lazyload="m-images/slider/about-slider.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="2" class="rev-slidebg" data-no-retina>
							<!-- LAYERS -->
						</li>
						<!-- SLIDE  -->
						<li data-index="rs-556" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
							<!-- MAIN IMAGE -->
							<img src="include/rs-plugin/demos/assets/images/dummy.png"  alt=""  data-lazyload="m-images/slider/about-slider.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="2" class="rev-slidebg" data-no-retina>
							<!-- LAYERS -->
						</li>
						<!-- SLIDE  -->
						<li data-index="rs-557" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
							<!-- MAIN IMAGE -->
							<img src="include/rs-plugin/demos/assets/images/dummy.png"  alt=""  data-lazyload="m-images/slider/about-slider.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="2" class="rev-slidebg" data-no-retina>
							<!-- LAYERS -->
						</li>
					</ul>
					<div style="" class="tp-static-layers">

							<!-- LAYER NR. 1 -->
							<div class="tp-caption tp-shape tp-shapewrapper  tp-static-layer"
								 id="slider-210-layer-11"
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
											data-width="full"
								data-height="full"
								data-whitespace="nowrap"

								data-type="shape"
								data-basealign="slide"
								data-responsive_offset="off"
								data-responsive="off"
								data-startslide="0"
								data-endslide="2"
								data-frames='[{"delay":250,"speed":600,"frame":"0","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
								data-textAlign="['inherit','inherit','inherit','inherit']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"

								style="z-index: 5;background-color:rgba(0,0,0,0.35);"> </div>

							<!-- LAYER NR. 2 -->
							<div class="tp-caption   rs-parallaxlevel-3 tp-static-layer"
								 id="slider-210-layer-13"
								 data-x="['center','center','center','center']" data-hoffset="['-1','-1','0','0']"
								 data-y="['middle','middle','middle','middle']" data-voffset="['-149','-149','-190','-190']"
											data-width="none"
								data-height="none"
								data-whitespace="nowrap"

								data-type="image"
								data-responsive_offset="off"
								data-responsive="off"
								data-startslide="0"
								data-endslide="2"
								data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:20px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
								data-textAlign="['inherit','inherit','inherit','inherit']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"

								style="z-index: 6;"><br> </div>

							<!-- LAYER NR. 3 -->
							<div class="tp-caption   rs-parallaxlevel-3 tp-static-layer"
								 id="slider-210-layer-5"
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								 data-y="['middle','middle','middle','middle']" data-voffset="['-40','-40','-70','-50']"
											data-fontsize="['25','25','20','20']"
								data-lineheight="['35','35','30','30']"
								data-width="['640','640','480','320']"
								data-height="['70','70','none','none']"
								data-whitespace="normal"

								data-type="text"
								data-responsive_offset="off"
								data-responsive="off"
								data-startslide="0"
								data-endslide="2"
								data-frames='[{"delay":1000,"split":"chars","splitdelay":0.02,"speed":1000,"split_direction":"random","frame":"0","from":"sX:1;sY:1;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[5,5,5,5]"

								style="z-index: 7; min-width: 640px; max-width: 640px; max-width: 70px; max-width: 70px; white-space: normal; font-size: 25px; line-height: 35px; font-weight: 300; color: #ffffff; letter-spacing: 5px;font-family:Poppins;text-transform:uppercase;">DESARROLLAMOS CALIDAD DE VIDA<br><spam class="lower">Pase a conocer nuestra trayectoria</spam> </div>

							<!-- LAYER NR. 4 
							<a class="tp-caption rev-btn   tp-rs-menulink rs-parallaxlevel-3 tp-static-layer"
					 			href="#" target="_self"			 id="slider-210-layer-6"
								 data-x="['center','center','center','center']" data-hoffset="['-150','-150','0','0']"
								 data-y="['middle','middle','middle','middle']" data-voffset="['100','100','48','70']"
											data-fontsize="['14','14','14','12']"
								data-lineheight="['60','60','60','50']"
								data-width="['280','280','280','240']"
								data-height="none"
								data-whitespace="nowrap"

								data-type="button"
								data-actions=''
								data-responsive_offset="off"
								data-responsive="off"
								data-startslide="0"
								data-endslide="2"
								data-frames='[{"delay":2000,"speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255,255,255,1);bg:rgb(0,0,0);"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"

								style="z-index: 8; min-width: 280px; max-width: 280px; white-space: nowrap; font-size: 14px; line-height: 60px; font-weight: 500; color: #000000; letter-spacing: 3px;font-family:Poppins;background-color:rgb(255,255,255);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;"><i class="icon-star"></i> SEASONAL SPECIALS </a>-->

							<!-- LAYER NR. 5 -->
							<a class="tp-caption rev-btn   tp-rs-menulink rs-parallaxlevel-3 tp-static-layer"
			                     href="#" target="_self"			 id="slider-210-layer-6"
			                     data-x="['center','center','center','center']" data-hoffset="['-150','-150','0','0']"
			                     data-y="['middle','middle','middle','middle']" data-voffset="['100','100','48','70']"
			                     data-fontsize="['14','14','14','12']"
			                     data-lineheight="['60','60','60','50']"
			                     data-width="['280','280','280','240']"
			                     data-height="none"
			                     data-whitespace="nowrap"
			                     data-type="button"
			                     data-actions=''
			                     data-responsive_offset="off"
			                     data-responsive="off"
			                     data-startslide="0"
			                     data-endslide="2"
			                     data-frames='[{"delay":2000,"speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255,255,255,1);bg:rgb(0,0,0);"}]'
			                     data-textAlign="['center','center','center','center']"
			                     data-paddingtop="[0,0,0,0]"
			                     data-paddingright="[0,0,0,0]"
			                     data-paddingbottom="[0,0,0,0]"
			                     data-paddingleft="[0,0,0,0]"
			                     data-toggle="modal" data-target=".bs-example-modal-sm"
			                     style="z-index: 8; min-width: 280px; max-width: 280px; white-space: nowrap; font-size: 14px; line-height: 60px; font-weight: 500; color: #000000; letter-spacing: 3px;background-color:rgb(255,255,255);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;"><i class="icon-calendar"></i> Agendar visita </a>
						</div>
					<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
				</div>
			</div><!-- END REVOLUTION SLIDER -->

		</section>


<div class="clear"></div>
		
		
<section id="content nobottommargin" style="margin-bottom: 0px;">

	<div class="content-wrap" style="padding: 80px 0 0px 0 !important;">

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
		
		
		
		<div class="clear"></div>
	
	
	
<div class="heading-block container center nobottommargin">
				<h3 class="nobottommargin">NUESTRA HISTORIA EN COSTA RICA</h3>
				<span>Inició con una idea optimista que se transformó en una amplia gama de proyectos desarrollados en los últimos 16 años. Actualmente seguimos a la vanguardia innovando el sector inmobiliario.</span>
			</div>	<br>
			<div class="clear"></div>	
<div id="timeline">
		<ul id="dates" style="margin-top: 0px;">
			<li><a href="#2004" class="selected">2004</a></li>
			<li><a href="#2006">2006</a></li>
			<li><a href="#2007">2007</a></li>
			<li><a href="#2009">2009</a></li>
			<li><a href="#2010">2010</a></li>
			<li><a href="#2011">2011</a></li>
			<li><a href="#2012">2012</a></li>
			<li><a href="#2013">2013</a></li>
			<li><a href="#2013">2013</a></li>
			<li><a href="#2014">2014</a></li>
			<li><a href="#2015">2015</a></li>
			<li><a href="#2017">2017</a></li>
			<li><a href="#2018">2018</a></li>
			<li><a href="#2019">2019</a></li>
			<li><a href="#2020">2020</a></li>
		</ul>
		<ul id="issues">
			<li id="2004" class="selected">
				<img src="/n-images/timeline/m-Campo-Alto-min.jpg" />
				<h1>Campo Alto</h1>
				<p>Proyecto con 192 apartamentos en condominio vertical ubicado en Alajuela.</p>
			</li>
			<li id="2006">
				<img src="/n-images/timeline/m-Costa-linda-min.jpg" />
				<h1>Costa Linda</h1>
				<p>Proyecto con 192 apartamentos en condominio vertical ubicado en Jacó.</p>
			</li>
			<li id="2007">
				<img src="/n-images/timeline/m-Bosque-Real-2-min.jpg" />
				<h1>Bosque Real</h1>
				<p>Proyecto con 336 apartamentos en condominio vertical ubicado en Alajuela.</p>
			</li>
			<li id="2009">
				<img src="/n-images/timeline/m-Paso-Real-min.jpg" />
				<h1>Paso Real</h1>
				<p>Proyecto con 224 apartamentos en condominio vertical ubicado en Alajuela.</p>
			</li>
			<li id="2010">
				<img src="/n-images/timeline/m-vista-real-min.jpg" />
				<h1>Vista Real</h1>
				<p>Proyecto con 196 apartamentos en condominio vertical ubicado en Alajuela.</p>
			</li>
			<li id="2011">
				<img src="/n-images/timeline/m-vistas-del-lago-min.jpg" />
				<h1>Vistas del Lago</h1>
				<p>Proyecto con 69 casas en condominio horizontal ubicado en Alajuela.</p>
			</li>
			<li id="2012">
				<img src="/n-images/timeline/m-Terrazas-del-Oeste-min.jpg" />
				<h1>Terrazas Del Oeste</h1>
				<p>Proyecto con 594 casas en condominio horizontal ubicado en Alajuela.</p>
			</li>
			<li id="2013">
				<img src="/n-images/timeline/m-Centro-comercial-min.jpg" />
				<h1>Comercial Campo Real</h1>
				<p>Proyecto con 40 locales comerciales ubicado en Alajuela.</p>
			</li>
			<li id="2013">
				<img src="/n-images/timeline/m-Villas-del-campo-min.jpg" />
				<h1>Villas Del Campo</h1>
				<p>Proyecto con 196 apartamentos en condominio vertical ubicado en Alajuela.</p>
			</li>
			<li id="2014">
				<img src="/n-images/timeline/m-Valle-escondido-min.jpg" />
				<h1>Valle Escondido</h1>
				<p>Proyecto con 198 casas en condominio horizontal ubicado en Alajuela.</p>
			</li>
			<li id="2015">
				<img src="/n-images/timeline/m-910-min.jpg" />
				<h1>Condominio 9-10</h1>
				<p>Proyecto con 380 apartamentos en condominio vertical ubicado en Alajuela.</p>
			</li>
			<li id="2017">
				<img src="/n-images/timeline/m-TN-min.jpg" />
				<h1>Terrazas Del Norte</h1>
				<p>Proyecto con 546 casas en condominio horizontal ubicado en Alajuela.</p>
			</li>
			<li id="2018">
				<img src="/n-images/timeline/m-626-min.jpg" />
				<h1>Condominio 6-26</h1>
				<p>Proyecto con 378 apartamentos en condominio vertical ubicado en Alajuela.</p>
			</li>
			<li id="2019">
				<img src="/n-images/timeline/m-MA-min.jpg" />
				<h1>Monte Alto</h1>
				<p>Proyecto con 288 apartamentos en condominio vertical ubicado en Curridabat.</p>
			</li>
			<li id="2020">
				<img src="/n-images/timeline/m-CDB-min.jpg" />
				<h1>Caminos del Bosque</h1>
				<p>Proyecto con 60 apartamentos en condominio vertical ubicado en Alajuela.</p>
			</li>
		</ul>
		<div id="grad_top"></div>
		<div id="grad_bottom"></div>
		<a href="#" id="next">+</a>
		<a href="#" id="prev">-</a>
	</div>




		
		<div class="clear" style="margin: 15px;"></div>
		
		
		<?php include 'm-testimonials.php';?>
	
		<?php include 'm-other-projects-626.php';?>
		
		<?php include 'm-calendly.php';?>	
		
		<?php include 'm-footer.php';?>
	
	
	<script src="https://www.csslab.cl/ejemplos/timelinr/latest/js/jquery.timelinr-0.9.54.js"></script>

	
	
	<!-- ADD-ONS JS FILES -->
	<script>
		
		
		$(function(){
      $().timelinr({
        orientation:  'vertical',
        issuesSpeed:  300,
        datesSpeed:   100,
        arrowKeys:    'true',
        startAt:      1
      })
    });

	</script>
</body>
</html>	