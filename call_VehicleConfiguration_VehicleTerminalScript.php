<?php
include("Soap_header_token_VehicleConfigurationProcess.php");
include('call_core_orgid.php');
try {
$param_GetDefaultVehicleConfigParams=array("VehicleID"=>921);
$response_DefaultVehicleConfigParams =$VehicleConfigurationProcessWS->__soapCall('GetVehicleTerminalScript',array($param_GetDefaultVehicleConfigParams));
echo '<pre>';
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
print_r($response_DefaultVehicleConfigParams);
?>