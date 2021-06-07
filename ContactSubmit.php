<?php
ini_set('display_errors', 0);
error_reporting(E_ALL);

$FirstName 			= ( isset($_POST['inf_field_FirstName']) ) ? $_POST['inf_field_FirstName'] : '';
$LastName 			= ( isset($_POST['inf_field_LastName']) ) ? $_POST['inf_field_LastName'] : '';
$Email 				= ( isset($_POST['inf_field_Email']) ) ? $_POST['inf_field_Email'] : '';
$Phone 				= ( isset($_POST['inf_field_Phone1']) ) ? $_POST['inf_field_Phone1'] : '';
$groupID    		= ( isset($_POST['IdTag']) ) ? $_POST['IdTag'] : '';
$LeadSourceId		= ( isset($_POST['LeadSourceId']) ) ? $_POST['LeadSourceId'] : '';
$Country			= ( isset($_POST['Country']) ) ? $_POST['Country'] : '';
$ProyectoCostaRica	= ( isset($_POST['ProyectoCostaRica']) ) ? $_POST['ProyectoCostaRica'] : '';
$ProyectoPanama		= ( isset($_POST['ProyectoPanama']) ) ? $_POST['ProyectoPanama'] : '';
$inffieldNotes		= ( isset($_POST['inf_field_Notes']) ) ? $_POST['inf_field_Notes'] : '';

// Id de campaña API en IF (keap)
$Integration 		= $_POST['Integration'];
$CallName 			= $_POST['CallName'];

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
fwrite($myfile, $_POST);
fclose($myfile);


if ( isset($FirstName) && !empty($LastName) && !empty($Email) && !empty($Phone) ) {

	require_once('./Infusionsoft/infusionsoft.php');
	
	$contact = new Infusionsoft_Contact();
	$csg     = new Infusionsoft_ContactService();
	$csf     = new Infusionsoft_FunnelServiceBase();
	$customFields = Infusionsoft_CustomFieldService::getCustomFields(new Infusionsoft_Contact());
	
	$customFieldsAsArray = array();
	foreach ($customFields as $customField) {
	    $customFieldsAsArray[] = '_' . $customField->Name;
	}
	
	$contact->addCustomFields($customFieldsAsArray);
	
	$contact->FirstName 				= $FirstName;
	$contact->LastName 					= $LastName;
	$contact->Email 					= $Email;
	$contact->Phone1 					= $Phone;
	$contact->LeadSourceId 				= $LeadSourceId; 		// Costa Rica ( 33 ) ,  Panama ( 33L )
	$contact->Country 					= $Country; 			// Costa Rica , Panama
	$contact->_PaisdeInteres 			= $Country; 			// Costa Rica , Panama
	$contact->_ProyectoInteres 			= $ProyectoCostaRica; 	// Condominio 6-26 ,  Terrazas del Norte General 
	$contact->_ProyectodeInteresPanama 	= $ProyectoPanama; 		// Palmira , Mamey , Villa Iguana
	$contact->ContactNotes 			    = $inffieldNotes; 		// Alguna pregunta en especial? NOTAS	

	$contact->save();
	
	$contactID = $contact->Id;
		
	$csf->achieveGoal($Integration, $CallName, $contactID);
	$csg->addToGroup($contactID, $groupID);
 
	$data = [ 'SuccessIf' => true ];

} else {
	
 	$data = [ 'SuccessIf' => false ];
 
}

header('Content-type: application/json');
echo json_encode( $data );

?>