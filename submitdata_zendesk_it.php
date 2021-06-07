<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);


include $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
//include("/vendor/autoload.php");

use Zendesk\API\HttpClient as ZendeskAPI;

$subdomain = "concasapostventa";
$username  = "kenneth.rodriguez@concasa.com";
$token     = "pdVQVnpiFxIioLDgVkCnDKWcVU2ygmSc60LCXCDE";

$client 		 = new ZendeskAPI($subdomain);
$client->setAuth('basic', ['username' => $username, 'token' => $token]);

$prt_macro    = ( isset($_POST['macro']) ) ? $_POST['macro'] : '';
$prt_proyecto    = ( isset($_POST['project']) ) ? $_POST['project'] : '';


$prt_house       = ( isset($_POST['number_home_apto']) ) ? $_POST['number_home_apto'] : '';
$prt_depart      = ( isset($_POST['customer_department']) ) ? $_POST['customer_department'] : '';



$prt_name        = ( isset($_POST['customer_name']) ) ? $_POST['customer_name'] : '';
$prt_phone       = '24389075'; 
$prt_email       = ( isset($_POST['customer_email']) ) ? $_POST['customer_email'] : ''; 

$prt_origen      = ( isset($_POST['origen_ticket']) ) ? $_POST['origen_ticket'] : ''; 
$prt_tipo   	 = ( isset($_POST['type_ticket']) ) ? $_POST['type_ticket'] : ''; 

$prt_body        = ( isset($_POST['customer_description']) ) ? $_POST['customer_description'] : '';

/*
$tagsarray 		 = $_POST['tags[]'];
*/
$tags_a          = ( isset($_POST['tags']) ) ? $_POST['tags'] : '';
$tags_b          = array ( $prt_proyecto, 'TI', 'IT', 'Oficinas', $prt_origen, $prt_depart, $prt_house, $_POST['tags']);
$tags_c          = array ( $prt_house );

/*
if( $prt_house == '' ){
	$tagsarray		 = array_merge($tags_b, $tags_d, $tags_a);
}  else {
	$tagsarray		 = array_merge($tags_b, $tags_c, $tags_a);
}
*/

//$tagsarray		 = array_merge($tags_b, $tags_d, $tags_a);
$tagsarray	 = array ( $prt_proyecto, 'TI', 'IT', 'Oficinas', $prt_origen, $prt_depart, $prt_house, $_POST['tags']);


if( $prt_name == '' ){
	$response["success"] = false;
	$response["mensaje"] = "Tienes el campo de nombre vacio y no podemos gerenar su reporte verifique e intente nuevamente ";
	echo json_encode($response);
	exit();
} 
if ( $prt_email == '' ) {
	$response["success"] = false;
	$response["mensaje"] = "Tienes el campo de correo vacio y no podemos gerenar su reporte verifique e intente nuevamente ";
	echo json_encode($response);
	exit();
} 


$prt_priority    = 'normal';
$prt_subject     = $prt_house;
$subjetticket = $prt_house . ' - ' . $prt_depart;


try {
	
	// Create a new ticket
	$newTicket = $client->tickets()->create([
		'type' => 'problem',
		'tags'  => $tagsarray,
		'subject'  => $subjetticket,
		'comment'  => array(
			'body' => $prt_body
		),
		'requester' => array(
			'locale_id' => '1',
			'name' => $prt_name,
			'email' => $prt_email,
		),
		'priority' => $prt_priority,
		'custom_fields' => array(
			[ 'id' => '360009167691', //macro
			  'value' => $prt_macro 
			],
			[ 'id' => '360009081152', // proyecto
			  'value' =>  $prt_proyecto
			],
			[ 'id' => '360009080952', //# Casa o Apto
			  'value' => $prt_depart 
			],
			[ 'id' => '360009235351', //Email
			  'value' => $prt_email
			],
			[ 'id' => '360009234871', //Nombre y Apellido
			  'value' => $prt_name 
			],
			[ 'id' => '360009770072', //nhome-02
			  'value' => $prt_depart  
			],   
			[ 'id' => '360009092772', //Teléfono
			  'value' => $prt_phone
			],
			[ 'id' => '360043747272', //Tipo de ticket (insidente, solicitud )
			  'value' => $prt_tipo 
			],
			[ 'id' => '360043752971', //Origen de Ticket
			  'value' => $prt_origen 
			],
		),
	]);
	//echo 'success - img';
	 $response["success"] = true;
	 $response["mensaje"] = "Reporte generado en forma exitosa gracias!";
	
	
} catch (\Zendesk\API\Exceptions\ApiResponseException $e) {
	//echo $e->getMessage().'</br>';
	$response["success"] = false;
	$response["mensaje"] = "Reporte generado no se pudo crear intenta nuevamente";
}
echo json_encode($response);

?>