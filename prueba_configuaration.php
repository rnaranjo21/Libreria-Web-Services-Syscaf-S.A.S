<?php
include("Soap_header_token_VehicleConfigurationProcess.php");
include('call_core_orgid.php');
$param_GetDefaultVehicleConfigParams=array("VehicleID"=>739);
$response_DefaultVehicleConfigParams =$VehicleConfigurationProcessWS->__soapCall('GetVehicleDeviceDriverSetName',array($param_GetDefaultVehicleConfigParams));
echo '<pre>';
print_r($response_DefaultVehicleConfigParams);
?>