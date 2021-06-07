<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$host = "localhost";
$port = "3306";
$user = "concasac_concasa";
$password = "Cross!2#4";
$database ="concasac_multisite";
$table = "tbl_zendesk_date";

$obj_conexion = mysqli_connect($host,$user,$password,$database);

include("vendor/autoload.php");

use Zendesk\API\HttpClient as ZendeskAPI;

$subdomain  = "concasapostventa";
$username 	= "kenneth.rodriguez@concasa.com";
$token 		= "bT3Z61YcwzpS2z1z3cE4TGKaS6cXYs806v5cNmwA";
$client 	= new ZendeskAPI($subdomain);	
$data 		= $_GET['count'];

if ( $data != '' ) {

	$client->setAuth('basic', ['username' => $username, 'token' => $token]);
	$users = $client->users()->findAll();
	// print_r($users);

	    $var_consulta= "select * from ". $table;
	    $var_resultado = $obj_conexion->query($var_consulta);

	    if($var_resultado->num_rows>0){

	        $client = array(); 

		    while( $row=$var_resultado->fetch_array() ) {

		        $id=$row['id'];
			    $macro=$row['tbl_macro'];
			    $project=$row['tbl_project'];
			    $home=$row['tbl_home'];
			    $date=$row['tbl_date'];
			    $guarantee=$row['tbl_guarantee'];
			    $update=$row['tbl_update'];
			
			    $client[] = array('id'=> $id, 'macro'=> $macro, 'project'=> $project, 'home'=> $home,'date'=> $date, 'guarantee'=> $guarantee, 'update'=> $update);

		    }

		    $json_string = json_encode($client);
			echo $json_string; 

	    }else{
	        echo json_encode(['status' => 'error', 'data' => $client]);
	    }

}else{

	echo json_encode(['status' => 'error', 'data' => 'invalidate parameters']);

}

?>