<?php
include("Soap_header_token_VehicleDeviceProcess.php");
include('call_core_orgid.php');
try {
$param_VehicleDeviceDriverInfo=array("vehicleID"=>739);
$response_VehicleDeviceDriverInfo=$VehicleDeviceProcessWS->__soapCall('GetVehicleDeviceDriverInfo',array($param_VehicleDeviceDriverInfo));
echo '<pre>';
//print_r($response_VehicleDeviceDriverInfo);


$result_VehicleDeviceDriverInfo=$response_VehicleDeviceDriverInfo->GetVehicleDeviceDriverInfoResult;
$result_VehicleDeviceDriverInfo_VehicleID=$result_VehicleDeviceDriverInfo->VehicleID;
$result_VehicleDeviceDriverInfo_DriverSetLoadDate=$result_VehicleDeviceDriverInfo->DriverSetLoadDate;
$DriverSetLoadDate = new DateTime($result_VehicleDeviceDriverInfo_DriverSetLoadDate);
$result_VehicleDeviceDriverInfo_DriverSetVersion=$result_VehicleDeviceDriverInfo->DriverSetVersion;
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}

print_r("VehicleID.".$result_VehicleDeviceDriverInfo_VehicleID);
print "\t";

print "DriverSetLoadDate.".$DriverSetLoadDate->format('d/m/Y (H:i:s)');
print "\t";
 
 print_r("DriverSetVersion.".$result_VehicleDeviceDriverInfo_DriverSetVersion);
print "\t";       
?>