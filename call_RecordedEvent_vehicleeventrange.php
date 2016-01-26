<?php
include("Soap_header_token_RecordedEnventProcesses.php");
include('call_core_orgid.php');
try {
$StartDateTime='2016-01-14T00:00:00';
$EndDateTime='2016-01-14T23:59:59';
$param_recordedEvent_vehicle=array("VehicleID"=>921,"StartDateTime"=>$StartDateTime,"EndDateTime"=>$EndDateTime,"EventDescriptionIDs"=>array("short"=>6 ));
$response_recordedEvent_vehicle=$RecordedEventProcessesWS->__soapCall('GetVehicleEventsInDateRange',array($param_recordedEvent_vehicle));
echo '<pre>';
//print_r($response_recordedEvent_vehicle);
$result_recordedEvent_vehicle=$response_recordedEvent_vehicle->GetVehicleEventsInDateRangeResult->RecordedEvent;
for($i=0;$i<count($result_recordedEvent_vehicle);$i++){
$result_recordedEvent_vehicle_ID=$result_recordedEvent_vehicle[$i]->ID;
$result_recordedEvent_vehicle_VehicleID=$result_recordedEvent_vehicle[$i]->VehicleID;
$result_recordedEvent_vehicle_EventID=$result_recordedEvent_vehicle[$i]->EventID;
$result_recordedEvent_vehicle_EventType=$result_recordedEvent_vehicle[$i]->EventType;
$result_recordedEvent_vehicle_StartSeq=$result_recordedEvent_vehicle[$i]->StartSeq;
$result_recordedEvent_vehicle_EndSeq=$result_recordedEvent_vehicle[$i]->EndSeq;
$result_recordedEvent_vehicle_DriverID=$result_recordedEvent_vehicle[$i]->DriverID;
$result_recordedEvent_vehicle_OriginalDriverID=$result_recordedEvent_vehicle[$i]->OriginalDriverID;
$result_recordedEvent_vehicle_Start=$result_recordedEvent_vehicle[$i]->Start;
$date_RecordedEvent_start = new DateTime($result_recordedEvent_vehicle_Start);
$result_recordedEvent_vehicle_End=$result_recordedEvent_vehicle[$i]->End;
$date_RecordedEvent_end = new DateTime($result_recordedEvent_vehicle_End);
$result_recordedEvent_vehicle_RecordedDateTime=$result_recordedEvent_vehicle[$i]->RecordedDateTime;
$date_RecordedEvent_DateTime = new DateTime($result_recordedEvent_vehicle_RecordedDateTime);
$result_recordedEvent_vehicle_StartOdo=$result_recordedEvent_vehicle[$i]->StartOdo;
$result_recordedEvent_vehicle_EndOdo=$result_recordedEvent_vehicle[$i]->EndOdo;
$result_recordedEvent_vehicle_Odometer=$result_recordedEvent_vehicle[$i]->Odometer;
$result_recordedEvent_vehicle_StartGPSID=$result_recordedEvent_vehicle[$i]->StartGPSID;
$result_recordedEvent_vehicle_EndGPSID=$result_recordedEvent_vehicle[$i]->EndGPSID;
$result_recordedEvent_vehicle_TotalTime=$result_recordedEvent_vehicle[$i]->TotalTime;
$result_recordedEvent_vehicle_TotalOccurs=$result_recordedEvent_vehicle[$i]->TotalOccurs;
$result_recordedEvent_vehicle_Value=$result_recordedEvent_vehicle[$i]->Value;
$result_recordedEvent_vehicle_Litres=$result_recordedEvent_vehicle[$i]->Litres;
$result_recordedEvent_vehicle_F3Parameter=$result_recordedEvent_vehicle[$i]->F3Parameter;
$result_recordedEvent_vehicle_F3Value=$result_recordedEvent_vehicle[$i]->F3Value;

} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
print_r("ID.".$result_recordedEvent_vehicle_ID);
print "\t";
print_r("VehicleID.".$result_recordedEvent_vehicle_VehicleID);
print "\t";
print_r("EventID.".$result_recordedEvent_vehicle_EventID);
print "\t";
print_r("EventType.".$result_recordedEvent_vehicle_EventType);
print "\t";
print_r("StartSeq.".$result_recordedEvent_vehicle_StartSeq);
print "\t";
print_r("EndSeq.".$result_recordedEvent_vehicle_EndSeq);
print "\t";
print_r("DriverID.".$result_recordedEvent_vehicle_DriverID);
print "\t";
print_r("OriginalDriverID.".$result_recordedEvent_vehicle_OriginalDriverID);
print "\t";
print "Start.".$date_RecordedEvent_start->format('d/m/Y (H:i:s)');
print "\t";
print "End.".$date_RecordedEvent_end->format('d/m/Y (H:i:s)');
print "\t";
print "RecordedDateTime.".$date_RecordedEvent_DateTime->format('d/m/Y (H:i:s)');
print "\t";
print_r("StartOdo.".$result_recordedEvent_vehicle_StartOdo);
print "\t";
print_r("EndOdo.".$result_recordedEvent_vehicle_EndOdo);
print "\t";
print_r("Odometer.".$result_recordedEvent_vehicle_Odometer);
print "\t";
print_r("StartGPSID.".$result_recordedEvent_vehicle_StartGPSID);
print "\t";
print_r("EndGPSID.".$result_recordedEvent_vehicle_EndGPSID);
print "\t";
print_r("TotalTime.".$result_recordedEvent_vehicle_TotalTime);
print "\t";
print_r("TotalOccurs.".$result_recordedEvent_vehicle_TotalOccurs);
print "\t";
print_r("Value.".$result_recordedEvent_vehicle_Value);
print "\t";
print_r("Litres.".$result_recordedEvent_vehicle_Litres);
print "\t";
print_r("F3Parameter.".$result_recordedEvent_vehicle_F3Parameter);
print "\t";
print_r("F3Value.".$result_recordedEvent_vehicle_F3Value);
print "\t";
echo '<br>';
}

?>
