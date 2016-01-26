<?php
include("Soap_header_token_VehicleDeviceProcess.php");
include('call_core_orgid.php');
try {
$param_VehicleGprsWcfEndpoint=array("VehicleID"=>739);
$response_VehicleGprsWcfEndpoint=$VehicleDeviceProcessWS->__soapCall('GetVehicleGprsWcfEndpoint',array($param_VehicleGprsWcfEndpoint));
echo '<pre>';
//print_r($response_VehicleGprsWcfEndpoint);
$result_VehicleGprsWcfEndpoint=$response_VehicleGprsWcfEndpoint->GetVehicleGprsWcfEndpointResult;
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
print_r($result_VehicleGprsWcfEndpoint);
?>