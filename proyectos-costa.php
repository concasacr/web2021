<?php include $_SERVER['DOCUMENT_ROOT'].'/config/conf.php'; ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

<title>CONDOMINIO COSTA LINDA</title>

<script type="text/javascript">
<?php if ($_GET['page']!='view'){ ?>
	 alert('Bienvenido Costa Linda');
	 window.location.replace("https://www.concasa.com/proyectos-costa?page=view");
<?php } ?>
</script>

<meta name="author" content="CONCASA desarrolladora inmobiliaria." />
<meta name="description" content="Venta de casas, condominios y apartamentos San Rafael de Alajuela - Costa Rica, Venezuela y Panamá."/>
<meta property="og:description" content="Condominio Costa Linda, con unidades disponibles que van desde los $<?=number_format(getPrecioProperty('Costa','1'), 0, '.', ',');?> USD*" />
<meta name="keywords"  content="Casas,Condominio,Apartamento,Alajuela,Venta de casas,Terrazas del Norte,Condominio 6-26,Condominio 9-10,Costa Lind, Proyectos" />


<link rel="stylesheet" type="text/css" href="/styles/style.css" media="all">
<link rel="stylesheet" type="text/css" href="/fonts/css/all.min.css" media="all">
<link rel="stylesheet" type="text/css" href="/styles/framework.css" media="all">
<style>.call-to-action{margin-top: 10px !important; border-bottom: 0px !important; margin-bottom: 0 !important; padding-bottom: 10px !important;}.logo-proyecto{position: relative; height: 100px; width: auto !important; margin: 0 auto 15px auto; left: 0; right: 0;}</style> 
<?php include $_SERVER['DOCUMENT_ROOT'].'/api-mobile.php'; ?>
</head>
<body>


<?php include $_SERVER['DOCUMENT_ROOT'].'/header-mobile.php'; ?>


<div class="page-content header-clear-small">
	<div class="cover-slider owl-carousel owl-has-dots-over">
					
		<div class="cover-item" style="background-image:url('/images/pictures_vertical/bg14.jpg');">
			<div class="cover-content cover-content-bottom"> 
				<h2 class="color-concasa center-text uppercase ultrabold top-30"><img class="logo-proyecto" src="/images/l-costa-w.png" style="height: 100px !important;width: auto !important;"></h2>
				<h3 class="color-concasa center-text uppercase ultrabold showdow-new" style="font-size: 17px !important;">APTS. DE 2 HABITACIONES</h3>
				<p class="color-concasa center-text opacity-70 bottom-0 showdow-new">Desde <b>$<?=number_format(getPrecioProperty('Costa','1'), 0, '.', ',');?> USD*</b></p>
			</div>
			<div class="cover-overlay overlay overlay-gradient-small"></div>
		</div>
					
	</div>
