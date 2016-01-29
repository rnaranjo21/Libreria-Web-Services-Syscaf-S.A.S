<?php
include("Soap_header_token_Positioning.php");
include('call_core_orgid.php');
try {
$StartDateTime='2016-01-18T00:00:00';
$EndDateTime='2016-01-18T01:59:00';
$param_GPSPositionsInDateRange=array("StartDate"=>$StartDateTime,"EndDate"=>$EndDateTime);
$response_GPSPositionsInDateRange=$PositioningWS ->__soapCall('GetGPSPositionsInDateRange',array($param_GPSPositionsInDateRange));

echo '<pre>';
//print_r($response_GPSPositionsInDateRange);

$result_GPSPositionsInDateRange=$response_GPSPositionsInDateRange->GetGPSPositionsInDateRangeResult->GPSPosition;
for ($i=0; $i <count($result_GPSPositionsInDateRange) ; $i++) { 
$result_GPSPositionsInDateRange_ID=$result_GPSPositionsInDateRange[$i]->ID;	
$result_GPSPositionsInDateRange_VehicleID=$result_GPSPositionsInDateRange[$i]->VehicleID;	
$result_GPSPositionsInDateRange_DriverID=$result_GPSPositionsInDateRange[$i]->DriverID;	
$result_GPSPositionsInDateRange_OriginalDriverID=$result_GPSPositionsInDateRange[$i]->OriginalDriverID;	
$result_GPSPositionsInDateRange_BlockSeq=$result_GPSPositionsInDateRange[$i]->BlockSeq;	
$result_GPSPositionsInDateRange_Time=$result_GPSPositionsInDateRange[$i]->Time;	
$date_Time = new DateTime($result_GPSPositionsInDateRange_Time);
$result_GPSPositionsInDateRange_Latitude=$result_GPSPositionsInDateRange[$i]->Latitude;
$result_GPSPositionsInDateRange_Longitude=$result_GPSPositionsInDateRange[$i]->Longitude;
$result_GPSPositionsInDateRange_Altitude=$result_GPSPositionsInDateRange[$i]->Altitude;
$result_GPSPositionsInDateRange_Heading=$result_GPSPositionsInDateRange[$i]->Heading;
$result_GPSPositionsInDateRange_Satellites=$result_GPSPositionsInDateRange[$i]->Satellites;
$result_GPSPositionsInDateRange_HDOP=$result_GPSPositionsInDateRange[$i]->HDOP;
$result_GPSPositionsInDateRange_AgeOfReading=$result_GPSPositionsInDateRange[$i]->AgeOfReading;
$result_GPSPositionsInDateRange_DistanceSinceReading=$result_GPSPositionsInDateRange[$i]->DistanceSinceReading;
$result_GPSPositionsInDateRange_Velocity=$result_GPSPositionsInDateRange[$i]->Velocity;
$result_GPSPositionsInDateRange_IsAVL=$result_GPSPositionsInDateRange[$i]->IsAVL;
$result_GPSPositionsInDateRange_CoordValid=$result_GPSPositionsInDateRange[$i]->CoordValid;


print_r("ID.".$result_GPSPositionsInDateRange_ID);
print "\t";
print_r("VehicleID.".$result_GPSPositionsInDateRange_VehicleID);
print "\t";
print_r("DriverID.".$result_GPSPositionsInDateRange_DriverID);
print "\t";
print_r("OriginalDriverID.".$result_GPSPositionsInDateRange_OriginalDriverID);
print "\t";
print_r("BlockSeq.".$result_GPSPositionsInDateRange_BlockSeq);
print "\t";
print "Time.".$date_Time->format('d/m/Y (H:i:s)');
print "\t";
print_r("Latitude.".$result_GPSPositionsInDateRange_Latitude);
print "\t";
print_r("Longitude.".$result_GPSPositionsInDateRange_Longitude);
print "\t";
print_r("Altitude.".$result_GPSPositionsInDateRange_Altitude);
print "\t";
print_r("Heading.".$result_GPSPositionsInDateRange_Heading);
print "\t";
print_r("Satellites.".$result_GPSPositionsInDateRange_Satellites);
print "\t";
print_r("HDOP.".$result_GPSPositionsInDateRange_HDOP);
print "\t";
print_r("AgeOfReading.".$result_GPSPositionsInDateRange_AgeOfReading);
print "\t";
print_r("DistanceSinceReading.".$result_GPSPositionsInDateRange_DistanceSinceReading);
print "\t";
print_r("Velocity.".$result_GPSPositionsInDateRange_Velocity);
print "\t";
print_r("IsAVL.".$result_GPSPositionsInDateRange_IsAVL);
print "\t";
print_r("CoordValid.".$result_GPSPositionsInDateRange_CoordValid);
print "\t";
echo '<br>';
}
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}


?>