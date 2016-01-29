<?php
include("Soap_header_token_Positioning.php");
include('call_core_orgid.php');
try {
$StartDateTime='2016-01-21T00:00:00';
$EndDateTime='2016-01-21T23:59:59';
$param_GPSPositionsForVehicleInDateRange=array("VehicleID"=>739,"StartDate"=>$StartDateTime ,"EndDate"=>$EndDateTime);
$response_GPSPositionsForVehicleInDateRange =$PositioningWS ->__soapCall('GetGPSPositionsForVehicleInDateRange',array($param_GPSPositionsForVehicleInDateRange));

echo '<pre>';
//print_r($response_GPSPositionsForVehicleInDateRange);
$result_GPSPositionsForVehicleInDateRange=$response_GPSPositionsForVehicleInDateRange->GetGPSPositionsForVehicleInDateRangeResult->GPSPosition;
for ($i=0; $i <count($result_GPSPositionsForVehicleInDateRange) ; $i++) { 
$result_GPSPositionsForVehicleInDateRange_ID=$result_GPSPositionsForVehicleInDateRange[$i]->ID;	
$result_GPSPositionsForVehicleInDateRange_VehicleID=$result_GPSPositionsForVehicleInDateRange[$i]->VehicleID;	
$result_GPSPositionsForVehicleInDateRange_DriverID=$result_GPSPositionsForVehicleInDateRange[$i]->DriverID;	
$result_GPSPositionsForVehicleInDateRange_OriginalDriverID=$result_GPSPositionsForVehicleInDateRange[$i]->OriginalDriverID;	
$result_GPSPositionsForVehicleInDateRange_BlockSeq=$result_GPSPositionsForVehicleInDateRange[$i]->BlockSeq;	
$result_GPSPositionsForVehicleInDateRange_Time=$result_GPSPositionsForVehicleInDateRange[$i]->Time;	
$date_Time = new DateTime($result_GPSPositionsForVehicleInDateRange_Time);
$result_GPSPositionsForVehicleInDateRange_Latitude=$result_GPSPositionsForVehicleInDateRange[$i]->Latitude;
$result_GPSPositionsForVehicleInDateRange_Longitude=$result_GPSPositionsForVehicleInDateRange[$i]->Longitude;
$result_GPSPositionsForVehicleInDateRange_Altitude=$result_GPSPositionsForVehicleInDateRange[$i]->Altitude;
$result_GPSPositionsForVehicleInDateRange_Heading=$result_GPSPositionsForVehicleInDateRange[$i]->Heading;
$result_GPSPositionsForVehicleInDateRange_Satellites=$result_GPSPositionsForVehicleInDateRange[$i]->Satellites;
$result_GPSPositionsForVehicleInDateRange_HDOP=$result_GPSPositionsForVehicleInDateRange[$i]->HDOP;
$result_GPSPositionsForVehicleInDateRange_AgeOfReading=$result_GPSPositionsForVehicleInDateRange[$i]->AgeOfReading;
$result_GPSPositionsForVehicleInDateRange_DistanceSinceReading=$result_GPSPositionsForVehicleInDateRange[$i]->DistanceSinceReading;
$result_GPSPositionsForVehicleInDateRange_Velocity=$result_GPSPositionsForVehicleInDateRange[$i]->Velocity;
$result_GPSPositionsForVehicleInDateRange_IsAVL=$result_GPSPositionsForVehicleInDateRange[$i]->IsAVL;
$result_GPSPositionsForVehicleInDateRange_CoordValid=$result_GPSPositionsForVehicleInDateRange[$i]->CoordValid;


print_r("ID.".$result_GPSPositionsForVehicleInDateRange_ID);
print "\t";
print_r("VehicleID.".$result_GPSPositionsForVehicleInDateRange_VehicleID);
print "\t";
print_r("DriverID.".$result_GPSPositionsForVehicleInDateRange_DriverID);
print "\t";
print_r("OriginalDriverID.".$result_GPSPositionsForVehicleInDateRange_OriginalDriverID);
print "\t";
print_r("BlockSeq.".$result_GPSPositionsForVehicleInDateRange_BlockSeq);
print "\t";
print "Time.".$date_Time->format('d/m/Y (H:i:s)');
print "\t";
print_r("Latitude.".$result_GPSPositionsForVehicleInDateRange_Latitude);
print "\t";
print_r("Longitude.".$result_GPSPositionsForVehicleInDateRange_Longitude);
print "\t";
print_r("Altitude.".$result_GPSPositionsForVehicleInDateRange_Altitude);
print "\t";
print_r("Heading.".$result_GPSPositionsForVehicleInDateRange_Heading);
print "\t";
print_r("Satellites.".$result_GPSPositionsForVehicleInDateRange_Satellites);
print "\t";
print_r("HDOP.".$result_GPSPositionsForVehicleInDateRange_HDOP);
print "\t";
print_r("AgeOfReading.".$result_GPSPositionsForVehicleInDateRange_AgeOfReading);
print "\t";
print_r("DistanceSinceReading.".$result_GPSPositionsForVehicleInDateRange_DistanceSinceReading);
print "\t";
print_r("Velocity.".$result_GPSPositionsForVehicleInDateRange_Velocity);
print "\t";
print_r("IsAVL.".$result_GPSPositionsForVehicleInDateRange_IsAVL);
print "\t";
print_r("CoordValid.".$result_GPSPositionsForVehicleInDateRange_CoordValid);
print "\t";
echo '<br>';
}

} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
?>