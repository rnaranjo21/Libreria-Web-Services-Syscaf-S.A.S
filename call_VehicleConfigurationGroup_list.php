<?php
include("Soap_header_token_VehicleConfiguration.php");
include('call_core_orgid.php');
try {
$param_VehicleConfiguration=array("TokenHeader");
$response_VehicleConfiguration=$VehicleConfigurationGropProcessesWS->__soapCall('GetVehicleConfigurationGroupList',array($param_VehicleConfiguration));
echo '<pre>';
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
print_r($response_VehicleConfiguration);
?>