</div>


    <div class="page-content header-clear-small" style="padding-top: 20px !important;">
	

        <div class="content" id="tabs-section">
            <div class="tabs">
                <div class="tab-pill-titles" data-active-tab-pill-background="bg-blue-dark">
                    <a href="#" id="a-tab" class="active-tab-pill-button bg-blue-dark" data-tab-pill="tab-pill-1">MODELO A</a>
                </div>
                <div class="tab-pill-content">
                    
                    <div class="tab-item active-tab" id="tab-pill-1">
	                    

	                    <div class="item-price">
                            <span class="icon-homes"></span>
                            <b>$<?=number_format(getPrecioProperty('Costa','1'), 0, '.', ',');?></b> 
                            <small>USD*</small>
                        </div>
                        <a href="javascript:void(0);" data-menu="notification-calc" data-valor="<?=getPrecioProperty('Costa','1')?>" data-inicial="<?=getPrimaProperty('Costa','1')?>" class="item-couta-a calcular" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click para Calcular su Cuota">
                            <div class="item-couta">$<?=getCuotaProperty('Costa','1');?> <small>USD*</small></div>
                            <p class="text-center">Cuota mensual aproximada</p>
                        </a>
                        
                        
                        <img src="/images/planos/6.png" alt="Responsive image" style="height: 100%; width: 100%; margin-bottom: 20px;">
                        
                        
                        <div class="item-details"><img src="/images/new-lampara.png" style="display: inline-block;height: 30px;margin-right: 10px;"><b>2</b> <small>HABITACIONES</small><p>Amplio cuarto principal y cuarto de visitas.</p></div>
                        <div class="item-details"><img src="/images/new-duck.png" style="display: inline-block;height: 30px;margin-right: 10px;"><b>2</b> <small>BA&Ntilde;OS</small><p>Baño principal y baño de visitas enchapados con azulejo cerámico y piso de porcelanato.</p></div>
                        <div class="item-details"><img src="/images/new-park.png" style="display: inline-block;height: 30px;margin-right: 10px;"><b>1</b> <small>PARQUEO</small><p>Por apartamento, con opción de solicitar espacio adicional.</p></div>
                        <div class="item-details"><img src="/images/new-mts.png" style="display: inline-block;height: 30px;margin-right: 10px;"><b>89</b> <small>m²</small><p>De construcción distribuidos en las distintas áreas del apartamento.</p></div> 

                    
                    </div>
            
                </div>
            </div>
        </div>
   
        
        <div class="decoration decoration-line-fade"></div>
        
        
        <div class="heading-style">
            <h2 class="heading-title">Galeria</h2>
            <div class="line">
                <i class="fa fa-image heading-icon font-30 color-blue-dark"></i>
                <div class="decoration"></div>
            </div>
            <p class="bottom-0">
                Como casa para vacacionar, como apartamento para inversión, o como nuevo proyecto de vida y crecimiento profesional el proyecto Costa Linda tiene todo lo que estás buscando.
            </p>
        </div>
        
        
        
        
        <div class="content">
			<ul class="gallery-filter-controls">
				<li class="gallery-filter-active color-highlight gallery-filter-all" data-filter="all">TODAS</li>
				<li data-filter="2">GALERIA</li>
				<li data-filter="1">AMENIDADES</li>
			</ul>
			<div class="gallery gallery-square gallery-filter gallery-filter-three bottom-0">


				<a href="/proyecto/data7/images/2.jpg" class="show-gallery filtr-item" title="Amenidades Costa Linda" data-category="1">
					<img src="/proyecto/data7/images/2.jpg" alt="Amenidades Costa Linda">
					<span>Amenidades Costa Linda</span> 
				</a>
				<a href="/proyecto/data8/images/1.jpg" class="show-gallery filtr-item" title="Galeria Costa Linda" data-category="2">
					<img src="/proyecto/data8/images/1.jpg" alt="Galeria Costa Linda">
					<span>Galeria Costa Linda</span>
				</a>
				<a href="/proyecto/data8/images/2.jpg" class="show-gallery filtr-item" title="Galeria Costa Linda" data-category="2">
					<img src="/proyecto/data8/images/2.jpg" alt="Galeria Costa Linda">
					<span>Galeria Costa Linda</span>
				</a>
				<a href="/proyecto/data8/images/3.jpg" class="show-gallery filtr-item" title="Galeria Costa Linda" data-category="2">
					<img src="/proyecto/data8/images/3.jpg" alt="Galeria Costa Linda">
					<span>Galeria Costa Linda</span>
				</a>
				<a href="/proyecto/data8/images/4.jpg" class="show-gallery filtr-item" title="Galeria Costa Linda" data-category="2">
					<img src="/proyecto/data8/images/4.jpg" alt="Galeria Costa Linda">
					<span>Galeria Costa Linda</span>
				</a>
				<a href="/proyecto/data7/images/3.jpg" class="show-gallery filtr-item" title="Amenidades Costa Linda7" data-category="1">
					<img src="/proyecto/data7/images/3.jpg" alt="Amenidades Costa Linda">
					<span>Amenidades Costa Linda</span>
				</a>
				<a href="/proyecto/data7/images/4.jpg" class="show-gallery filtr-item" title="Amenidades Costa Linda" data-category="1">
					<img src="/proyecto/data7/images/4.jpg" alt="Amenidades Costa Linda">
					<span>Amenidades Costa Linda</span>
				</a>
				<a href="/proyecto/data8/images/5.jpg" class="show-gallery filtr-item" title="Galeria Costa Linda" data-category="2">
					<img src="/proyecto/data8/images/5.jpg" alt="Galeria Costa Linda">
					<span>Galeria Costa Linda</span>
				</a>
				<a href="/proyecto/data7/images/5.jpg" class="show-gallery filtr-item" title="Amenidades Costa Linda" data-category="1">
					<img src="/proyecto/data7/images/5.jpg" alt="Amenidades Costa Linda">
					<span>Amenidades Costa Linda</span>
				</a>
				<a href="/proyecto/data7/images/6.jpg" class="show-gallery filtr-item" title="Amenidades Costa Linda" data-category="1">
					<img src="/proyecto/data7/images/6.jpg" alt="Amenidades Costa Linda">
					<span>Amenidades Costa Linda</span>
				</a>
				<a href="/proyecto/data8/images/6.jpg" class="show-gallery filtr-item" title="Galeria Costa Linda" data-category="2">
					<img src="/proyecto/data8/images/6.jpg" alt="Galeria Costa Linda">
					<span>Galeria Costa Linda</span>
				</a>
				<a href="/proyecto/data7/images/7.jpg" class="show-gallery filtr-item" title="Amenidades Costa Linda" data-category="1">
					<img src="/proyecto/data7/images/7.jpg" alt="Amenidades Costa Linda">
					<span>Amenidades Costa Linda</span>
				</a>
				<a href="/proyecto/data8/images/7.jpg" class="show-gallery filtr-item" title="Galeria Costa Linda" data-category="2">
					<img src="/proyecto/data8/images/7.jpg" alt="Galeria Costa Linda">
					<span>Galeria Costa Linda</span>
				</a>
				<a href="/proyecto/data8/images/8.jpg" class="show-gallery filtr-item" title="Galeria Costa Linda" data-category="2">
					<img src="/proyecto/data8/images/8.jpg" alt="Galeria Costa Linda">
					<span>Galeria Costa Linda</span>
				</a>
				<a href="/proyecto/data8/images/9.jpg" class="show-gallery filtr-item" title="Galeria Costa Linda" data-category="2">
					<img src="/proyecto/data8/images/9.jpg" alt="Galeria Costa Linda">
					<span>Galeria Costa Linda</span>
				</a>
				<a href="/proyecto/data7/images/8.jpg" class="show-gallery filtr-item" title="Amenidades Costa Linda" data-category="1">
					<img src="/proyecto/data7/images/8.jpg" alt="Amenidades Costa Linda">
					<span>Amenidades Costa Linda</span>
				</a>
				<a href="/proyecto/data8/images/10.jpg" class="show-gallery filtr-item" title="Galeria Costa Linda" data-category="2">
					<img src="/proyecto/data8/images/10.jpg" alt="Galeria Costa Linda">
					<span>Galeria Costa Linda</span>
				</a>
				<a href="/proyecto/data8/images/11.jpg" class="show-gallery filtr-item" title="Galeria Costa Linda" data-category="2">
					<img src="/proyecto/data8/images/11.jpg" alt="Galeria Costa Linda">
					<span>Galeria Costa Linda</span>
				</a>
			</div>
		</div>
        
        
        
         <div class="decoration decoration-line-fade"></div>
        
        
        <div class="content">
		<h4 class="bolder" style="text-align: center;">FINANCIAMIENTO</h4>
			<p style="text-align: center;">
				Mira nustro video.
			</p>
			<div class="responsive-video">
				<video class="video" id="myVideo" loop muted data-autoplay controls poster="/images/video.png">
					<source src="/video/concasa_video.mp4" type="video/mp4">
					<source src="/video/concasa_video.webm" type="video/webm">
				</video>
			</div>
		</div>
        
        <?php include $_SERVER['DOCUMENT_ROOT'].'/testimonials-mobile.php'; ?>
       
        <?php include $_SERVER['DOCUMENT_ROOT'].'/social-media-fotter-mobile.php'; ?>

    </div>

    <?php include $_SERVER['DOCUMENT_ROOT'].'/fotter-mobile-costa.php'; ?>

