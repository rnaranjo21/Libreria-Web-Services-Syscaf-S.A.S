<?php
include("Soap_header_token_Positioning.php");
include('call_core_orgid.php');
try {
$param_GPSPositionsInList=array("SpecificGPSIDs"=>array("long"=>903165361));
$response_GPSPositionsInList=$PositioningWS ->__soapCall('GetGPSPositionsInList',array($param_GPSPositionsInList));

echo '<pre>';
//print_r($response_GPSPositionsInList);

$result_GPSPositionsInList=$response_GPSPositionsInList->GetGPSPositionsInListResult->GPSPosition;

$result_GPSPositionsInList_ID=$result_GPSPositionsInList->ID;	
$result_GPSPositionsInList_VehicleID=$result_GPSPositionsInList->VehicleID;	
$result_GPSPositionsInList_DriverID=$result_GPSPositionsInList->DriverID;	
$result_GPSPositionsInList_OriginalDriverID=$result_GPSPositionsInList->OriginalDriverID;	
$result_GPSPositionsInList_BlockSeq=$result_GPSPositionsInList->BlockSeq;	
$result_GPSPositionsInList_Time=$result_GPSPositionsInList->Time;	
$date_Time = new DateTime($result_GPSPositionsInList_Time);
$result_GPSPositionsInList_Latitude=$result_GPSPositionsInList->Latitude;
$result_GPSPositionsInList_Longitude=$result_GPSPositionsInList->Longitude;
$result_GPSPositionsInList_Altitude=$result_GPSPositionsInList->Altitude;
$result_GPSPositionsInList_Heading=$result_GPSPositionsInList->Heading;
$result_GPSPositionsInList_Satellites=$result_GPSPositionsInList->Satellites;
$result_GPSPositionsInList_HDOP=$result_GPSPositionsInList->HDOP;
$result_GPSPositionsInList_AgeOfReading=$result_GPSPositionsInList->AgeOfReading;
$result_GPSPositionsInList_DistanceSinceReading=$result_GPSPositionsInList->DistanceSinceReading;
$result_GPSPositionsInList_Velocity=$result_GPSPositionsInList->Velocity;
$result_GPSPositionsInList_IsAVL=$result_GPSPositionsInList->IsAVL;
$result_GPSPositionsInList_CoordValid=$result_GPSPositionsInList->CoordValid;
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}

print_r("ID.".$result_GPSPositionsInList_ID);
print "\t";
print_r("VehicleID.".$result_GPSPositionsInList_VehicleID);
print "\t";
print_r("DriverID.".$result_GPSPositionsInList_DriverID);
print "\t";
print_r("OriginalDriverID.".$result_GPSPositionsInList_OriginalDriverID);
print "\t";
print_r("BlockSeq.".$result_GPSPositionsInList_BlockSeq);
print "\t";
print "Time.".$date_Time->format('d/m/Y (H:i:s)');
print "\t";
print_r("Latitude.".$result_GPSPositionsInList_Latitude);
print "\t";
print_r("Longitude.".$result_GPSPositionsInList_Longitude);
print "\t";
print_r("Altitude.".$result_GPSPositionsInList_Altitude);
print "\t";
print_r("Heading.".$result_GPSPositionsInList_Heading);
print "\t";
print_r("Satellites.".$result_GPSPositionsInList_Satellites);
print "\t";
print_r("HDOP.".$result_GPSPositionsInList_HDOP);
print "\t";
print_r("AgeOfReading.".$result_GPSPositionsInList_AgeOfReading);
print "\t";
print_r("DistanceSinceReading.".$result_GPSPositionsInList_DistanceSinceReading);
print "\t";
print_r("Velocity.".$result_GPSPositionsInList_Velocity);
print "\t";
print_r("IsAVL.".$result_GPSPositionsInList_IsAVL);
print "\t";
print_r("CoordValid.".$result_GPSPositionsInList_CoordValid);
print "\t";
echo '<br>';
?>