<?php
	//echo '<pre>';
    //print_r($_POST);
    //print_r($_FILES);
    //echo '</pre>';
ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("./vendor/autoload.php");

use Zendesk\API\HttpClient as ZendeskAPI;

$subdomain = "concasapostventa";
$username = "kenneth.rodriguez@concasa.com";
$token = "bT3Z61YcwzpS2z1z3cE4TGKaS6cXYs806v5cNmwA";

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

$prt_casa_apto   = ( isset($_POST['number_home_apto']) ) ? $_POST['number_home_apto'] : ''; 

if($prt_casa_apto!=''){
	$crate_all = $prt_casa_apto;
	$tags_all  = array($prt_macro.','.$prt_casa_apto.','.$prt_proyecto);
}else{
	$crate_all = $prt_nhome.' '.$prt_nhome_02.' '.$prt_nhome_03;
	$tags_all  = array($prt_macro.','.$prt_nhome.','.$prt_nhome_02.','.$prt_nhome_03.','.$prt_proyecto);
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
	              'value' => $prt_casa_apto 
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
	            /*
	            [ 'id' => '360028165132',
	              'value' => '1:00 PM' 
	            ],
	            [ 'id' => '360028165152',
	              'value' => 'America/Costa_Rica' 
	            ],
	            [ 'id' => '360028165172',
	              'value' => '30' 
	            ],
	            [ 'id' => '360028165092',
	              'value' => 'Citas (8873)'
	            ],
	            [ 'id' => '360028165112',
	              'value' => '2020-02-08' 
	            ],
	            */
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
	              'value' => $prt_casa_apto 
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
	            /*
	            [ 'id' => '360028165132',
	              'value' => '1:00 PM' 
	            ],
	            [ 'id' => '360028165152',
	              'value' => 'America/Costa_Rica' 
	            ],
	            [ 'id' => '360028165172',
	              'value' => '30' 
	            ],
	            [ 'id' => '360028165092',
	              'value' => 'Citas (8873)'
	            ],
	            [ 'id' => '360028165112',
	              'value' => '2020-02-08' 
	            ],
	            */
	        ),
	    ]);
	    echo 'success';
	} catch (\Zendesk\API\Exceptions\ApiResponseException $e) {
	    echo $e->getMessage().'</br>';
	}


}

?>