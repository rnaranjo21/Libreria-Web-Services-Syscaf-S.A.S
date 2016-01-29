<?php
include("Soap_header_token_Positioning.php");
include('call_core_orgid.php');
try {

$DateTime='2016-01-01T00:00:00';
$param_GPSPositionsForVehicleSinceDate=array("VehicleID"=>921,"LastDate"=>$DateTime);
$response_GPSPositionsForVehicleSinceDate=$PositioningWS ->__soapCall('GetGPSPositionsForVehicleSinceDate',array($param_GPSPositionsForVehicleSinceDate));

echo '<pre>';
//print_r($response_GPSPositionsForVehicleSinceDate);

$result_GPSPositionsForVehicleSinceDate=$response_GPSPositionsForVehicleSinceDate->GetGPSPositionsForVehicleSinceDateResult->GPSPosition;
for ($i=0; $i <count($result_GPSPositionsForVehicleSinceDate) ; $i++) { 
$result_GPSPositionsForVehicleSinceDate_ID=$result_GPSPositionsForVehicleSinceDate[$i]->ID;	
$result_GPSPositionsForVehicleSinceDate_VehicleID=$result_GPSPositionsForVehicleSinceDate[$i]->VehicleID;	
$result_GPSPositionsForVehicleSinceDate_DriverID=$result_GPSPositionsForVehicleSinceDate[$i]->DriverID;	
$result_GPSPositionsForVehicleSinceDate_OriginalDriverID=$result_GPSPositionsForVehicleSinceDate[$i]->OriginalDriverID;	
$result_GPSPositionsForVehicleSinceDate_BlockSeq=$result_GPSPositionsForVehicleSinceDate[$i]->BlockSeq;	
$result_GPSPositionsForVehicleSinceDate_Time=$result_GPSPositionsForVehicleSinceDate[$i]->Time;	
$date_Time = new DateTime($result_GPSPositionsForVehicleSinceDate_Time);
$result_GPSPositionsForVehicleSinceDate_Latitude=$result_GPSPositionsForVehicleSinceDate[$i]->Latitude;
$result_GPSPositionsForVehicleSinceDate_Longitude=$result_GPSPositionsForVehicleSinceDate[$i]->Longitude;
$result_GPSPositionsForVehicleSinceDate_Altitude=$result_GPSPositionsForVehicleSinceDate[$i]->Altitude;
$result_GPSPositionsForVehicleSinceDate_Heading=$result_GPSPositionsForVehicleSinceDate[$i]->Heading;
$result_GPSPositionsForVehicleSinceDate_Satellites=$result_GPSPositionsForVehicleSinceDate[$i]->Satellites;
$result_GPSPositionsForVehicleSinceDate_HDOP=$result_GPSPositionsForVehicleSinceDate[$i]->HDOP;
$result_GPSPositionsForVehicleSinceDate_AgeOfReading=$result_GPSPositionsForVehicleSinceDate[$i]->AgeOfReading;
$result_GPSPositionsForVehicleSinceDate_DistanceSinceReading=$result_GPSPositionsForVehicleSinceDate[$i]->DistanceSinceReading;
$result_GPSPositionsForVehicleSinceDate_Velocity=$result_GPSPositionsForVehicleSinceDate[$i]->Velocity;
$result_GPSPositionsForVehicleSinceDate_IsAVL=$result_GPSPositionsForVehicleSinceDate[$i]->IsAVL;
$result_GPSPositionsForVehicleSinceDate_CoordValid=$result_GPSPositionsForVehicleSinceDate[$i]->CoordValid;

print_r("ID.".$result_GPSPositionsForVehicleSinceDate_ID);
print "\t";
print_r("VehicleID.".$result_GPSPositionsForVehicleSinceDate_VehicleID);
print "\t";
print_r("DriverID.".$result_GPSPositionsForVehicleSinceDate_DriverID);
print "\t";
print_r("OriginalDriverID.".$result_GPSPositionsForVehicleSinceDate_OriginalDriverID);
print "\t";
print_r("BlockSeq.".$result_GPSPositionsForVehicleSinceDate_BlockSeq);
print "\t";
print "Time.".$date_Time->format('d/m/Y (H:i:s)');
print "\t";
print_r("Latitude.".$result_GPSPositionsForVehicleSinceDate_Latitude);
print "\t";
print_r("Longitude.".$result_GPSPositionsForVehicleSinceDate_Longitude);
print "\t";
print_r("Altitude.".$result_GPSPositionsForVehicleSinceDate_Altitude);
print "\t";
print_r("Heading.".$result_GPSPositionsForVehicleSinceDate_Heading);
print "\t";
print_r("Satellites.".$result_GPSPositionsForVehicleSinceDate_Satellites);
print "\t";
print_r("HDOP.".$result_GPSPositionsForVehicleSinceDate_HDOP);
print "\t";
print_r("AgeOfReading.".$result_GPSPositionsForVehicleSinceDate_AgeOfReading);
print "\t";
print_r("DistanceSinceReading.".$result_GPSPositionsForVehicleSinceDate_DistanceSinceReading);
print "\t";
print_r("Velocity.".$result_GPSPositionsForVehicleSinceDate_Velocity);
print "\t";
print_r("IsAVL.".$result_GPSPositionsForVehicleSinceDate_IsAVL);
print "\t";
print_r("CoordValid.".$result_GPSPositionsForVehicleSinceDate_CoordValid);
print "\t";
echo '<br>';
}
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}

?>