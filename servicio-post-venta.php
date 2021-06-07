<!DOCTYPE HTML>
<?php include $_SERVER['DOCUMENT_ROOT'].'/config/conf.php'; ?>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>POST-VENTA | CONCASA</title>
		<meta name="author" content="CONCASA desarrolladora inmobiliaria." />
		<meta name="description" content="Venta de apartamentos y casas, San Rafael Alajuela, Curridabat, Jáco - Costa Rica."/>
		<meta property="og:description" content="Tramitar una garantía, Condominios en macro condominio concasa, unidades disponibles que van desde los $<?=number_format(getPrecioProperty('Bosque','1'), 0, '.', ',');?> USD*" />
		<meta name="keywords"  content="Condominio, Apartamento, Condominios, Proyectos en torre, Amenidades, San Rafael, Alajuela, Curridabat, Jáco" />
		<style>.portfolio-overlay a{position: absolute; top: 42% !important; left: 25% !important; background-color: transparent !important; width: 200px !important; height: 50px !important; margin: 0 auto !important; font-size: 18px; line-height: 24px !important; text-align: center; color: #fff !important; border-radius: unset !important; -webkit-backface-visibility: hidden;}
		
		
.form-group-lg {
    margin-bottom: 0px !important;
    width: 100% !important;
    display: block !important;
}
.form-group-lg .row {
	margin-bottom: 0px !important;
}	
div#show-options {
    margin: 20px 0;
    width: 100%;
}
div#show-options-two {
    margin: 20px 0;
    width: 100%;
}
.form-group label {
	display: inline-block;
    float: inherit;
    margin-right: 0 !important;
    font-size: 14px !important;
    font-weight: bolder !important;
    line-height: 21px !important;
}
input[type=checkbox], input[type=radio] {
    display: inline-block !important;
    float: left;
    width: auto;
}
.form-group textarea {
    min-height: 50px !important;
}
.form-control {
    font-size: 17px !important;
    font-weight: bolder !important;
}
.form-widget .row {
    width: 100%;
    margin: 0 a !important;
}
div#whating strong {
    font-weight: bold;
}
	
		</style>
<?php 
	include './header_section.php'; 
	include './nav-top-int.php'; 
?>

	


<section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-color: #ff5733; background-image: url('n-images/post-venta.jpg'); background-size: contain; background-position: center bottom;" data-bottom-top="background-position:0px 550px;" data-top-bottom="background-position:0px -500px;">
	<!--<div id="homepageint"></div>-->
	<div class="container clearfix">
		<h1>POST-VENTA</h1>
		<span>Trámite de garantía y reportes</span>
	</div>

</section><!-- #page-title end -->


<!-- Content
		============================================= -->
