<?php
include("Soap_header_token_Positioning.php");
include('call_core_orgid.php');
try {
$param_ReverseGeoForGPSPositions=array("GPSIDs"=>array("long"=>901330159));
$response_ReverseGeoForGPSPositions=$PositioningWS ->__soapCall('GetReverseGeoForGPSPositions',array($param_ReverseGeoForGPSPositions));

echo '<pre>';
//print_r($response_ReverseGeoForGPSPositions);

$result_GetReverseGeoForGPSPositions=$response_ReverseGeoForGPSPositions->GetReverseGeoForGPSPositionsResult->GeoLocation;

$result_GetReverseGeoForGPSPositions_Road=$result_GetReverseGeoForGPSPositions->Road;
$result_GetReverseGeoForGPSPositions_Suburb=$result_GetReverseGeoForGPSPositions->Suburb;
$result_GetReverseGeoForGPSPositions_City=$result_GetReverseGeoForGPSPositions->City;
$result_GetReverseGeoForGPSPositions_Region=$result_GetReverseGeoForGPSPositions->Region;
$result_GetReverseGeoForGPSPositions_Country=$result_GetReverseGeoForGPSPositions->Country;
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
print_r("Road.".$result_GetReverseGeoForGPSPositions_Road);
print "\t";
print_r("Suburb.".$result_GetReverseGeoForGPSPositions_Suburb);
print "\t";
print_r("City.".$result_GetReverseGeoForGPSPositions_City);
print "\t";
print_r("Region.".$result_GetReverseGeoForGPSPositions_Region);
print "\t";
print_r("Country.".$result_GetReverseGeoForGPSPositions_Country);
print "\t";
?>