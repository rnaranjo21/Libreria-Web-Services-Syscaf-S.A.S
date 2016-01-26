<?php
include("Soap_header_token_TripProcesses.php");
include('call_core_orgid.php');
try {
$param_Trip_ID=array("TripID"=>9300408);
$response_TripID =$TripsProcessesWS ->__soapCall('GetTripsSinceTripID',array($param_Trip_ID));
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
echo '<pre>';
print_r($response_TripID);
?>