<!--
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

		
			<h3>Algunas de sus preguntas:</h3>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, velit, eum, delectus aliquid dolore numquam dolorem assumenda nisi nemo eveniet et illo tempore voluptatem cum in repudiandae pariatur. Architecto, exercitationem perspiciatis nam quod tenetur alias necessitatibus quibusdam eum accusamus a.</p>

					<div class="divider"><i class="icon-circle"></i></div>

					<div class="col_half nobottommargin">

						<h4>Marketplace <small>(4)</small></h4>

						<div class="accordion accordion-border clearfix" data-state="closed">

							<div class="acctitle"><i class="acc-closed icon-question-sign"></i><i class="acc-open icon-question-sign"></i>How do I become an author?</div>
							<div class="acc_content clearfix">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>

							<div class="acctitle"><i class="acc-closed icon-comments-alt"></i><i class="acc-open icon-comments-alt"></i>Helpful Resources for Authors</div>
							<div class="acc_content clearfix">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit veniam odio voluptatum. Enim at asperiores quod velit minima officia accusamus cumque eligendi consequuntur fuga? Maiores, quasi, voluptates, exercitationem fuga voluptatibus a repudiandae expedita omnis molestiae alias repellat perferendis dolores dolor.</div>

							<div class="acctitle"><i class="acc-closed icon-lock3"></i><i class="acc-open icon-lock3"></i>How much money can I make?</div>
							<div class="acc_content clearfix">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, fugiat iste nisi tempore nesciunt nemo fuga? Nesciunt, delectus laboriosam nisi repudiandae nam fuga saepe animi recusandae. Asperiores, provident, esse, doloremque, adipisci eaque alias dolore molestias assumenda quasi saepe nisi ab illo ex nesciunt nobis laboriosam iusto quia nulla ad voluptatibus iste beatae voluptas corrupti facilis accusamus recusandae sequi debitis reprehenderit quibusdam. Facilis eligendi a exercitationem nisi et placeat excepturi velit!</div>

						</div>

						<h4 class="topmargin">Authors <small>(5)</small></h4>

						<div class="accordion accordion-border nobottommargin clearfix" data-state="closed">

							<div class="acctitle"><i class="acc-closed icon-download-alt"></i><i class="acc-open icon-download-alt"></i>Can I offer my items for free on a promotional basis?</div>
							<div class="acc_content clearfix">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>

							<div class="acctitle"><i class="acc-closed icon-ok"></i><i class="acc-open icon-ok"></i>An Introduction to the Marketplaces for Authors</div>
							<div class="acc_content clearfix">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit veniam odio voluptatum. Enim at asperiores quod velit minima officia accusamus cumque eligendi consequuntur fuga? Maiores, quasi, voluptates, exercitationem fuga voluptatibus a repudiandae expedita omnis molestiae alias repellat perferendis dolores dolor.</div>

							<div class="acctitle"><i class="acc-closed icon-credit"></i><i class="acc-open icon-credit"></i>How do I pay for items on the Marketplaces?</div>
							<div class="acc_content clearfix">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, fugiat iste nisi tempore nesciunt nemo fuga? Nesciunt, delectus laboriosam nisi repudiandae nam fuga saepe animi recusandae. Asperiores, provident, esse, doloremque, adipisci eaque alias dolore molestias assumenda quasi saepe nisi ab illo ex nesciunt nobis laboriosam iusto quia nulla ad voluptatibus iste beatae voluptas corrupti facilis accusamus recusandae sequi debitis reprehenderit quibusdam. Facilis eligendi a exercitationem nisi et placeat excepturi velit!</div>

						</div>

					</div>

					<div class="col_half nobottommargin col_last">

						<h4>Item Discussion <small>(9)</small></h4>

						<div class="accordion accordion-border clearfix" data-state="closed">

							<div class="acctitle"><i class="acc-closed icon-picture"></i><i class="acc-open icon-picture"></i>What Images, Videos, Code Can I Use in my Items?</div>
							<div class="acc_content clearfix">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>

							<div class="acctitle"><i class="acc-closed icon-file3"></i><i class="acc-open icon-file3"></i>Can I use trademarked names in my items?</div>
							<div class="acc_content clearfix">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit veniam odio voluptatum. Enim at asperiores quod velit minima officia accusamus cumque eligendi consequuntur fuga? Maiores, quasi, voluptates, exercitationem fuga voluptatibus a repudiandae expedita omnis molestiae alias repellat perferendis dolores dolor.</div>

							<div class="acctitle"><i class="acc-closed icon-phone3"></i><i class="acc-open icon-phone3"></i>How can I get support for an item?</div>
							<div class="acc_content clearfix">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, fugiat iste nisi tempore nesciunt nemo fuga? Nesciunt, delectus laboriosam nisi repudiandae nam fuga saepe animi recusandae. Asperiores, provident, esse, doloremque, adipisci eaque alias dolore molestias assumenda quasi saepe nisi ab illo ex nesciunt nobis laboriosam iusto quia nulla ad voluptatibus iste beatae voluptas corrupti facilis accusamus recusandae sequi debitis reprehenderit quibusdam. Facilis eligendi a exercitationem nisi et placeat excepturi velit!</div>

						</div>

						<h4 class="topmargin">Affiliates <small>(3)</small></h4>

						<div class="accordion accordion-border nobottommargin clearfix" data-state="closed">

							<div class="acctitle"><i class="acc-closed icon-money"></i><i class="acc-open icon-money"></i>How does the Tuts+ Premium affiliate program work?</div>
							<div class="acc_content clearfix">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>

							<div class="acctitle"><i class="acc-closed icon-bar-chart"></i><i class="acc-open icon-bar-chart"></i>Tips for Increasing Your Referral Income</div>
							<div class="acc_content clearfix">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit veniam odio voluptatum. Enim at asperiores quod velit minima officia accusamus cumque eligendi consequuntur fuga? Maiores, quasi, voluptates, exercitationem fuga voluptatibus a repudiandae expedita omnis molestiae alias repellat perferendis dolores dolor.</div>

						</div>

					</div>	
		
		

		</div>

	</div>

</section> #content end -->


<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

			<div class="accordion accordion-bg clearfix" data-state="closed">
	
				<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Campo Real</div>
				<div class="acc_content clearfix"><?php include 'form-campo-real.php'; ?></div>
				
				
				<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Monte Alto</div>
				<div class="acc_content clearfix"><?php include 'form-monte-alto.php'; ?></div>
				
	
				<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Terrazas del Norte</div>
				<div class="acc_content clearfix"><?php include 'form-terrazas-del-norte.php'; ?></div>
	
				<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Otros Proyectos</div>
				<div class="acc_content clearfix"><?php include 'form-otros-proyectos.php'; ?></div>
				
				
			</div>	
		
		

		</div>

	</div>

