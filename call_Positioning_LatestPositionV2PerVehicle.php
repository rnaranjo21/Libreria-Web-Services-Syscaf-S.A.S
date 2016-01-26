<?php
include("Soap_header_token_Positioning.php");
include('call_core_orgid.php');
try {

$param_LatestPositionV2PerVehicle=array("SpecificVehicleIDs"=>array("short"=>921));
$response_LatestPositionV2PerVehicle=$PositioningWS ->__soapCall('GetLatestPositionV2PerVehicle',array($param_LatestPositionV2PerVehicle));

echo '<pre>';
print_r($response_LatestPositionV2PerVehicle);

$result_LatestPositionV2PerVehicle=$response_LatestPositionV2PerVehicle->GetLatestPositionV2PerVehicleResult->GPSPositionV2;

$result_LatestPositionV2PerVehicle_ID=$result_LatestPositionV2PerVehicle->ID;
$result_LatestPositionV2PerVehicle_VehicleID=$result_LatestPositionV2PerVehicle->VehicleID;
$result_LatestPositionV2PerVehicle_DriverID=$result_LatestPositionV2PerVehicle->DriverID;
$result_LatestPositionV2PerVehicle_OriginalDriverID=$result_LatestPositionV2PerVehicle->OriginalDriverID;
$result_LatestPositionV2PerVehicle_BlockSeq=$result_LatestPositionV2PerVehicle->BlockSeq;
$result_LatestPositionV2PerVehicle_Time=$result_LatestPositionV2PerVehicle->Time;
$date_Time = new DateTime($result_LatestPositionV2PerVehicle_Time);
$result_LatestPositionV2PerVehicle_Latitude=$result_LatestPositionV2PerVehicle->Latitude;
$result_LatestPositionV2PerVehicle_Longitude=$result_LatestPositionV2PerVehicle->Longitude;
$result_LatestPositionV2PerVehicle_Altitude=$result_LatestPositionV2PerVehicle->Altitude;
$result_LatestPositionV2PerVehicle_Heading=$result_LatestPositionV2PerVehicle->Heading;
$result_LatestPositionV2PerVehicle_Satellites=$result_LatestPositionV2PerVehicle->Satellites;
$result_LatestPositionV2PerVehicle_HDOP=$result_LatestPositionV2PerVehicle->HDOP;
$result_LatestPositionV2PerVehicle_AgeOfReading=$result_LatestPositionV2PerVehicle->AgeOfReading;
$result_LatestPositionV2PerVehicle_DistanceSinceReading=$result_LatestPositionV2PerVehicle->DistanceSinceReading;
$result_LatestPositionV2PerVehicle_Velocity=$result_LatestPositionV2PerVehicle->Velocity;
$result_LatestPositionV2PerVehicle_IsAVL=$result_LatestPositionV2PerVehicle->IsAVL;
$result_LatestPositionV2PerVehicle_CoordValid=$result_LatestPositionV2PerVehicle->CoordValid;
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
?>