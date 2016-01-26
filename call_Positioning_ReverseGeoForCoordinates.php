<?php
include("Soap_header_token_Positioning.php");
include('call_core_orgid.php');
try {
$param_ReverseGeoForCoordinates=array("Coordinates"=>array("Coordinate"=>array("Latitude"=>4.63075 ,"Longitude"=>-74.172554)));
$response_ReverseGeoForCoordinates=$PositioningWS ->__soapCall('GetReverseGeoForCoordinates',array($param_ReverseGeoForCoordinates));

echo '<pre>';
//print_r($response_ReverseGeoForCoordinates);

$result_ReverseGeoForCoordinates=$response_ReverseGeoForCoordinates->GetReverseGeoForCoordinatesResult->GeoLocation;

$result_ReverseGeoForCoordinates_Road=$result_ReverseGeoForCoordinates->Road;
$result_ReverseGeoForCoordinates_Suburb=$result_ReverseGeoForCoordinates->Suburb;
$result_ReverseGeoForCoordinates_City=$result_ReverseGeoForCoordinates->City;
$result_ReverseGeoForCoordinates_Region=$result_ReverseGeoForCoordinates->Region;
$result_ReverseGeoForCoordinates_Country=$result_ReverseGeoForCoordinates->Country;
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
print_r("Road.".$result_ReverseGeoForCoordinates_Road);
print "\t";
print_r("Suburb.".$result_ReverseGeoForCoordinates_Suburb);
print "\t";
print_r("City.".$result_ReverseGeoForCoordinates_City);
print "\t";
print_r("Region.".$result_ReverseGeoForCoordinates_Region);
print "\t";
print_r("Country.".$result_ReverseGeoForCoordinates_Country);
print "\t";
?>