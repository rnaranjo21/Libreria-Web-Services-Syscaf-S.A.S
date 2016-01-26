<?php
include("Soap_header_token_Positioning.php");
include('call_core_orgid.php');
try {
$param_Latest1GPSPositionForVehicle=array("VehicleID"=>921);
$response_Latest1GPSPositionForVehicle=$PositioningWS ->__soapCall('GetLatest1GPSPositionForVehicle',array($param_Latest1GPSPositionForVehicle));

echo '<pre>';
//print_r($response_Latest1GPSPositionForVehicle);

$result_Latest1GPSPositionForVehicle=$response_Latest1GPSPositionForVehicle->GetLatest1GPSPositionForVehicleResult;
$result_Latest1GPSPositionForVehicle_ID=$result_Latest1GPSPositionForVehicle->ID;
$result_Latest1GPSPositionForVehicle_VehicleID=$result_Latest1GPSPositionForVehicle->VehicleID;
$result_Latest1GPSPositionForVehicle_DriverID=$result_Latest1GPSPositionForVehicle->DriverID;
$result_Latest1GPSPositionForVehicle_OriginalDriverID=$result_Latest1GPSPositionForVehicle->OriginalDriverID;
$result_Latest1GPSPositionForVehicle_BlockSeq=$result_Latest1GPSPositionForVehicle->BlockSeq;
$result_Latest1GPSPositionForVehicle_Time=$result_Latest1GPSPositionForVehicle->Time;
$date_Time = new DateTime($result_Latest1GPSPositionForVehicle_Time);
$result_Latest1GPSPositionForVehicle_Latitude=$result_Latest1GPSPositionForVehicle->Latitude;
$result_Latest1GPSPositionForVehicle_Longitude=$result_Latest1GPSPositionForVehicle->Longitude;
$result_Latest1GPSPositionForVehicle_Altitude=$result_Latest1GPSPositionForVehicle->Altitude;
$result_Latest1GPSPositionForVehicle_Heading=$result_Latest1GPSPositionForVehicle->Heading;
$result_Latest1GPSPositionForVehicle_Satellites=$result_Latest1GPSPositionForVehicle->Satellites;
$result_Latest1GPSPositionForVehicle_HDOP=$result_Latest1GPSPositionForVehicle->HDOP;
$result_Latest1GPSPositionForVehicle_AgeOfReading=$result_Latest1GPSPositionForVehicle->AgeOfReading;
$result_Latest1GPSPositionForVehicle_DistanceSinceReading=$result_Latest1GPSPositionForVehicle->DistanceSinceReading;
$result_Latest1GPSPositionForVehicle_Velocity=$result_Latest1GPSPositionForVehicle->Velocity;
$result_Latest1GPSPositionForVehicle_IsAVL=$result_Latest1GPSPositionForVehicle->IsAVL;
$result_Latest1GPSPositionForVehicle_CoordValid=$result_Latest1GPSPositionForVehicle->CoordValid;
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}

print_r("ID.".$result_Latest1GPSPositionForVehicle_ID);
print "\t";
print_r("VehicleID.".$result_Latest1GPSPositionForVehicle_VehicleID);
print "\t";
print_r("DriverID.".$result_Latest1GPSPositionForVehicle_DriverID);
print "\t";
print_r("OriginalDriverID.".$result_Latest1GPSPositionForVehicle_OriginalDriverID);
print "\t";
print_r("BlockSeq.".$result_Latest1GPSPositionForVehicle_BlockSeq);
print "\t";
print "Time.".$date_Time->format('d/m/Y (H:i:s)');
print "\t";
print_r("Latitude.".$result_Latest1GPSPositionForVehicle_Latitude);
print "\t";
print_r("Longitude.".$result_Latest1GPSPositionForVehicle_Longitude);
print "\t";
print_r("Heading.".$result_Latest1GPSPositionForVehicle_Heading);
print "\t";
print_r("Satellites.".$result_Latest1GPSPositionForVehicle_Satellites);
print "\t";
print_r("HDOP.".$result_Latest1GPSPositionForVehicle_HDOP);
print "\t";
print_r("AgeOfReading.".$result_Latest1GPSPositionForVehicle_AgeOfReading);
print "\t";
print_r("DistanceSinceReading.".$result_Latest1GPSPositionForVehicle_DistanceSinceReading);
print "\t";
print_r("Velocity.".$result_Latest1GPSPositionForVehicle_Velocity);
print "\t";
print_r("IsAVL.".$result_Latest1GPSPositionForVehicle_IsAVL);
print "\t";
print_r("CoordValid.".$result_Latest1GPSPositionForVehicle_CoordValid);
print "\t";
echo '<br>';

?>