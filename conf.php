<?php
// array de images
$imgBasePath = '//cdn.concasa.com/concasa.com/images/images/';
  $datasponser = array(
	    array(
	        'path'      => $imgBasePath . 'main-1.jpg',
	        'title'     => 'Condominio 6-26',
	        'link_url'  => '/proyecto/condominio-6-26',
	        'link_text' => 'link text',
	    ),
	    array(
	        'path'      => $imgBasePath . 'main-2.jpg',
	        'title'     => 'Terrazas del Norte',
	        'link_url'  => '/proyecto/condominio-6-26',
	        'link_text' => 'link text',
	    ),
	    array(
	        'path'      => $imgBasePath . 'main-3.jpg',
	        'title'     => 'Condominio 9-10',
	        'link_url'  => '/proyecto/condominio-6-26',
	        'link_text' => 'link text',
	    ),
	    array(
	        'path'      => $imgBasePath . 'main-4.jpg',
	        'title'     => 'Costa Linda',
	        'link_url'  => '/proyecto/condominio-6-26',
	        'link_text' => 'link text',
	    ),
	);
	
$b=array(1,2,3,4);
$r=array_rand($datasponser);

$img_sponser  = $datasponser[$r]['path'];
$name_sponser = $datasponser[$r]['title'];
$url_sponser  = $datasponser[$r]['link_url'];
$url_text     = $datasponser[$r]['link_text'];	


function getPrecioProperty($data_project, $data_model){
	$mysqli = new mysqli("concasawebpage.chr8lypzrags.us-east-1.rds.amazonaws.com", "admin", "SQLwertyuiop123", "concasac_multisite");
	$sql = "SELECT * FROM tbl_price_web WHERE proyect LIKE '".$data_project."' AND model = '".$data_model."'";
	$result = $mysqli->query($sql);
	    while( $row = $result->fetch_array() ){
	      $fila = $row['price'];
	    }
	return $fila;
}
function getCuotaProperty($data_project, $data_model){
	$mysqli = new mysqli("concasawebpage.chr8lypzrags.us-east-1.rds.amazonaws.com", "admin", "SQLwertyuiop123", "concasac_multisite");
	$sql = "SELECT * FROM tbl_price_web WHERE proyect LIKE '".$data_project."' AND model = '".$data_model."'";
	$result = $mysqli->query($sql);
	    while( $row = $result->fetch_array() ){
	      $fila = $row['coute'];
	    }
	return $fila;
}
function getPrimaProperty($data_project, $data_model){
	$mysqli = new mysqli("concasawebpage.chr8lypzrags.us-east-1.rds.amazonaws.com", "admin", "SQLwertyuiop123", "concasac_multisite");
	$sql = "SELECT * FROM tbl_price_web WHERE proyect LIKE '".$data_project."' AND model = '".$data_model."'";
	$result = $mysqli->query($sql);
	    while( $row = $result->fetch_array() ){
	      $fila = $row['downpayment'];
	    }
	return $fila;
}


function quitar_acentos($cadena){
    $originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿ';
    $modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyyby';
    $cadena = utf8_decode($cadena);
    $cadena = strtr($cadena, utf8_decode($originales), $modificadas);
    return utf8_encode($cadena);
}
	
session_start();

if ($_SERVER['REMOTE_ADDR']=='::1') $ipuser= ''; else $ipuser= $_SERVER['REMOTE_ADDR'];

$geoPlugin_array = unserialize( file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ipuser) );

$_SESSION['country'] = $geoPlugin_array['geoplugin_countryName'];

//Obtener el pais
 if($_SESSION['country']=='Costa Rica') {
	 
 }else{
	 //header("Location: http://".$_SERVER['SERVER_NAME']."/panama");
	 //die();
 }	
 
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");			
?>