</section><!-- #content end -->


<!-- Star Includes for all themes -->
<?php include 'testimonials.php'; ?>

<?php include 'all-projects-int.php'; ?>

<?php include 'footer-int.php'; ?>
<!-- End Includes for all themes  AIzaSyBPJdxdwbM5qdyCAE5l0jjRg5PlsKrqrBA -->

<script type = "text/javascript"> 
$(document).ready(function() {
    $('.form_group_actions')[0].reset();
    $('.form_group_actions').trigger("reset");
    $('div#whating').remove();
});

$(".change").change(function() {
    var project = $(this).find(":selected").val();
    var data_proyect = $(this).data("proyect");
    $("#show-options").empty().fadeIn("slow");
    
    if (data_proyect == 'Campo-Real') {
        $.ajax({
            type: "POST",
            url: "project.php",
            data: {
                Macro: data_proyect,
                Proyecto: project
            },
            success: function(response) {
                $('#show-options').html(response).fadeIn("slow");
            }
        });
    } else if(data_proyect == 'monte_alto') {
	    
	    
	$.ajax({
            type: "POST",
            url: "project.php",
            data: {
                Macro: data_proyect,
                Proyecto: project
            },
            success: function(response) {
                $('#show-options').html(response).fadeIn("slow");
            }
        });
	
	
	} else {
        $.ajax({
            type: "POST",
            url: "project.php",
            data: {
                Macro: data_proyect,
                Proyecto: project
            },
            success: function(response) {
                $('#show-options-two').html(response).fadeIn("slow");
            }
        });
    }
});

//$(document).on('submit', '#myFormZendesk', function(event) {
$( "#myFormZendesk" ).submit(function( event ) {
    event.preventDefault();
    $('.enviarinfo').prop("disabled", true);
    $.ajax({
        url: "submitdata_zendesk.php",
        type: "POST",
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        dataType: 'json',
        beforeSend: function() {
            isProcessing = true;
            $("#contentalerttextnotification").append('<div id="whating" class="alert alert-warning text-center"><strong>Procesando reporte ...</strong>Un momento por favor</div>');
        },
        success: function(response) {
	        
	        console.log(response.mensaje);
	        
	        $('div#whating').remove();
	        $('.enviarinfo').prop("disabled", false);
	            
	        if (!response.success) {
                
                
                $("#contentalerttextnotification").fadeOut().empty();
				$("#contentalerttextnotification").append('<div id="whating" class="alert alert-danger text-center"><strong>'+response.mensaje+'</strong></div>');
	            setTimeout(function() {  $("#contentalerttextnotification").empty(); }, 5000);
                
                
            } else {
               
                
	            $('.form_group_actions')[0].reset();
	            $('.form_group_actions').trigger("reset");
	            $('.modal').removeClass('show');
	            $('.modal-backdrop').remove();
	            
	            $("#contentalerttextnotification").fadeOut().empty();
				$("#contentalerttextnotification").append('<div id="whating" class="alert alert-success text-center"><strong>'+response.mensaje+'</strong></div>');
	            setTimeout(function() {  $("#contentalerttextnotification").empty(); }, 5000);
               
            }
            
			
        }, error: function(xhr) {  
	        
	            $("#contentalerttextnotification").fadeOut().empty();
				$("#contentalerttextnotification").append('<div id="whating" class="alert alert-success text-center"><strong>'+xhr.mensaje+'</strong></div>');
	            setTimeout(function() {  $("#contentalerttextnotification").empty(); }, 5000);
	    }
    });
    return false;
}); 

$( "#myFormZendeskB" ).submit(function( event ) {
    event.preventDefault();
    $('.enviarinfo').prop("disabled", true);
    $.ajax({
        url: "submitdata_zendesk.php",
        type: "POST",
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        dataType: 'json',
        beforeSend: function() {
            isProcessing = true;
            $("#contentalerttextnotificationB").append('<div id="whating" class="alert alert-warning text-center"><strong>Procesando reporte ...</strong>Un momento por favor</div>');
        },
        success: function(response) {
	       // alert('Reporte generado en forma exitosa gracias!');
            $('div#whating').remove();
            $('.enviarinfo').prop("disabled", false);
            
            if (!response.success) {
	            
	            $("#contentalerttextnotificationB").fadeOut().empty();
				$("#contentalerttextnotificationB").append('<div id="whating" class="alert alert-danger text-center"><strong>'+response.mensaje+'</strong></div>');
	            setTimeout(function() {  $("#contentalerttextnotificationB").empty(); }, 5000);
	            
	        } else {
		        
		        $('.form_group_actions')[0].reset();
	            $('.form_group_actions').trigger("reset");
	            $('.modal').removeClass('show');
	            $('.modal-backdrop').remove();
	            
	            $("#contentalerttextnotificationB").fadeOut().empty();
				$("#contentalerttextnotificationB").append('<div id="whating" class="alert alert-success text-center"><strong>'+response.mensaje+'</strong></div>');
	            setTimeout(function() {  $("#contentalerttextnotificationB").empty(); }, 5000);
		          
		    }   
	            
            
			
        }, error: function(xhr) { 
	        
	        $("#contentalerttextnotificationB").fadeOut().empty();
			$("#contentalerttextnotificationB").append('<div id="whating" class="alert alert-success text-center"><strong>'+xhr.mensaje+'</strong></div>');
            setTimeout(function() {  $("#contentalerttextnotificationB").empty(); }, 5000);
	        
        }
    });
    return false;
}); 

