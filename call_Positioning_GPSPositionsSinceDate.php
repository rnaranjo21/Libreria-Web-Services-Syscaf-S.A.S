<?php
include("Soap_header_token_Positioning.php");
include('call_core_orgid.php');
try {
$DateTime='2016-01-21T07:30:00';

$param_GPSPositionsSinceDate=array("LastDate"=>$DateTime);
$response_GPSPositionsSinceDate=$PositioningWS ->__soapCall('GetGPSPositionsSinceDate',array($param_GPSPositionsSinceDate));

echo '<pre>';
//print_r($response_GPSPositionsSinceDate);
$result_GPSPositionsSinceData=$response_GPSPositionsSinceDate->GetGPSPositionsSinceDateResult->GPSPosition;
for ($i=0; $i <count($result_GPSPositionsSinceData) ; $i++) { 
$result_GPSPositionsSinceData_ID=$result_GPSPositionsSinceData[$i]->ID;	
$result_GPSPositionsSinceData_VehicleID=$result_GPSPositionsSinceData[$i]->VehicleID;	
$result_GPSPositionsSinceData_DriverID=$result_GPSPositionsSinceData[$i]->DriverID;	
$result_GPSPositionsSinceData_OriginalDriverID=$result_GPSPositionsSinceData[$i]->OriginalDriverID;	
$result_GPSPositionsSinceData_BlockSeq=$result_GPSPositionsSinceData[$i]->BlockSeq;	
$result_GPSPositionsSinceData_Time=$result_GPSPositionsSinceData[$i]->Time;	
$date_Time = new DateTime($result_GPSPositionsSinceData_Time);
$result_GPSPositionsSinceData_Latitude=$result_GPSPositionsSinceData[$i]->Latitude;
$result_GPSPositionsSinceData_Longitude=$result_GPSPositionsSinceData[$i]->Longitude;
$result_GPSPositionsSinceData_Altitude=$result_GPSPositionsSinceData[$i]->Altitude;
$result_GPSPositionsSinceData_Heading=$result_GPSPositionsSinceData[$i]->Heading;
$result_GPSPositionsSinceData_Satellites=$result_GPSPositionsSinceData[$i]->Satellites;
$result_GPSPositionsSinceData_HDOP=$result_GPSPositionsSinceData[$i]->HDOP;
$result_GPSPositionsSinceData_AgeOfReading=$result_GPSPositionsSinceData[$i]->AgeOfReading;
$result_GPSPositionsSinceData_DistanceSinceReading=$result_GPSPositionsSinceData[$i]->DistanceSinceReading;
$result_GPSPositionsSinceData_Velocity=$result_GPSPositionsSinceData[$i]->Velocity;
$result_GPSPositionsSinceData_IsAVL=$result_GPSPositionsSinceData[$i]->IsAVL;
$result_GPSPositionsSinceData_CoordValid=$result_GPSPositionsSinceData[$i]->CoordValid;
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}

print_r("ID.".$result_GPSPositionsSinceData_ID);
print "\t";
print_r("VehicleID.".$result_GPSPositionsSinceData_VehicleID);
print "\t";
print_r("DriverID.".$result_GPSPositionsSinceData_DriverID);
print "\t";
print_r("OriginalDriverID.".$result_GPSPositionsSinceData_OriginalDriverID);
print "\t";
print_r("BlockSeq.".$result_GPSPositionsSinceData_BlockSeq);
print "\t";
print "Time.".$date_Time->format('d/m/Y (H:i:s)');
print "\t";
print_r("Latitude.".$result_GPSPositionsSinceData_Latitude);
print "\t";
print_r("Longitude.".$result_GPSPositionsSinceData_Longitude);
print "\t";
print_r("Altitude.".$result_GPSPositionsSinceData_Altitude);
print "\t";
print_r("Heading.".$result_GPSPositionsSinceData_Heading);
print "\t";
print_r("Satellites.".$result_GPSPositionsSinceData_Satellites);
print "\t";
print_r("HDOP.".$result_GPSPositionsSinceData_HDOP);
print "\t";
print_r("AgeOfReading.".$result_GPSPositionsSinceData_AgeOfReading);
print "\t";
print_r("DistanceSinceReading.".$result_GPSPositionsSinceData_DistanceSinceReading);
print "\t";
print_r("Velocity.".$result_GPSPositionsSinceData_Velocity);
print "\t";
print_r("IsAVL.".$result_GPSPositionsSinceData_IsAVL);
print "\t";
print_r("CoordValid.".$result_GPSPositionsSinceData_CoordValid);
print "\t";
echo '<br>';
}

?>