</div>

<script type="text/javascript" src="/scripts/jquery.js"></script>
<script type="text/javascript" src="/scripts/plugins.js"></script>
<script type="text/javascript" src="/scripts/customs.js"></script>
<script type="text/javascript" src="/script/script.mobile.js"></script>
<script src="//assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>

<div data-menu-height="620" id="notification-calc" class="menu menu-box menu-bottom bg-transparent">
    <div class="content content-round content-margins bg-white">
        <h1 class="center-text bolder top-20">FINANCIAMIENTO<small class="spansubtitle">Calculadora de Coutas</small></h1>
        <div class="content bottom-20" id="body360">
<form method="post" name="rmcp_form" id="rmcp-form-1" class="rmcp-form rmcp-form-responsive rmcp-form-light"><div id="form-calc-bg"> <div class="form-group row"> <div class="col-12 inputGroupContainer rmcp-input"> <div class="input-group"><span class="input-group-addon"><span class="p-icon-home"></span></span> <input type="text" name="rmcp_input[1][0]" required="true" id="rmcp_input_1_0" class="rmcp-input-text form-control" placeholder="Valor del Apartamento" value=""> </div><span class="rmcp-error"></span> </div></div><div class="form-group row"> <div class="col-12 inputGroupContainer rmcp-input"> <div class="input-group"><span class="input-group-addon"><span class="p-icon-money"></span></span> <input type="text" name="rmcp_input[1][1]" required="true" id="rmcp_input_1_1" class="rmcp-input-text form-control" placeholder="Pago Inicial" value=""> </div><span class="rmcp-error"></span> </div></div><div class="form-group row"> <div class="col-12 inputGroupContainer rmcp-input"> <div class="input-group"><span class="input-group-addon"><span class="p-icon-porcentage"></span></span> <select name="rmcp_input[1][2]" id="rmcp_input_1_2" class="rmcp-input-select form-control select"><option value="8.90">8.90% - $ Banco Nacional</option> <option value="7.25">7.25% - $ BAC San José</option> <option value="7.95">7.95% - $ BAC San José</option> <option value="7.25">7.25% - $ Scotiabank</option> <option value="7.25">7.25% - $ Davivienda</option> </select> </div><span class="rmcp-error"></span> </div></div><div class="form-group row"> <div class="col-12 inputGroupContainer rmcp-input"> <div class="input-group"><span class="input-group-addon"><span class="p-icon-time"></span></span> <input type="text" name="rmcp_input[1][3]" required="true" id="rmcp_input_1_3" class="rmcp-input-text form-control" placeholder="Plaza del Crédito" value=""> </div><span class="rmcp-error"></span> </div></div></div><br style="clear:both"> <div id="spa-btn-calc3" class="rmcp-input"> <button type="submit" name="rmcp_input[1][4]" id="rmcp_input_1_4" class="button button-round button-white button-s uppercase ultrabold button-center item-couta">RE - CALCULAR</button> </div><div class="rmcp-results rmcp-results-5"></div><input type="hidden" name="rmcp_ref" value="1"> </form>
</div>
    </div>
    <div class="content content-margins top-20">
        <a href="#" class="close-menu button-rounded button button-red button-sm button-full bottom-20 uppercase ultrabold center-text">CLOSE</a>
    </div>
</div>


</body>
</html>
