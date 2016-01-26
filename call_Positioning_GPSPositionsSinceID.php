<?php
include("Soap_header_token_Positioning.php");
include('call_core_orgid.php');
try {
$param_GPSPositionsSinceID=array("fromID"=>904578391);
$response_GPSPositionsSinceID=$PositioningWS ->__soapCall('GetGPSPositionsSinceID',array($param_GPSPositionsSinceID));

echo '<pre>';
//print_r($response_GPSPositionsSinceID);

$result_GPSPositionsSinceID=$response_GPSPositionsSinceID->GetGPSPositionsSinceIDResult->GPSPosition;
for ($i=0; $i <count($result_GPSPositionsSinceID) ; $i++) { 
$result_GPSPositionsSinceID_ID=$result_GPSPositionsSinceID[$i]->ID;
$result_GPSPositionsSinceID_VehicleID=$result_GPSPositionsSinceID[$i]->VehicleID;
$result_GPSPositionsSinceID_DriverID=$result_GPSPositionsSinceID[$i]->DriverID;
$result_GPSPositionsSinceID_OriginalDriverID=$result_GPSPositionsSinceID[$i]->OriginalDriverID;
$result_GPSPositionsSinceID_BlockSeq=$result_GPSPositionsSinceID[$i]->BlockSeq;
$result_GPSPositionsSinceID_Time=$result_GPSPositionsSinceID[$i]->Time;
$date_Time = new DateTime($result_GPSPositionsSinceID_Time);
$result_GPSPositionsSinceID_Latitude=$result_GPSPositionsSinceID[$i]->Latitude;
$result_GPSPositionsSinceID_Longitude=$result_GPSPositionsSinceID[$i]->Longitude;
$result_GPSPositionsSinceID_Altitude=$result_GPSPositionsSinceID[$i]->Altitude;
$result_GPSPositionsSinceID_Heading=$result_GPSPositionsSinceID[$i]->Heading;
$result_GPSPositionsSinceID_Satellites=$result_GPSPositionsSinceID[$i]->Satellites;
$result_GPSPositionsSinceID_HDOP=$result_GPSPositionsSinceID[$i]->HDOP;
$result_GPSPositionsSinceID_AgeOfReading=$result_GPSPositionsSinceID[$i]->AgeOfReading;
$result_GPSPositionsSinceID_DistanceSinceReading=$result_GPSPositionsSinceID[$i]->DistanceSinceReading;
$result_GPSPositionsSinceID_Velocity=$result_GPSPositionsSinceID[$i]->Velocity;
$result_GPSPositionsSinceID_IsAVL=$result_GPSPositionsSinceID[$i]->IsAVL;
$result_GPSPositionsSinceID_CoordValid=$result_GPSPositionsSinceID[$i]->CoordValid;

} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}

print_r("ID.".$result_GPSPositionsSinceID_ID);
print "\t";
print_r("VehicleID.".$result_GPSPositionsSinceID_VehicleID);
print "\t";
print_r("DriverID.".$result_GPSPositionsSinceID_DriverID);
print "\t";
print_r("OriginalDriverID.".$result_GPSPositionsSinceID_OriginalDriverID);
print "\t";
print_r("BlockSeq.".$result_GPSPositionsSinceID_BlockSeq);
print "\t";
print "Time.".$date_Time->format('d/m/Y (H:i:s)');
print "\t";
print_r("Latitude.".$result_GPSPositionsSinceID_Latitude);
print "\t";
print_r("Longitude.".$result_GPSPositionsSinceID_Longitude);
print "\t";
print_r("Heading.".$result_GPSPositionsSinceID_Heading);
print "\t";
print_r("Satellites.".$result_GPSPositionsSinceID_Satellites);
print "\t";
print_r("HDOP.".$result_GPSPositionsSinceID_HDOP);
print "\t";
print_r("AgeOfReading.".$result_GPSPositionsSinceID_AgeOfReading);
print "\t";
print_r("DistanceSinceReading.".$result_GPSPositionsSinceID_DistanceSinceReading);
print "\t";
print_r("Velocity.".$result_GPSPositionsSinceID_Velocity);
print "\t";
print_r("IsAVL.".$result_GPSPositionsSinceID_IsAVL);
print "\t";
print_r("CoordValid.".$result_GPSPositionsSinceID_CoordValid);
print "\t";
echo '<br>';
}
?>