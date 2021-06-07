<?php
// Open Connection
$conn = @mysqli_connect('localhost', 'INF_TO_TABLAU', 'Cdcc{X2,sT9I', 'INFUSIONSOFT_MYSQL');

if (!$conn) {
    echo "Error: " . mysqli_connect_error();
	exit();
}

/*

$sql = "INSERT INTO INFUSIONSOFT_SQL ( 
								FIRST_NAME, 
								LAST_NAME, 
								LEAD_SOURCE, 
								OWNER, 
								DATE_CREATED, 
								STAGE, PHONE, 
								CLOSE_DATE, 
								LAST_UPDATED 
											) VALUES (
														'".$_POST['nombre']."', 
														'".$_POST['apellido']."',
														'".$_POST['']."',
														'".$_POST['']."',
														'".$_POST['']."',
														'".$_POST['']."',
														'".$_POST['']."',
														'".$_POST['']."',
														'".$_POST['']."'
)";
*/

$sql = "INSERT INTO INFUSIONSOFT_SQL ( 
								FIRST_NAME, 
								LAST_NAME 
											) VALUES (
														'".$_POST['nombre']."', 
														'".$_POST['apellido']."'
)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>