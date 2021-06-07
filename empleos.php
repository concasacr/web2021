<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

<title>CONCASA | EMPLEOS </title>

<script type="text/javascript">
<?php if ($_GET['page']!='view'){ ?>
     alert('Aplicar para empleos');
	 window.location.replace("https://www.concasa.com/empleos?page=view");
<?php } ?>
</script>

<meta name="author" content="CONCASA desarrolladora inmobiliaria." />
<meta name="description" content="Empleos, Trabajos, Venta de casas, condominios y apartamentos San Rafael de Alajuela - Costa Rica, Venezuela y Panamá."/>
<meta property="og:description" content="Concasa | Unidades disponibles" />
<meta name="keywords"  content="Casas, Condominio, Apartamento, Alajuela, Venta de casas, Terrazas del Norte, Condominio 6-26, Condominio 9-10, Costa Lind, Proyectos" />


<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="stylesheet" type="text/css" href="fonts/css/all.min.css">
<link rel="stylesheet" type="text/css" href="styles/framework.css">

<style>
	
.contactField {
    border: solid 1px rgba(0,0,0,0.1) !important;
}
.contactFieldtextarea {
    border: solid 1px rgba(0,0,0,0.1);
    min-width: 100%;
    display: block;
    box-sizing: border-box;
    min-height: 60px;
    margin: 20px 0px;
}
.radio {
    display: inline-block;
    width: 100%;
    margin: 10px 0px;
    position: relative;
}
.radio input {
    float: left;
    display: block;
    width: 25px;
    height: 25px;    
    border-radius: 50% !important;
}
.radio label {
   float: left;
    display: block;
    width: 30px;
    text-align: center;
}
.contactSubmitButton {
    color: #FFFFFF;
    height: 45px;
    line-height: 42px;
    text-align: center;
    font-size: 13px;
    display: inline-block;
    margin: 0px 10px 10px 0px;
    padding: 0px 20px 0px 20px;
    background-color: #8CC152;
}
</style>
 
