<?php
include("Soap_header_token_VehicleDeviceProcess.php");
include('call_core_orgid.php');
try {
$param_VehicleDevicePropertyList=array("VehicleID"=>921);
$response_VehicleDevicePropertyList=$VehicleDeviceProcessWS->__soapCall('GetVehicleDevicePropertyList',array($param_VehicleDevicePropertyList));
echo '<pre>';
//print_r($response_VehicleDevicePropertyList); 
$result_VehicleDevicePropertyList=$response_VehicleDevicePropertyList->GetVehicleDevicePropertyListResult->VehicleDeviceProperty;
for ($i=0; $i <count($result_VehicleDevicePropertyList) ; $i++) { 
	

$result_VehicleDevicePropertyList_ID=$result_VehicleDevicePropertyList[$i]->ID;
$result_VehicleDevicePropertyList_VehicleID=$result_VehicleDevicePropertyList[$i]->VehicleID;
$result_VehicleDevicePropertyList_DeviceID=$result_VehicleDevicePropertyList[$i]->DeviceID;
$result_VehicleDevicePropertyList_Property=$result_VehicleDevicePropertyList[$i]->Property;
$result_VehicleDevicePropertyList_Value=$result_VehicleDevicePropertyList[$i]->Value;
$result_VehicleDevicePropertyList_DateUpdated=$result_VehicleDevicePropertyList[$i]->DateUpdated;

} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
print_r("ID.".$result_VehicleDevicePropertyList_ID);
print "\t";
print_r("VehicleID.".$result_VehicleDevicePropertyList_VehicleID);
print "\t";
print_r("DeviceID.".$result_VehicleDevicePropertyList_DeviceID);
print "\t";
print_r("Property.".$result_VehicleDevicePropertyList_Property);
print "\t";
print_r("Value.".$result_VehicleDevicePropertyList_Value);
print "\t";
print_r("DateUpdated.".$result_VehicleDevicePropertyList_DateUpdated);
print "\t";
echo '<br>';
}
?>