$( "#myFormZendeskC" ).submit(function( event ) {
    event.preventDefault();
    $('.enviarinfo').prop("disabled", true);
    $.ajax({
        url: "submitdata_zendesk.php",
        type: "POST",
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        dataType: 'json',
        beforeSend: function() {
            isProcessing = true;
            $("#contentalerttextnotificationC").append('<div id="whating" class="alert alert-warning text-center"><strong>Procesando reporte ...</strong>Un momento por favor</div>');
        },
        success: function(response) {
	        //alert('Reporte generado en forma exitosa gracias!');
            $('div#whating').remove();
            $('.enviarinfo').prop("disabled", false);
            
            if (!response.success) {
	            
	            $('.form_group_actions')[0].reset();
	            $('.form_group_actions').trigger("reset");
	            $('.modal').removeClass('show');
	            $('.modal-backdrop').remove();
	            
	            $("#contentalerttextnotificationC").fadeOut().empty();
				$("#contentalerttextnotificationC").append('<div id="whating" class="alert alert-danger text-center"><strong>'+response.mensaje+'</strong></div>');
	            setTimeout(function() {  $("#contentalerttextnotificationC").empty(); }, 5000);
	            
	        }else{
		        
		        $("#contentalerttextnotificationC").fadeOut().empty();
				$("#contentalerttextnotificationC").append('<div id="whating" class="alert alert-success text-center"><strong>'+response.mensaje+'</strong></div>');
	            setTimeout(function() {  $("#contentalerttextnotificationC").empty(); }, 5000);
	            
	        }   
	            
        }, error: function(xhr) { // if error occured
        	$("#contentalerttextnotificationC").fadeOut().empty();
			$("#contentalerttextnotificationC").append('<div id="whating" class="alert alert-success text-center"><strong>'+xhr.mensaje+'</strong></div>');
            setTimeout(function() {  $("#contentalerttextnotificationC").empty(); }, 5000);
    	}
    });
    return false;
}); 


$( "#myFormZendeskD" ).submit(function( event ) {
    event.preventDefault();
    $('.enviarinfo').prop("disabled", true);
    $.ajax({
        url: "submitdata_zendesk.php",
        type: "POST",
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        dataType: 'json',
        beforeSend: function() {
            isProcessing = true;
            $("#contentalerttextnotificationD").append('<div id="whating" class="alert alert-warning text-center"><strong>Procesando reporte ...</strong>Un momento por favor</div>');
        },
        success: function(response) {
	        //alert('Reporte generado en forma exitosa gracias!');
            $('div#whating').remove();
            $('.enviarinfo').prop("disabled", false);
            
            if (!response.success) {
	            
	            $('.form_group_actionsD')[0].reset();
	            $('.form_group_actionsD').trigger("reset");
	            $('.modal').removeClass('show');
	            $('.modal-backdrop').remove();
	            
	            $("#contentalerttextnotificationD").fadeOut().empty();
				$("#contentalerttextnotificationD").append('<div id="whating" class="alert alert-danger text-center"><strong>'+response.mensaje+'</strong></div>');
	            setTimeout(function() {  $("#contentalerttextnotificationD").empty(); }, 5000);
	            
	        }else{
		        
		        $("#contentalerttextnotificationD").fadeOut().empty();
				$("#contentalerttextnotificationD").append('<div id="whating" class="alert alert-success text-center"><strong>'+response.mensaje+'</strong></div>');
	            setTimeout(function() {  $("#contentalerttextnotificationD").empty(); }, 5000);
	            
	        }   
	            
        }, error: function(xhr) { // if error occured
        	$("#contentalerttextnotificationD").fadeOut().empty();
			$("#contentalerttextnotificationD").append('<div id="whating" class="alert alert-success text-center"><strong>'+xhr.mensaje+'</strong></div>');
            setTimeout(function() {  $("#contentalerttextnotificationD").empty(); }, 5000);
    	}
    });
    return false;
});
</script>