</head>
<body>

	<?php include $_SERVER['DOCUMENT_ROOT'].'/header-mobile.php'; ?>
	
	
		<div class="page-content header-clear-small">
			
			
		<div class="content">
			<h6 class="ultrabold center-text top-30  huge-text">EMPLEOS</h6>
			<h5 class="uppercase small-text center-text color-blue-dark regularbold bottom-30 top-30">Estamos creciendo en nuestra misión de hacer de la compra de vivienda una experiencia excepcional, por eso, buscamos personas que quieran ponerse la camiseta en nuestro equipo de ventas y asesoría inmobiliaria y ayudarnos a seguir haciendo un trabajo increíble</h5>
			<h5 class="uppercase small-text center-text color-blue-dark regularbold bottom-30">Por favor, completá el formulario</h5>
			<div class="decoration"></div>

			<form accept-charset="UTF-8" class="inf_form_infusionsoft" id="inf_form_infusionsoft" name="inf_form_infusionsoft" method="POST">
         <input name="LeadSourceId" type="hidden" value="722" />
         <input name="Country" type="hidden" value="Costa Rica" /><!-- Costa Rica , Panama --> 
         
         <input name="IdTag" type="hidden" value="344" /> <!-- Id Tag IF -->

         
         
         <div id="form-final">
         <div class="form-group form-group-lg formFieldWrap">
            <div class="row">
               <div class="col-sm"> <input type="text" id="inf_field_FirstName" name="inf_field_FirstName" placeholder="* Nombre" class="form-control contactField requiredField"  required="required"/></div>
               <div class="col-sm"> <input type="text" id="inf_field_LastName" name="inf_field_LastName" placeholder="* Apellido" class="form-control contactField requiredField"  required="required"/></div>
            </div>
         </div>  



         <div class="form-group form-group-lg formFieldWrap">
            <div class="row">
               <div class="col-md-12"> <input type="email" id="inf_field_Email" name="inf_field_Email" placeholder="* Email" class="form-control contactField requiredField"  required="required"/></div>
            </div>
         </div>


         <div class="form-group form-group-lg formFieldWrap">
            <div class="row">
               <div class="col-sm"> <input type="text" id="inf_field_Phone1" name="inf_field_Phone1" value="" placeholder="* Tel&eacute;fono" class="form-control contactField requiredField"  required="required"/></div>
               <div class="col-sm"> <input type="file" accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint, application/pdf, image/*" id="ResumeUser" name="ResumeUser" placeholder="Curriculum" class="form-control" required="required" style="color: transparent;font-size: 12px;"/>
	               <p class="help-block">* Word, Excel, Powerpoint, Pdf, Image</p></div>
            </div>
         </div>


         <div class="form-group form-group-lg formFieldWrap">
            <div class="row">
               <div class="col-md-12"> <textarea class="form-control contactFieldtextarea requiredField" rows="3" id="Address2Street1" name="Address2Street1" placeholder="* Direcci&oacute;n" title="Direcci&oacute;n" required="required"></textarea> </div>
            </div>
         </div>

		 

         <div class="form-group form-group-lg formFieldWrap">
            <div class="row">
               <div class="col-md-12">
	               <input type="text" id="inf_field_Linkedin" name="inf_field_Linkedin" placeholder="Perfil Linkedin" class="form-control contactField requiredField"  required=""/>
               </div>
            </div>
         </div>
         
         
        <div class="form-group form-group-lg formFieldWrap">
            <div class="row">
               <div class="col-md-12">
	               
	               <div class="radio">
						<span style="margin-right: 20px;font-family: sans-serif !important;font-weight: lighter !important;font-size: 13px !important;display: block;width: 100%;">* ¿Alguien te refirió?</span>	 
						<input type="radio" name="refirio" id="si" value="Si">
						<label for="si">Sí</label>
				
						<input type="radio" name="refirio" id="no" value="No" checked>
						<label for="no">No</label>
				
					</div>
			               
	               <input type="text" id="inf_field_Referido" name="inf_field_Referido" placeholder="Nombre de la persona que te refirió" class="form-control contactField requiredField"  required="" style="display: none;"/>
               </div>
            </div>
         </div>
         
         
        <div class="form-group form-group-lg formFieldWrap">
            <div class="row">
               <div class="col-md-12">
	               <div class="radio">
						<span style="margin-bottom: 6px;display: block;font-family: sans-serif !important;font-weight: lighter !important;font-size: 13px !important;">¿A cuál departamento querés aplicar? 
</span>	 					<select id="inf_field_Departamento" name="inf_field_Departamento" class="form-control contactField requiredField" required="required">
							<option value="" selected="selected">Selecccione</option>
							<option value="Asesor Inmobiliario">Asesoría inmobiliaria (ventas)</option>
							<option value="Asesor Financiero">Asesoría financiera</option>
							<option value="Mercadeo">Mercadeo</option>
							<option value="Dpto legal">Dpto. legal</option>
							<option value="Contabilidad">Contabilidad</option>
							<option value="Ingenieria">Ingeniería</option>
							<option value="Proyecto">Proyecto</option>
							<option value="Mantenimiento">Mantenimiento</option>
							<option value="Otros">Otro</option>
						</select>
				
					</div>
			       <br><input type="text" id="inf_field_Departamento_Otros" name="inf_field_Departamento_Otros" placeholder="Otros" class="form-control contactField requiredField"  required="" style="display: none;"/>        
               </div>
            </div>
         </div> 
         
         
         <div class="form-group form-group-lg formFieldWrap">
            <div class="row">
               <div class="col-md-12">
	               <div class="radio">
						<span style="margin-bottom: 6px;display: block;font-family: sans-serif !important;font-weight: lighter !important;font-size: 13px !important;">¿Cómo te enteraste sobre CONCASA?</span>	 
						<!--input type="text" /-->
						<textarea rows="3" id="inf_field_xq_aplicando" name="inf_field_xq_aplicando" placeholder="..." class="form-control contactFieldtextarea requiredField"  required=""></textarea>
					</div>
               </div>
            </div>
         </div> 
         
         
         <div class="form-group form-group-lg formFieldWrap">
            <div class="row">
               <div class="col-md-12">
	               <div class="radio">
						<span style="margin-bottom: 6px;display: block;font-family: sans-serif !important;font-weight: lighter !important;font-size: 13px !important;">¿Por qué estás aplicando en CONCASA?</span>	 
						<textarea rows="3" id="Valuejob" name="Valuejob" placeholder="..." class="form-control contactFieldtextarea requiredField"  required=""></textarea>
					</div>
               </div>
            </div>
         </div>
         
         
         <div class="form-group form-group-lg formFieldWrap">
            <div class="row">
               <div class="col-md-12">
	               <div class="radio">
						<span style="margin-bottom: 6px;display: block;font-family: sans-serif !important;font-weight: lighter !important;font-size: 13px !important;">¿Por qué deberíamos contratarte?</span>	 
						<textarea rows="3" id="Servicejob" name="Servicejob" placeholder="..." class="form-control contactFieldtextarea requiredField"  required=""></textarea>
					</div>
               </div>
            </div>
         </div>
         
         
         <div class="form-group form-group-lg formFieldWrap">
            <div class="row">
               <div class="col-md-12">
	               <div class="radio">
						<span style="margin-bottom: 6px;display: block;font-family: sans-serif !important;font-weight: lighter !important;font-size: 13px !important;line-height: 16px;">¿Algunas vez has experimentado un servicio al cliente excepcional? Contanos sobre eso</span>	 
						<textarea  rows="3" id="Likejob" name="Likejob" placeholder="..." class="form-control contactFieldtextarea requiredField"  required=""></textarea>
					</div>
               </div>
            </div>
         </div>
         
         <div class="form-group form-group-lg formFieldWrap">
            <div class="row">
               <div class="col-md-12">
	               <div class="radio">
						<span style="margin-bottom: 6px;display: block;font-family: sans-serif !important;font-weight: lighter !important;font-size: 13px !important;line-height: 16px;">¿Tenés alguna pregunta para nosotros?</span>	 
						<textarea  rows="3" id="Questionjob" name="Questionjob" placeholder="..." class="form-control contactFieldtextarea requiredField"  required=""></textarea>
					</div>
               </div>
            </div>
         </div>
         

            <div class="form-group form-group-lg formFieldWrap">
               <div class="row">
                  <div class="col-md-12 text-center"> 
                     <button type="button" class="btn-concasa btn-lg contactSubmitButton" id="4tvsdve57ff143bf2717b91">Enviar</button> 
                  </div>
               </div>
            </div>
            <br>
		</div> <!-- Form Final -->
         
         
      </form>
      
      
		</div>
		
		
			
        
        <div class="decoration decoration-margins"></div>
       
        
        <?php include $_SERVER['DOCUMENT_ROOT'].'/testimonials-mobile.php'; ?>

        <?php include $_SERVER['DOCUMENT_ROOT'].'/social-media-fotter-mobile.php'; ?>

    </div>

    <?php include $_SERVER['DOCUMENT_ROOT'].'/fotter-mobile.php'; ?>

</div>

<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/plugins.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
<script type="text/javascript">
$("input[type=radio]").click(function () {
    if($('#si').prop("checked")) { $("#inf_field_Referido").show( "slow" ); }else{ $("#inf_field_Referido").hide( "slow" ); }
});
	
$('#inf_field_Departamento').change(function() {
	var name = $( "#inf_field_Departamento option:selected" ).val();
	if(name=='Otros'){
		$("#inf_field_Departamento_Otros").show( "slow" );
	}else{
		$("#inf_field_Departamento_Otros").hide( "slow" );
	}
});	
    
    $(function () {
	     $('input[type="file"]').change(function () {
	          if ($(this).val() != "") {
	                 $(this).css('color', '#333');
	          }else{
	                 $(this).css('color', 'transparent');
	          }
	     });
	});
	
	
   
   $('.inf_form_infusionsoft').on('click', '.contactSubmitButton',function(event) {
	   event.preventDefault();
	   
	    var name 	 = $( "#inf_field_FirstName" ).val();
	    var lastname = $( "#inf_field_LastName" ).val();
	    var email 	 = $( "#inf_field_Email" ).val();
	    var phone 	 = $( "#inf_field_Phone1" ).val();
	    
	    
	    if ( name != '' && lastname != '' && email != '' && phone != '' ){
		    
		    $('.contactSubmitButton').prop( "disabled" , true );
	        var datastring = $("#inf_form_infusionsoft").serialize(); 
	        var form = $('#inf_form_infusionsoft')[0];
	                   
	        $.ajax({
	            url: "./empleo/ResumeSubmit.php",
	            type: "POST",
	            data: new FormData(form),
	            processData: false,
	            contentType: false,
	            cache: false,
	            beforeSend: function() {    
	              isProcessing = true;
	              $( ".resume-content" ).append( '<div id="whating">Enviando Informaci&oacute;n ...<br>Un momento por favor</div>' );
	           },
	            success: function( response )
	            {
				  $( 'div#whating' ).remove();
				  $( ".resume-content" ).append( '<div id="whatingthanks">Gracias ...</div>' );
				  	setTimeout(function(){
					  $('div#whatingthanks').remove();
					}, 5000);
	              $('.contactSubmitButton').prop( "disabled" , false );
	              $( '.inf_form_infusionsoft' )[0].reset();
	              $( '.inf_form_infusionsoft' ).trigger("reset");             
	            }
	        });
		    
		    
	    }else{
		    
		    $( ".resume-content" ).append( '<div id="whatingthanksred">Error no podemos enviar<br> el formulario vacio <br><span>campos requeridos ...</span></div>' );
		  	setTimeout(function(){
			  $('div#whatingthanksred').remove();
			}, 3000);
		    
	    }
	    
       
        //return false;
       
    });
    
</script>
</body>
</html>
