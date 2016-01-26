<?php
include("Soap_header_token_Positioning.php");
include('call_core_orgid.php');
try {
$param_GPSPositionsV2SinceID=array("fromID"=>904578391);
$response_GPSPositionsV2SinceID=$PositioningWS ->__soapCall('GetPositionsV2SinceID',array($param_GPSPositionsV2SinceID));

echo '<pre>';
//print_r($response_GPSPositionsSinceID);

$result_GPSPositionsV2SinceID=$response_GPSPositionsV2SinceID->GetPositionsV2SinceIDResult->GPSPositionV2;
for ($i=0; $i <count($result_GPSPositionsV2SinceID) ; $i++) { 
$result_GPSPositionsV2SinceID_ID=$result_GPSPositionsV2SinceID[$i]->ID;
$result_GPSPositionsV2SinceID_VehicleID=$result_GPSPositionsV2SinceID[$i]->VehicleID;
$result_GPSPositionsV2SinceID_DriverID=$result_GPSPositionsV2SinceID[$i]->DriverID;
$result_GPSPositionsV2SinceID_OriginalDriverID=$result_GPSPositionsV2SinceID[$i]->OriginalDriverID;
$result_GPSPositionsV2SinceID_BlockSeq=$result_GPSPositionsV2SinceID[$i]->BlockSeq;
$result_GPSPositionsV2SinceID_Time=$result_GPSPositionsV2SinceID[$i]->Time;
$date_Time = new DateTime($result_GPSPositionsV2SinceID_Time);
$result_GPSPositionsV2SinceID_Latitude=$result_GPSPositionsV2SinceID[$i]->Latitude;
$result_GPSPositionsV2SinceID_Longitude=$result_GPSPositionsV2SinceID[$i]->Longitude;
$result_GPSPositionsV2SinceID_Altitude=$result_GPSPositionsV2SinceID[$i]->Altitude;
$result_GPSPositionsV2SinceID_Heading=$result_GPSPositionsV2SinceID[$i]->Heading;
$result_GPSPositionsV2SinceID_Satellites=$result_GPSPositionsV2SinceID[$i]->Satellites;
$result_GPSPositionsV2SinceID_HDOP=$result_GPSPositionsV2SinceID[$i]->HDOP;
$result_GPSPositionsV2SinceID_AgeOfReading=$result_GPSPositionsV2SinceID[$i]->AgeOfReading;
$result_GPSPositionsV2SinceID_DistanceSinceReading=$result_GPSPositionsV2SinceID[$i]->DistanceSinceReading;
$result_GPSPositionsV2SinceID_Velocity=$result_GPSPositionsV2SinceID[$i]->Velocity;
$result_GPSPositionsV2SinceID_IsAVL=$result_GPSPositionsV2SinceID[$i]->IsAVL;
$result_GPSPositionsV2SinceID_CoordValid=$result_GPSPositionsV2SinceID[$i]->CoordValid;
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}

print_r("ID.".$result_GPSPositionsV2SinceID_ID);
print "\t";
print_r("VehicleID.".$result_GPSPositionsV2SinceID_VehicleID);
print "\t";
print_r("DriverID.".$result_GPSPositionsV2SinceID_DriverID);
print "\t";
print_r("OriginalDriverID.".$result_GPSPositionsV2SinceID_OriginalDriverID);
print "\t";
print_r("BlockSeq.".$result_GPSPositionsV2SinceID_BlockSeq);
print "\t";
print "Time.".$date_Time->format('d/m/Y (H:i:s)');
print "\t";
print_r("Latitude.".$result_GPSPositionsV2SinceID_Latitude);
print "\t";
print_r("Longitude.".$result_GPSPositionsV2SinceID_Longitude);
print "\t";
print_r("Heading.".$result_GPSPositionsV2SinceID_Heading);
print "\t";
print_r("Satellites.".$result_GPSPositionsV2SinceID_Satellites);
print "\t";
print_r("HDOP.".$result_GPSPositionsV2SinceID_HDOP);
print "\t";
print_r("AgeOfReading.".$result_GPSPositionsV2SinceID_AgeOfReading);
print "\t";
print_r("DistanceSinceReading.".$result_GPSPositionsV2SinceID_DistanceSinceReading);
print "\t";
print_r("Velocity.".$result_GPSPositionsV2SinceID_Velocity);
print "\t";
print_r("IsAVL.".$result_GPSPositionsV2SinceID_IsAVL);
print "\t";
print_r("CoordValid.".$result_GPSPositionsV2SinceID_CoordValid);
print "\t";
echo '<br>';
}
?>