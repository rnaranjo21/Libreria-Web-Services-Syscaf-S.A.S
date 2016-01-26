<?php
include("Soap_header_token_TripProcesses.php");
include('call_core_orgid.php');
try {
$StartDateTime='2015-12-17T00:00:00';

$EndDateTime='2015-12-17T23:59:59';

$param_Trip_Range=array("StartDateTime"=>$StartDateTime,"EndDateTime"=>$EndDateTime);
$response_Trip_Range =$TripsProcessesWS ->__soapCall('GetTripsForDateRange',array($param_Trip_Range));
echo '<pre>';
//print_r($response_Trip_Range);
$Result_trip_range=$response_Trip_Range->GetTripsForDateRangeResult->Trip;
for($i=0;$i<count($Result_trip_range);$i++){
$Result_trip_range_ID=$Result_trip_range[$i]->ID;
$Result_trip_range_VehicleID=$Result_trip_range[$i]->VehicleID;
$Result_trip_range_TripNo=$Result_trip_range[$i]->TripNo;
$Result_trip_range_DriverID=$Result_trip_range[$i]->DriverID;
$Result_trip_range_OriginalDriverID=$Result_trip_range[$i]->OriginalDriverID;
$Result_trip_range_TripStart=$Result_trip_range[$i]->TripStart;
$date_Trip_start = new DateTime($Result_trip_range_TripStart);
$Result_trip_range_TripEnd=$Result_trip_range[$i]->TripEnd;
$date_Trip_end = new DateTime($Result_trip_range_TripEnd);
$Result_trip_range_CategoryID=$Result_trip_range[$i]->CategoryID;

} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
print_r("ID.".$Result_trip_range_ID);
print "\t";
print_r("VehicleID.".$Result_trip_range_VehicleID);
print "\t";
print_r("TripNo.".$Result_trip_range_TripNo);
print "\t";
print_r("DriverID.".$Result_trip_range_DriverID);
print "\t";
print_r("OriginalDriverID.".$Result_trip_range_OriginalDriverID);
print "\t";
print "TripStart.".$date_Trip_start->format('d/m/Y (H:i:s)');
print "\t";
print "TripEnd.".$date_Trip_end->format('d/m/Y (H:i:s)');
print "\t";
print_r("TripEnd.".$Result_trip_range_TripEnd);
print "\t";
 echo '<br>';
}
?>