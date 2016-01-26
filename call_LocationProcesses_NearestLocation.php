<?php
include("Soap_header_token_LocationProcesses.php");
include('call_core_orgid.php');
try {
$param_NearestLocation=array("Longitude"=>-74.12027,"Latitude"=>4.530699);
$response_NearestLocation =$LocationProcessesWS ->__soapCall('GetNearestLocation',array($param_NearestLocation));
echo '<pre>';
//print_r($response_NearestLocation);
$result_NearestLocation=$response_NearestLocation->GetNearestLocationResult;

$result_NearestLocation_OriginLongitude=$result_NearestLocation->OriginLongitude;
$result_NearestLocation_OriginLatitude=$result_NearestLocation->OriginLatitude;
$result_NearestLocation_LocationID=$result_NearestLocation->LocationID;
$result_NearestLocation_LocationName=$result_NearestLocation->LocationName;
$result_NearestLocation_CentreLongitude=$result_NearestLocation->CentreLongitude;
$result_NearestLocation_CentreLatitude=$result_NearestLocation->CentreLatitude;
$result_NearestLocation_DistanceKm=$result_NearestLocation->DistanceKm;
$result_NearestLocation_BearingDegrees=$result_NearestLocation->BearingDegrees;
$result_NearestLocation_BearingCompass=$result_NearestLocation->BearingCompass;
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
print_r("OriginLongitude.".$result_NearestLocation_OriginLongitude);
print "\t";
print_r("OriginLatitude.".$result_NearestLocation_OriginLatitude);
print "\t";
print_r("LocationID.".$result_NearestLocation_LocationID);
print "\t";
print_r("LocationName.".$result_NearestLocation_LocationName);
print "\t";
print_r("CentreLongitude.".$result_NearestLocation_CentreLongitude);
print "\t";
print_r("CentreLatitude.".$result_NearestLocation_CentreLatitude);
print "\t";
print_r("DistanceKm.".$result_NearestLocation_DistanceKm);
print "\t";
print_r("BearingDegrees.".$result_NearestLocation_BearingDegrees);
print "\t";
print_r("BearingCompass.".$result_NearestLocation_BearingCompass);
print "\t";
?>