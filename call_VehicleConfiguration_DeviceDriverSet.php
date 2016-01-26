<?php
include("Soap_header_token_VehicleConfigurationProcess.php");
include('call_core_orgid.php');
try {
$param_GetDefaultVehicleConfigParams=array("ddSetName"=>"E13.03.27.11","SetType"=>"FM3316DDMs");
$response_DefaultVehicleConfigParams =$VehicleConfigurationProcessWS->__soapCall('GetDeviceDriverSet',array($param_GetDefaultVehicleConfigParams));
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
echo '<pre>';
print_r($response_DefaultVehicleConfigParams);

//$resul=$response_DefaultVehicleConfigParams->GetDeviceDriverSetResult;
//echo base64_decode($resul);
    ?>    