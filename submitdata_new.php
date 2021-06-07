<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$host = "localhost";
$port = "3306";
$user = "concasac_concasa";
$password = "Cross!2#4";
$database ="concasac_multisite";
$table = "tbl_zendesk_date";

$obj_conexion = mysqli_connect($host,$user,$password,$database);

include("./vendor/autoload.php");

use Zendesk\API\HttpClient as ZendeskAPI;

$subdomain = "concasapostventa";
$username  = "kenneth.rodriguez@concasa.com";
$token     = "bT3Z61YcwzpS2z1z3cE4TGKaS6cXYs806v5cNmwA";

$client 		 = new ZendeskAPI($subdomain);
$client->setAuth('basic', ['username' => $username, 'token' => $token]);

$prt_macro       = ( isset($_POST['macro']) ) ? $_POST['macro'] : $_POST['project']; // 'campo_real','costa_linda','terrazas_del_norte','terrazas_del_oeste'; 
$prt_proyecto    = ( isset($_POST['project']) ) ? $_POST['project'] : '';

$prt_name        = ( isset($_POST['customer_name']) ) ? $_POST['customer_name'] : '';
$prt_email       = ( isset($_POST['customer_email']) ) ? $_POST['customer_email'] : ''; 
$prt_phone       = ( isset($_POST['customer_phone']) ) ? $_POST['customer_phone'] : ''; 

$prt_nhome       = ( isset($_POST['tower']) ) ? $_POST['tower'] : '';
$prt_nhome_02    = ( isset($_POST['floor']) ) ? $_POST['floor'] : ''; 
$prt_nhome_03    = ( isset($_POST['apartments']) ) ? $_POST['apartments'] : '';

if( $prt_proyecto == 'terrazas_del_oeste' ){
	$prt_casa_apto   = 'TO-'; 
} else if ( $prt_proyecto == 'costa_linda' ) {
	$prt_casa_apto   = 'CL-'; 
} else {
	$prt_casa_apto   = ''; 
}

$prt_casa_apto_a = ( isset($_POST['number_home_apto']) ) ? $_POST['number_home_apto'] : '';
$prt_casa_apto_new = $prt_casa_apto.''.$prt_casa_apto_a;

$prt_puertas_internas    = ( isset($_POST['puertas_internas']) ) ? $_POST['puertas_internas'] : '';
$prt_ceramica    		 = ( isset($_POST['ceramica']) ) ? $_POST['ceramica'] : '';
$prt_pintura    		 = ( isset($_POST['pintura']) ) ? $_POST['pintura'] : '';
$prt_rodapie    		 = ( isset($_POST['rodapie']) ) ? $_POST['rodapie'] : '';
$prt_mueble_de_cocina    = ( isset($_POST['mueble_de_cocina']) ) ? $_POST['mueble_de_cocina'] : '';
$prt_fontaneria    		 = ( isset($_POST['fontaneria']) ) ? $_POST['fontaneria'] : '';
$prt_electrico    		 = ( isset($_POST['electrico']) ) ? $_POST['electrico'] : '';
$prt_llavines    		 = ( isset($_POST['llavines']) ) ? $_POST['llavines'] : '';
$prt_fisuras    		 = ( isset($_POST['fisuras']) ) ? $_POST['fisuras'] : '';

if( $prt_macro == 'campo_real' and $prt_proyecto == '9-10'){
	$tbl_home_query = $prt_nhome . ' ' . $prt_nhome_02 . '-' . $prt_nhome_03;
 	$var_consulta= "SELECT * FROM `tbl_zendesk_date` WHERE `tbl_macro` = '$prt_macro' AND `tbl_project` = '$prt_proyecto' AND `tbl_home` = '$tbl_home_query'";
 	$var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0){
	     $row = $var_resultado->fetch_array();
		 $dateclose = $row['tbl_date'];
	}else{
		$dateclose = '';
	}
}

if( $prt_macro == 'campo_real' and $prt_proyecto == '6-26'){
	$tbl_home_query = $prt_nhome . ' ' . $prt_nhome_02 . '-' . $prt_nhome_03;
 	$var_consulta= "SELECT * FROM `tbl_zendesk_date` WHERE `tbl_macro` = '$prt_macro' AND `tbl_project` = '$prt_proyecto' AND `tbl_home` = '$tbl_home_query'";
 	$var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0){
	     $row = $var_resultado->fetch_array();
		 $dateclose = $row['tbl_date'];
	}else{
		$dateclose = '';
	}
}

