<?php
class DbConfig 
{	
	private $_host = 'concasawebpage.chr8lypzrags.us-east-1.rds.amazonaws.com';
	private $_username = 'admin';
	private $_password = 'SQLwertyuiop123';
	private $_database = 'concasac_multisite';
	protected $connection;
	public function __construct()
	{
		if (!isset($this->connection)) {
			
			$this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
			
			if (!$this->connection) {
				echo 'Cannot connect to database server';
				exit;
			}
			
			if (!$this->connection->set_charset("utf8")) {
			    echo("Error cargando el conjunto de caracteres utf8: %s\n");
			    exit();
			}
			
						
		}	
		
		return $this->connection;
	}
}

class Crud extends DbConfig
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function getData($query)
	{		
		$result = $this->connection->query($query);
		
		if ($result == false) {
			return false;
		} 
		
		$rows = array();
		
		while ($row = $result->fetch_assoc()) {
			$rows[] = $row;
		}
		
		return $rows;
	}
	public function execute($query) 
	{
		$result = $this->connection->query($query);
		
		if ($result == false) {
			echo 'Error: cannot execute the command';
			return false;
		} else {
			return true;
		}		
	}
	public function escape_string($value)
	{
		return $this->connection->real_escape_string($value);
	}
}

$crud = new Crud();

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
	$consulta = "SELECT * FROM tbl_price_web WHERE proyect LIKE '".$data_project."' AND model = '".$data_model."'";
	$resultado = $crud->getData($consulta);
	foreach ($result as $key => $res) {
		$fila = $res['price'];
	}	
	return $fila;
}

function getCuotaProperty ( $data_project , $data_model ){
	$consulta = "SELECT * FROM tbl_price_web WHERE proyect LIKE '".$data_project."' AND model = '".$data_model."'";
	$resultado = $crud->getData($consulta);
	foreach ($result as $key => $res) {
		$fila = $res['coute'];
	}	
	return $fila;
}

function getPrimaProperty ( $data_project , $data_model ){
	$consulta = "SELECT * FROM tbl_price_web WHERE proyect LIKE '".$data_project."' AND model = '".$data_model."'";
	$resultado = $crud->getData($consulta);
	foreach ($result as $key => $res) {
		$fila = $res['downpayment'];
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
