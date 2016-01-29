<?php
include("Soap_header_token_VehicleDeviceProcess.php");
include('call_core_orgid.php');
try {
$param_VehicleDevicesList=array("VehicleID"=>921);
$response_VehicleDevicesList=$VehicleDeviceProcessWS->__soapCall('GetVehicleDevicesList',array($param_VehicleDevicesList));
echo '<pre>';
//print_r($response_VehicleDevicesList); 

$result_VehicleDevicesList=$response_VehicleDevicesList->GetVehicleDevicesListResult->KeyValuePairOfStringDevice;

for ($i=0; $i <count($result_VehicleDevicesList) ; $i++) { 
	$result_VehicleDevicesList_ID=$result_VehicleDevicesList[$i]->Value->ID;
	$result_VehicleDevicesList_DeviceType=$result_VehicleDevicesList[$i]->Value->DeviceType;
	$result_VehicleDevicesList_Description=$result_VehicleDevicesList[$i]->Value->Description;
	$result_VehicleDevicesList_CanRecordInterval=$result_VehicleDevicesList[$i]->Value->CanRecordInterval;
	$result_VehicleDevicesList_IsActive=$result_VehicleDevicesList[$i]->Value->IsActive;
    $result_VehicleDevicesList_Updated=$result_VehicleDevicesList[$i]->Value->Updated;
	//$result_VehicleDevicesList_InputID=$result_VehicleDevicesList[$i]->Value->InputID;
	$result_VehicleDevicesList_PowerDeviceID=$result_VehicleDevicesList[$i]->Value->PowerDeviceID;
	
print_r("ID.".$result_VehicleDevicesList_ID);
print "\t";	
print_r("ID.".$result_VehicleDevicesList_DeviceType);
print "\t";	
print_r("ID.".$result_VehicleDevicesList_Description);
print "\t";	
print_r("ID.".$result_VehicleDevicesList_CanRecordInterval);
print "\t";	
print_r("ID.".$result_VehicleDevicesList_IsActive);
print "\t";	
print_r("ID.".$result_VehicleDevicesList_Updated);
print "\t";	
/*print_r("ID.".$result_VehicleDevicesList_InputID);
print "\t";*/
print_r("ID.".$result_VehicleDevicesList_PowerDeviceID);
print "\t";	

echo '<br>';
}
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}

?>