<?php

include("Soap_header_token_LocationProcesses.php");
include('call_core_orgid.php');
try {
$DateTime='2015-01-17T00:00:00';
$param_LocationsChangedSince=array("SinceDate"=>$DateTime);
$response_LocationsChangedSince =$LocationProcessesWS ->__soapCall('ListLocationsChangedSince',array($param_LocationsChangedSince));
echo '<pre>';
//print_r($response_LocationsChangedSince);
$result_LocationsChangedSince =$response_LocationsChangedSince->ListLocationsChangedSinceResult;
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
print_r("ListID.".$result_LocationsChangedSince);
?>