if( $prt_macro == 'campo_real' and $prt_proyecto == 'valle_escondido'){
	if ( $prt_nhome='0' ){
		$ver_si_es = '';
	}else{
		$ver_si_es = $prt_nhome;
	}
	$tbl_home_query = $ver_si_es . '' . $prt_nhome_02 . '' . $prt_nhome_03;
 	$var_consulta= "SELECT * FROM `tbl_zendesk_date` WHERE `tbl_macro` = '$prt_macro' AND `tbl_project` = '$prt_proyecto' AND `tbl_home` = '$tbl_home_query'";
 	$var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0){
	     $row = $var_resultado->fetch_array();
		 $dateclose = $row['tbl_date'];
	}else{
		$dateclose = '';
	}
}

if( $prt_macro == 'campo_real' and $prt_proyecto == 'villas_del_campo'){
	$tbl_home_query = $prt_nhome . ' ' . $prt_nhome_02 . '-' . $prt_nhome_03;
 	$var_consulta= "SELECT * FROM `tbl_zendesk_date` WHERE `tbl_macro` = '$prt_macro' AND `tbl_project` = '$prt_proyecto' AND `tbl_home` = '$tbl_home_query'";
 	$var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0){
	     $row = $var_resultado->fetch_array();
		 $dateclose = $row['tbl_date'];
	}else{
		$dateclose = '';
	}
}

if( $prt_macro == 'campo_real' and $prt_proyecto == 'costa_linda'){
	$tbl_home_query = $prt_nhome . '' . $prt_nhome_02 . '' . $prt_nhome_03;
 	$var_consulta= "SELECT * FROM `tbl_zendesk_date` WHERE `tbl_macro` = '$prt_proyecto' AND `tbl_project` = '$prt_proyecto' AND `tbl_home` = '$prt_casa_apto_a'";
 	$var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0){
	     $row = $var_resultado->fetch_array();
		 $dateclose = $row['tbl_date'];
	}else{
		$dateclose = '';
	}
}

if( $prt_macro == 'campo_real' and $prt_proyecto == 'terrazas_del_oeste'){
	$tbl_home_query = $prt_nhome . '' . $prt_nhome_02 . '' . $prt_nhome_03;
 	$var_consulta= "SELECT * FROM `tbl_zendesk_date` WHERE `tbl_macro` = '$prt_proyecto' AND `tbl_project` = '$prt_proyecto' AND `tbl_home` = '$prt_casa_apto_a'";
 	$var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0){
	     $row = $var_resultado->fetch_array();
		 $dateclose = $row['tbl_date'];
	}else{
		$dateclose = '';
	}
}

if( $prt_macro == 'terrazas_del_norte' and $prt_proyecto == 'terrazas_del_norte'){
	$tbl_home_query = $prt_nhome . '' . $prt_nhome_02 . '' . $prt_nhome_03;
	$consulta_home = substr($prt_nhome_02,3);
 	$var_consulta= "SELECT * FROM `tbl_zendesk_date` WHERE `tbl_macro` = '$prt_macro' AND `tbl_project` = '$prt_proyecto' AND `tbl_home` = '$consulta_home'";
 	$var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0){
	     $row = $var_resultado->fetch_array();
		 $dateclose = $row['tbl_date'];
	}else{
		$dateclose = '';
	}
}

if($prt_casa_apto_new!=''){
	$crate_all = $prt_casa_apto_new;
	$tags_all  = array($prt_macro.','.$prt_casa_apto_new.','.$prt_proyecto.','.$prt_puertas_internas.','.$prt_ceramica.','.$prt_pintura.','.$prt_rodapie.','.$prt_mueble_de_cocina.','.$prt_fontaneria.','.$prt_electrico.','.$prt_llavines.','.$prt_fisuras);
}else{
	$crate_all = $prt_nhome.' '.$prt_nhome_02.' '.$prt_nhome_03;
	$tags_all  = array($prt_macro.','.$prt_nhome.','.$prt_nhome_02.','.$prt_nhome_03.','.$prt_proyecto.','.$prt_puertas_internas.','.$prt_ceramica.','.$prt_pintura.','.$prt_rodapie.','.$prt_mueble_de_cocina.','.$prt_fontaneria.','.$prt_electrico.','.$prt_llavines.','.$prt_fisuras);
}

