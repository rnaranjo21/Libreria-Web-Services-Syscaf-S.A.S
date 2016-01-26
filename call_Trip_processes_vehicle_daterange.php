<?php
include("Soap_header_token_TripProcesses.php");
include('call_core_orgid.php');
try {
$StartDateTime='2015-12-17T00:00:00';
$EndDateTime='2015-12-17T23:59:59';

$param_Trip_vehicle_Range=array("VehicleID"=>806,"StartDateTime"=>$StartDateTime,"EndDateTime"=>$EndDateTime);
$response_Trip_vehicle_Range =$TripsProcessesWS ->__soapCall('GetTripsForVehicleAndDateRange',array($param_Trip_vehicle_Range));
echo '<pre>';
//print_r($response_Trip_vehicle_Range);

$Result_trip_vehicle_range=$response_Trip_vehicle_Range->GetTripsForVehicleAndDateRangeResult->Trip;
for($i=0;$i<count($Result_trip_vehicle_range);$i++){
$Result_trip_vehicle_range_ID=$Result_trip_vehicle_range[$i]->ID;
$Result_trip_vehicle_range_VehicleID=$Result_trip_vehicle_range[$i]->VehicleID;
$Result_trip_vehicle_range_TripNo=$Result_trip_vehicle_range[$i]->TripNo;
$Result_trip_vehicle_range_DriverID=$Result_trip_vehicle_range[$i]->DriverID;
$Result_trip_vehicle_range_OriginalDriverID=$Result_trip_vehicle_range[$i]->OriginalDriverID;
$Result_trip_vehicle_range_TripStart=$Result_trip_vehicle_range[$i]->TripStart;
$date_Trip_start = new DateTime($Result_trip_vehicle_range_TripStart);
$Result_trip_vehicle_range_TripEnd=$Result_trip_vehicle_range[$i]->TripEnd;
$date_Trip_end = new DateTime($Result_trip_vehicle_range_TripEnd);
$Result_trip_vehicle_range_CategoryID=$Result_trip_vehicle_range[$i]->CategoryID;
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
print_r("ID.".$Result_trip_vehicle_range_ID);
print "\t";

print_r("VehicleID.".$Result_trip_vehicle_range_VehicleID);
print "\t";
print_r("TripNo.".$Result_trip_vehicle_range_TripNo);
print "\t";
print_r("DriverID.".$Result_trip_vehicle_range_DriverID);
print "\t";
print_r("OriginalDriverID.".$Result_trip_vehicle_range_OriginalDriverID);
print "\t";
print "TripStart.".$date_Trip_start->format('d/m/Y (H:i:s)');
print "\t";
print "TripEnd.".$date_Trip_end->format('d/m/Y (H:i:s)');
print "\t";
echo '<br>';
}



?>