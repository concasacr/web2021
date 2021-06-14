<?php
error_reporting(1);
//@session_name('Ses_id');
//@session_set_cookie_params(0, '/', '.concasa.com');
//@session_start();
//@set_time_limit(600);

	
	
class DbConfig 
{		
	private $_host 	   = 'concasawebpage.chr8lypzrags.us-east-1.rds.amazonaws.com';
	private $_username = 'admin';
	private $_password = 'SQLwertyuiop123';
	private $_database = 'concasac_multisite';
	private $port	   = 3306;
	
	protected $connection;
	
	public function __construct()
	{
		if (!isset($this->connection)) {
			
			$this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database, $this->_port);
			
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

}


$crud = new Crud();

$sql = "SELECT * FROM tbl_price_web WHERE proyect LIKE 'Bosque' AND model = '1'";

$result = $crud->getData($query);

foreach ($result as $key => $res) {
	
    echo $res['price'];
    
}




die();


	
function getPrecioProperty($data_project, $data_model){
	$crud = new Crud();
	$result = $crud->getData("SELECT * FROM tbl_price_web WHERE proyect LIKE '".$data_project."' AND model = '".$data_model."'");
    foreach ($result as $res) {
      $fila = $res['price'];
    }
	return $fila;
}
	
	
	
echo number_format(getPrecioProperty('Bosque','1'), 0, '.', ',');	
	
	
?>