$prt_priority    = 'normal';
$prt_subject     = $crate_all;
$prt_body        = ( isset($_POST['customer_description']) ) ? $_POST['customer_description'] : '';
$prt_tags        = $tags_all;
   
if(!empty($_FILES["imagenticket"]["type"])){

	//$url     		 = getcwd().'/'.$_FILES['imagenticket']['name'];
	$filename 		 = $_FILES['imagenticket']['name'];
	$attachment      = $_FILES['imagenticket']['tmp_name'];
	$attachment_type = $_FILES['imagenticket']['type'];

	try {
		    // Upload file
		    $attachment = $client->attachments()->upload([
		        'file' => $attachment,
		        'type' => $attachment_type,
		        'name' => $filename
		    ]);
	    // Create a new ticket
	    $newTicket = $client->tickets()->create([
	        'type' => 'problem2',
	        'tags'  => $prt_tags,
	        'subject'  => $prt_subject,
	        'comment'  => array(
	            'body' => $prt_body,
	            'uploads' => [$attachment->upload->token]
	        ),
	        'requester' => array(
	            'locale_id' => '1',
	            'name' => $prt_name,
	            'email' => $prt_email,
	        ),
	        'priority' => $prt_priority ,
	        'custom_fields' => array(
	            [ 'id' => '360009167691',
	              'value' => $prt_macro 
	            ],
	        	[ 'id' => '360009081152',
	              'value' =>  $prt_proyecto
	            ],
	        	[ 'id' => '360009080952',
	              'value' => $prt_casa_apto_new 
	            ],
	            [ 'id' => '360009235351',
	              'value' => $prt_email
	            ],
	            [ 'id' => '360009234871',
	              'value' => $prt_name 
	            ],   
	            [ 'id' => '360009092772',
	              'value' => $prt_phone
	            ],
	            [ 'id' => '360009769752',
	              'value' => $prt_nhome 
	            ],
	            [ 'id' => '360009770072',
	              'value' => $prt_nhome_02  
	            ],
	            [ 'id' => '360009770092',
	              'value' => $prt_nhome_03 
	            ],
	            [ 'id' => '360029146291',
	              'value' => $dateclose 
	            ],
	        ),
	    ]);

	    echo 'success';
	} catch (\Zendesk\API\Exceptions\ApiResponseException $e) {
	    echo $e->getMessage().'</br>';
	}

}else{

	try {
	    // Create a new ticket
	    $newTicket = $client->tickets()->create([
	        'type' => 'problem2',
	        'tags'  => $prt_tags,
	        'subject'  => $prt_subject,
	        'comment'  => array(
	            'body' => $prt_body,
	        ),
	        'requester' => array(
	            'locale_id' => '1',
	            'name' => $prt_name,
	            'email' => $prt_email,
	        ),
	        'priority' => $prt_priority ,
	        'custom_fields' => array(
	            [ 'id' => '360009167691',
	              'value' => $prt_macro 
	            ],
	        	[ 'id' => '360009081152',
	              'value' =>  $prt_proyecto
	            ],
	        	[ 'id' => '360009080952',
	              'value' => $prt_casa_apto_new 
	            ],
	            [ 'id' => '360009235351',
	              'value' => $prt_email
	            ],
	            [ 'id' => '360009234871',
	              'value' => $prt_name 
	            ],   
	            [ 'id' => '360009092772',
	              'value' => $prt_phone
	            ],
	            [ 'id' => '360009769752',
	              'value' => $prt_nhome 
	            ],
	            [ 'id' => '360009770072',
	              'value' => $prt_nhome_02  
	            ],
	            [ 'id' => '360029146291',
	              'value' => $dateclose 
	            ],
	        ),
	    ]);
	    echo 'success';
	} catch (\Zendesk\API\Exceptions\ApiResponseException $e) {
	    echo $e->getMessage().'</br>';
	}

}

?>