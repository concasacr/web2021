<?php
error_reporting(1);
ini_set('display_errors','on');




function getPrecioProperty($data_project, $data_model){
	$mysqli = new mysqli("concasawebpage.chr8lypzrags.us-east-1.rds.amazonaws.com", "admin", "SQLwertyuiop123", "concasac_multisite");
	$sql = "SELECT * FROM tbl_price_web WHERE proyect LIKE '".$data_project."' AND model = '".$data_model."'";
	$result = $mysqli->query($sql);
	    while( $row = $result->fetch_array() ){
	      $fila = $row['price'];
	    }
	return $fila;
}



echo number_format(getPrecioProperty('Bosque','1'), 0, '.', ',');


?>
