<?php
include("Soap_header_token_VehicleDeviceProcess.php");
include('call_core_orgid.php');
try {
$param_VehicleDeviceProperty=array("VehicleID"=>921,"DeviceID"=>0 ,"Property"=>"UnitIMEI");
$response_VehicleDeviceProperty=$VehicleDeviceProcessWS->__soapCall('GetVehicleDeviceProperty',array($param_VehicleDeviceProperty));
echo '<pre>';
//print_r($response_VehicleDeviceProperty); 

$result_VehicleDeviceProperty=$response_VehicleDeviceProperty->GetVehicleDevicePropertyResult;

} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
print_r($result_VehicleDeviceProperty);
?>