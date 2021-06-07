<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);

$UpdateTicketId = $_GET['idticket'];

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
	
if ( $UpdateTicketId !='' ) {	
	
	$UpdateIdTicket = (int)$UpdateTicketId;
	
	$prt_macro       = ( isset($_GET['macro']) ) ? $_GET['macro'] : $_GET['project']; // 'campo_real','costa_linda','terrazas_del_norte','terrazas_del_oeste'; 
	$prt_proyecto    = ( isset($_GET['project']) ) ? $_GET['project'] : '';
	$prt_nhome       = ( isset($_GET['tower']) ) ? $_GET['tower'] : '';
	$prt_nhome_02    = ( isset($_GET['floor']) ) ? $_GET['floor'] : ''; 
	$prt_nhome_03    = ( isset($_GET['apartments']) ) ? $_GET['apartments'] : '';
	
	
	if( $prt_proyecto == 'terrazas_del_oeste' ){
		$prt_casa_apto   = 'TO-'; 
	} else if ( $prt_proyecto == 'costa_linda' ) {
		$prt_casa_apto   = 'CL-'; 
	} else {
		$prt_casa_apto   = ''; 
	}
	
	$prt_casa_apto_a = ( isset($_GET['number_home_apto']) ) ? $_GET['number_home_apto'] : '';
	$prt_casa_apto_new = $prt_casa_apto.''.$prt_casa_apto_a;
	
	
	
	if( $prt_macro == 'campo_real' and $prt_proyecto == '9-10'){
		$tbl_home_query = $prt_nhome . ' ' . $prt_nhome_02 . '-' . $prt_nhome_03;
	 	$var_consulta= "SELECT * FROM `tbl_zendesk_date` WHERE `tbl_macro` = '$prt_macro' AND `tbl_project` = '$prt_proyecto' AND `tbl_home` = '$tbl_home_query'";
	 	$var_resultado = $obj_conexion->query($var_consulta);
	    if($var_resultado->num_rows>0){
		     $row = $var_resultado->fetch_array();
			 $dateclose = $row['tbl_date'];
		}
	}
	
	if( $prt_macro == 'campo_real' and $prt_proyecto == '6-26'){
		$tbl_home_query = $prt_nhome . ' ' . $prt_nhome_02 . '-' . $prt_nhome_03;
	 	$var_consulta= "SELECT * FROM `tbl_zendesk_date` WHERE `tbl_macro` = '$prt_macro' AND `tbl_project` = '$prt_proyecto' AND `tbl_home` = '$tbl_home_query'";
	 	$var_resultado = $obj_conexion->query($var_consulta);
	    if($var_resultado->num_rows>0){
		     $row = $var_resultado->fetch_array();
			 $dateclose = $row['tbl_date'];
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
		}
	}
	
	if( $prt_macro == 'campo_real' and $prt_proyecto == 'villas_del_campo'){
		$tbl_home_query = $prt_nhome . ' ' . $prt_nhome_02 . '-' . $prt_nhome_03;
	 	$var_consulta= "SELECT * FROM `tbl_zendesk_date` WHERE `tbl_macro` = '$prt_macro' AND `tbl_project` = '$prt_proyecto' AND `tbl_home` = '$tbl_home_query'";
	 	$var_resultado = $obj_conexion->query($var_consulta);
	    if($var_resultado->num_rows>0){
		     $row = $var_resultado->fetch_array();
			 $dateclose = $row['tbl_date'];
		}
	}
	
	if( $prt_macro == 'campo_real' and $prt_proyecto == 'costa_linda'){
		$tbl_home_query = $prt_nhome . '' . $prt_nhome_02 . '' . $prt_nhome_03;
	 	$var_consulta= "SELECT * FROM `tbl_zendesk_date` WHERE `tbl_macro` = '$prt_proyecto' AND `tbl_project` = '$prt_proyecto' AND `tbl_home` = '$prt_casa_apto_a'";
	 	$var_resultado = $obj_conexion->query($var_consulta);
	    if($var_resultado->num_rows>0){
		     $row = $var_resultado->fetch_array();
			 $dateclose = $row['tbl_date'];
		}
	}
	
	if( $prt_macro == 'campo_real' and $prt_proyecto == 'terrazas_del_oeste'){
		$tbl_home_query = $prt_nhome . '' . $prt_nhome_02 . '' . $prt_nhome_03;
	 	$var_consulta= "SELECT * FROM `tbl_zendesk_date` WHERE `tbl_macro` = '$prt_proyecto' AND `tbl_project` = '$prt_proyecto' AND `tbl_home` = '$prt_casa_apto_a'";
	 	$var_resultado = $obj_conexion->query($var_consulta);
	    if($var_resultado->num_rows>0){
		     $row = $var_resultado->fetch_array();
			 $dateclose = $row['tbl_date'];
		}
	}
	
	if( $prt_macro == 'terrazas_del_norte' and $prt_proyecto == 'terrazas_del_norte'){
		
		$tbl_home_query = $prt_nhome_02;
		$consulta_home = substr($prt_nhome_02,3);
	 	$var_consulta= "SELECT * FROM `tbl_zendesk_date` WHERE `tbl_macro` = '$prt_macro' AND `tbl_project` = '$prt_proyecto' AND `tbl_home` = '$consulta_home'";
	 	 	
	 	$var_resultado = $obj_conexion->query($var_consulta);
	    if($var_resultado->num_rows>0){
		     $row = $var_resultado->fetch_array();
			 $dateclose = $row['tbl_date'];
		}
	}
	
	//$jsonobj = $dateclose;
	
	//echo json_encode($jsonobj);
	
	try {
	    // Update a new ticket
	    $updateTicket = $client->tickets()->update($UpdateIdTicket, [
	        'custom_fields' => array(
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