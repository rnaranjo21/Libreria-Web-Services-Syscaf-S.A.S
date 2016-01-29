<?php
include("Soap_header_token_LocationProcesses.php");
include('call_core_orgid.php');
try {
$param_PolygonText=array("LocationID"=>31166);
$response_PolygonText =$LocationProcessesWS ->__soapCall('GetPolygonText',array($param_PolygonText));
echo '<pre>';
print_r($response_PolygonText);
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
?>