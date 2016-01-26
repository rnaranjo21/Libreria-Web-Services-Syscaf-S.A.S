<?php
include("Soap_header_token_Positioning.php");
include('call_core_orgid.php');
try {
$param_LatestPositionPerVehicle=array("SpecificVehicleIDs"=>array("short"=>921));
$response_LatestPositionPerVehicle=$PositioningWS ->__soapCall('GetLatestPositionPerVehicle',array($param_LatestPositionPerVehicle));

echo '<pre>';
print_r($response_LatestPositionPerVehicle);

$result_LatestPositionPerVehicle=$response_LatestPositionPerVehicle->GetLatestPositionPerVehicleResult->GPSPosition;

$result_LatestPositionPerVehicle_ID=$result_LatestPositionPerVehicle->ID;
$result_LatestPositionPerVehicle_VehicleID=$result_LatestPositionPerVehicle->VehicleID;
$result_LatestPositionPerVehicle_DriverID=$result_LatestPositionPerVehicle->DriverID;
$result_LatestPositionPerVehicle_OriginalDriverID=$result_LatestPositionPerVehicle->OriginalDriverID;
$result_LatestPositionPerVehicle_BlockSeq=$result_LatestPositionPerVehicle->BlockSeq;
$result_LatestPositionPerVehicle_Time=$result_LatestPositionPerVehicle->Time;
$date_Time = new DateTime($result_LatestPositionPerVehicle_Time);
$result_LatestPositionPerVehicle_Latitude=$result_LatestPositionPerVehicle->Latitude;
$result_LatestPositionPerVehicle_Longitude=$result_LatestPositionPerVehicle->Longitude;
$result_LatestPositionPerVehicle_Altitude=$result_LatestPositionPerVehicle->Altitude;
$result_LatestPositionPerVehicle_Heading=$result_LatestPositionPerVehicle->Heading;
$result_LatestPositionPerVehicle_Satellites=$result_LatestPositionPerVehicle->Satellites;
$result_LatestPositionPerVehicle_HDOP=$result_LatestPositionPerVehicle->HDOP;
$result_LatestPositionPerVehicle_AgeOfReading=$result_LatestPositionPerVehicle->AgeOfReading;
$result_LatestPositionPerVehicle_DistanceSinceReading=$result_LatestPositionPerVehicle->DistanceSinceReading;
$result_LatestPositionPerVehicle_Velocity=$result_LatestPositionPerVehicle->Velocity;
$result_LatestPositionPerVehicle_IsAVL=$result_LatestPositionPerVehicle->IsAVL;
$result_LatestPositionPerVehicle_CoordValid=$result_LatestPositionPerVehicle->CoordValid;
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
?>