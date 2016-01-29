<?php
include("Soap_header_token_VehicleDeviceProcess.php");
include('call_core_orgid.php');
try {
$param_VehicleDevicesConfigList=array("VehicleID"=>921);
$response_VehicleDevicesConfigList=$VehicleDeviceProcessWS->__soapCall('GetVehicleDevicesConfigList',array($param_VehicleDevicesConfigList));
echo '<pre>';
//print_r($response_VehicleDevicesConfigList); 

$result_VehicleDevicesConfigList=$response_VehicleDevicesConfigList->GetVehicleDevicesConfigListResult->KeyValuePairOfStringDevice;
for ($i=0; $i <count($result_VehicleDevicesConfigList) ; $i++) { 
	
$result_VehicleDevicesConfigList_ID=$result_VehicleDevicesConfigList[$i]->Value->ID;
$result_VehicleDevicesConfigList_DeviceType=$result_VehicleDevicesConfigList[$i]->Value->DeviceType;
$result_VehicleDevicesConfigList_Description=$result_VehicleDevicesConfigList[$i]->Value->Description;
$result_VehicleDevicesConfigList_CanRecordInterval=$result_VehicleDevicesConfigList[$i]->Value->CanRecordInterval;
$result_VehicleDevicesConfigList_IsActive=$result_VehicleDevicesConfigList[$i]->Value->IsActive;
$result_VehicleDevicesConfigList_Updated=$result_VehicleDevicesConfigList[$i]->Value->Updated;
$result_VehicleDevicesConfigList_InputID=$result_VehicleDevicesConfigList[$i]->Value->InputID;
$result_VehicleDevicesConfigList_PowerDeviceID=$result_VehicleDevicesConfigList[$i]->Value->PowerDeviceID;

print_r("ID.".$result_VehicleDevicesConfigList_ID);
print "\t";
print_r("DeviceType.".$result_VehicleDevicesConfigList_DeviceType);
print "\t";
print_r("Description.".$result_VehicleDevicesConfigList_Description);
print "\t";
print_r("CanRecordInterval.".$result_VehicleDevicesConfigList_CanRecordInterval);
print "\t";
print_r("IsActive.".$result_VehicleDevicesConfigList_IsActive);
print "\t";
print_r("Updated.".$result_VehicleDevicesConfigList_Updated);
print "\t";
print_r("InputID.".$result_VehicleDevicesConfigList_InputID);
print "\t";
print_r("PowerDeviceID.".$result_VehicleDevicesConfigList_PowerDeviceID);
print "\t";
echo '<br>';
}
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
?>