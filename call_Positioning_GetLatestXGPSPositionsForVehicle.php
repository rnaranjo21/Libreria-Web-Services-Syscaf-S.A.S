<?php
include("Soap_header_token_Positioning.php");
include('call_core_orgid.php');
try {

$param_LatestXGPSPositionsForVehicle=array("VehicleID"=>739,"X"=>1);
$response_LatestXGPSPositionsForVehicle=$PositioningWS ->__soapCall('GetLatestXGPSPositionsForVehicle',array($param_LatestXGPSPositionsForVehicle));

echo '<pre>';
//print_r($response_LatestXGPSPositionsForVehicle);


$result_LatestXGPSPositionsForVehicle=$response_LatestXGPSPositionsForVehicle->GetLatestXGPSPositionsForVehicleResult->GPSPosition;

$result_LatestXGPSPositionsForVehicle_ID=$result_LatestXGPSPositionsForVehicle->ID;
$result_LatestXGPSPositionsForVehicle_VehicleID=$result_LatestXGPSPositionsForVehicle->VehicleID;
$result_LatestXGPSPositionsForVehicle_DriverID=$result_LatestXGPSPositionsForVehicle->DriverID;
$result_LatestXGPSPositionsForVehicle_OriginalDriverID=$result_LatestXGPSPositionsForVehicle->OriginalDriverID;
$result_LatestXGPSPositionsForVehicle_BlockSeq=$result_LatestXGPSPositionsForVehicle->BlockSeq;
$result_LatestXGPSPositionsForVehicle_Time=$result_LatestXGPSPositionsForVehicle->Time;
$date_Time = new DateTime($result_LatestXGPSPositionsForVehicle_Time);
$result_LatestXGPSPositionsForVehicle_Latitude=$result_LatestXGPSPositionsForVehicle->Latitude;
$result_LatestXGPSPositionsForVehicle_Longitude=$result_LatestXGPSPositionsForVehicle->Longitude;
$result_LatestXGPSPositionsForVehicle_Altitude=$result_LatestXGPSPositionsForVehicle->Altitude;
$result_LatestXGPSPositionsForVehicle_Heading=$result_LatestXGPSPositionsForVehicle->Heading;
$result_LatestXGPSPositionsForVehicle_Satellites=$result_LatestXGPSPositionsForVehicle->Satellites;
$result_LatestXGPSPositionsForVehicle_HDOP=$result_LatestXGPSPositionsForVehicle->HDOP;
$result_LatestXGPSPositionsForVehicle_AgeOfReading=$result_LatestXGPSPositionsForVehicle->AgeOfReading;
$result_LatestXGPSPositionsForVehicle_DistanceSinceReading=$result_LatestXGPSPositionsForVehicle->DistanceSinceReading;
$result_LatestXGPSPositionsForVehicle_Velocity=$result_LatestXGPSPositionsForVehicle->Velocity;
$result_LatestXGPSPositionsForVehicle_IsAVL=$result_LatestXGPSPositionsForVehicle->IsAVL;
$result_LatestXGPSPositionsForVehicle_CoordValid=$result_LatestXGPSPositionsForVehicle->CoordValid;
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
print_r("ID.".$result_LatestXGPSPositionsForVehicle_ID);
print "\t";
print_r("VehicleID.".$result_LatestXGPSPositionsForVehicle_VehicleID);
print "\t";
print_r("DriverID.".$result_LatestXGPSPositionsForVehicle_DriverID);
print "\t";
print_r("OriginalDriverID.".$result_LatestXGPSPositionsForVehicle_OriginalDriverID);
print "\t";
print_r("BlockSeq.".$result_LatestXGPSPositionsForVehicle_BlockSeq);
print "\t";
print "Time.".$date_Time->format('d/m/Y (H:i:s)');
print "\t";
print_r("Latitude.".$result_LatestXGPSPositionsForVehicle_Latitude);
print "\t";
print_r("Longitude.".$result_LatestXGPSPositionsForVehicle_Longitude);
print "\t";
print_r("Heading.".$result_LatestXGPSPositionsForVehicle_Heading);
print "\t";
print_r("Satellites.".$result_LatestXGPSPositionsForVehicle_Satellites);
print "\t";
print_r("HDOP.".$result_LatestXGPSPositionsForVehicle_HDOP);
print "\t";
print_r("AgeOfReading.".$result_LatestXGPSPositionsForVehicle_AgeOfReading);
print "\t";
print_r("DistanceSinceReading.".$result_LatestXGPSPositionsForVehicle_DistanceSinceReading);
print "\t";
print_r("Velocity.".$result_LatestXGPSPositionsForVehicle_Velocity);
print "\t";
print_r("IsAVL.".$result_LatestXGPSPositionsForVehicle_IsAVL);
print "\t";
print_r("CoordValid.".$result_LatestXGPSPositionsForVehicle_CoordValid);
print "\t";
echo '<br>';
?>