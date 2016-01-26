<?php
include("Soap_header_token_LocationProcesses.php");
include('call_core_orgid.php');
try {
$param_PolygonPoints=array("LocationID"=>31166);
$response_PolygonPoints =$LocationProcessesWS ->__soapCall('GetPolygonPoints',array($param_PolygonPoints));
echo '<pre>';
//print_r($response_PolygonPoints);
$result_PolygonPoints=$response_PolygonPoints->GetPolygonPointsResult->Coordinate;
for ($i=0; $i <count($result_PolygonPoints) ; $i++) { 
$result_PolygonPoints_Latitude=$result_PolygonPoints[$i]->Latitude;
$result_PolygonPoints_Longitude=$result_PolygonPoints[$i]->Longitude;
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
print_r("Latitude.".$result_PolygonPoints_Latitude);
print "\t";

print_r("Longitude.".$result_PolygonPoints_Longitude);
print "\t";
echo '<br>';
}

?>