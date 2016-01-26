<?php
include("Soap_header_token_LocationProcesses.php");
include('call_core_orgid.php');
try {

$param_LocationInRange=array("Longitude"=>-74.12027,"Latitude"=>4.530699,"RadiusKM"=>0.1);
$response_LocationInRange =$LocationProcessesWS ->__soapCall('GetLocationsInRange',array($param_LocationInRange));
$LocationProcessesWS->__setLocation('https://api.fm-web.us');
echo '<pre>';

//print_r($response_LocationInRange);
$result_InRange=$response_LocationInRange->GetLocationsInRangeResult;
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}

print_r("ListID.".$result_InRange);

?>