<?php
include("Soap_header_token_Positioning.php");
include('call_core_orgid.php');
try {
$param_PositionsForSpecifiedVehiclesSinceID=array("fromID"=>900647349,"VehicleIDs"=>921);
$response_PositionsForSpecifiedVehiclesSinceID=$PositioningWS ->__soapCall('GetGPSPositionsForSpecifiedVehiclesSinceID',array($param_PositionsForSpecifiedVehiclesSinceID));

echo '<pre>';
//print_r($response_PositionsForSpecifiedVehiclesSinceID);
$result_PositionsForSpecifiedVehiclesSinceID=$response_PositionsForSpecifiedVehiclesSinceID->GetGPSPositionsForSpecifiedVehiclesSinceIDResult->GPSPosition;
for ($i=0; $i <count($result_PositionsForSpecifiedVehiclesSinceID) ; $i++) { 
$result_PositionsForSpecifiedVehiclesSinceID_ID=$result_PositionsForSpecifiedVehiclesSinceID[$i]->ID;	
$result_PositionsForSpecifiedVehiclesSinceID_VehicleID=$result_PositionsForSpecifiedVehiclesSinceID[$i]->VehicleID;	
$result_PositionsForSpecifiedVehiclesSinceID_DriverID=$result_PositionsForSpecifiedVehiclesSinceID[$i]->DriverID;	
$result_PositionsForSpecifiedVehiclesSinceID_OriginalDriverID=$result_PositionsForSpecifiedVehiclesSinceID[$i]->OriginalDriverID;	
$result_PositionsForSpecifiedVehiclesSinceID_BlockSeq=$result_PositionsForSpecifiedVehiclesSinceID[$i]->BlockSeq;	
$result_PositionsForSpecifiedVehiclesSinceID_Time=$result_PositionsForSpecifiedVehiclesSinceID[$i]->Time;	
$date_Time = new DateTime($result_PositionsForSpecifiedVehiclesSinceID_Time);
$result_PositionsForSpecifiedVehiclesSinceID_Latitude=$result_PositionsForSpecifiedVehiclesSinceID[$i]->Latitude;
$result_PositionsForSpecifiedVehiclesSinceID_Longitude=$result_PositionsForSpecifiedVehiclesSinceID[$i]->Longitude;
$result_PositionsForSpecifiedVehiclesSinceID_Altitude=$result_PositionsForSpecifiedVehiclesSinceID[$i]->Altitude;
$result_PositionsForSpecifiedVehiclesSinceID_Heading=$result_PositionsForSpecifiedVehiclesSinceID[$i]->Heading;
$result_PositionsForSpecifiedVehiclesSinceID_Satellites=$result_PositionsForSpecifiedVehiclesSinceID[$i]->Satellites;
$result_PositionsForSpecifiedVehiclesSinceID_HDOP=$result_PositionsForSpecifiedVehiclesSinceID[$i]->HDOP;
$result_PositionsForSpecifiedVehiclesSinceID_AgeOfReading=$result_PositionsForSpecifiedVehiclesSinceID[$i]->AgeOfReading;
$result_PositionsForSpecifiedVehiclesSinceID_DistanceSinceReading=$result_PositionsForSpecifiedVehiclesSinceID[$i]->DistanceSinceReading;
$result_PositionsForSpecifiedVehiclesSinceID_Velocity=$result_PositionsForSpecifiedVehiclesSinceID[$i]->Velocity;
$result_PositionsForSpecifiedVehiclesSinceID_IsAVL=$result_PositionsForSpecifiedVehiclesSinceID[$i]->IsAVL;
$result_PositionsForSpecifiedVehiclesSinceID_CoordValid=$result_PositionsForSpecifiedVehiclesSinceID[$i]->CoordValid;
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}

print_r("ID.".$result_PositionsForSpecifiedVehiclesSinceID_ID);
print "\t";
print_r("VehicleID.".$result_PositionsForSpecifiedVehiclesSinceID_VehicleID);
print "\t";
print_r("DriverID.".$result_PositionsForSpecifiedVehiclesSinceID_DriverID);
print "\t";
print_r("OriginalDriverID.".$result_PositionsForSpecifiedVehiclesSinceID_OriginalDriverID);
print "\t";
print_r("BlockSeq.".$result_PositionsForSpecifiedVehiclesSinceID_BlockSeq);
print "\t";
print "Time.".$date_Time->format('d/m/Y (H:i:s)');
print "\t";
print_r("Latitude.".$result_PositionsForSpecifiedVehiclesSinceID_Latitude);
print "\t";
print_r("Longitude.".$result_PositionsForSpecifiedVehiclesSinceID_Longitude);
print "\t";
print_r("Altitude.".$result_PositionsForSpecifiedVehiclesSinceID_Altitude);
print "\t";
print_r("Heading.".$result_PositionsForSpecifiedVehiclesSinceID_Heading);
print "\t";
print_r("Satellites.".$result_PositionsForSpecifiedVehiclesSinceID_Satellites);
print "\t";
print_r("HDOP.".$result_PositionsForSpecifiedVehiclesSinceID_HDOP);
print "\t";
print_r("AgeOfReading.".$result_PositionsForSpecifiedVehiclesSinceID_AgeOfReading);
print "\t";
print_r("DistanceSinceReading.".$result_PositionsForSpecifiedVehiclesSinceID_DistanceSinceReading);
print "\t";
print_r("Velocity.".$result_PositionsForSpecifiedVehiclesSinceID_Velocity);
print "\t";
print_r("IsAVL.".$result_PositionsForSpecifiedVehiclesSinceID_IsAVL);
print "\t";
print_r("CoordValid.".$result_PositionsForSpecifiedVehiclesSinceID_CoordValid);
print "\t";
echo '<br>';
}
?>