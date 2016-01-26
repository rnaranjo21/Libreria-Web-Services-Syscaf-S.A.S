<?php
include("Soap_header_token_VehicleConfigurationProcess.php");
include('call_core_orgid.php');
$param_GetDefaultVehicleConfigParams=array("VehicleID"=>739 ,"SetType"=>"FM3316DDMs");
$response_DefaultVehicleConfigParams =$VehicleConfigurationProcessWS->__soapCall('GetVehicleDeviceDrivers',array($param_GetDefaultVehicleConfigParams));
echo '<pre>';
print_r($response_DefaultVehicleConfigParams);

$resul=$response_DefaultVehicleConfigParams->GetVehicleDeviceDriversResult;
echo base64_decode($resul);
?>