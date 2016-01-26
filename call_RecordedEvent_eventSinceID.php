<?php
include("Soap_header_token_RecordedEnventProcesses.php");
include('call_core_orgid.php');
try {
$param_sinceEvent=array("ID"=>367527884,"EventDescriptionIDs"=>array("short"=>3));
$response_sinceEvent=$RecordedEventProcessesWS->__soapCall('GetEventsSinceID',array($param_sinceEvent));
echo '<pre>';
//print_r($response_sinceEvent);
$result_sinceEvent=$response_sinceEvent->GetEventsSinceIDResult->RecordedEvent;
for($i=0;$i<count($result_sinceEvent);$i++){
$result_recordedEvent_vehicle_ID=$result_sinceEvent[$i]->ID;
$result_recordedEvent_vehicle_VehicleID=$result_sinceEvent[$i]->VehicleID;
$result_recordedEvent_vehicle_EventID=$result_sinceEvent[$i]->EventID;
$result_recordedEvent_vehicle_EventType=$result_sinceEvent[$i]->EventType;
$result_recordedEvent_vehicle_StartSeq=$result_sinceEvent[$i]->StartSeq;
$result_recordedEvent_vehicle_EndSeq=$result_sinceEvent[$i]->EndSeq;
$result_recordedEvent_vehicle_DriverID=$result_sinceEvent[$i]->DriverID;
$result_recordedEvent_vehicle_OriginalDriverID=$result_sinceEvent[$i]->OriginalDriverID;
$result_recordedEvent_vehicle_Start=$result_sinceEvent[$i]->Start;
$date_RecordedEvent_start = new DateTime($result_recordedEvent_vehicle_Start);
$result_recordedEvent_vehicle_End=$result_sinceEvent[$i]->End;
$date_RecordedEvent_end = new DateTime($result_recordedEvent_vehicle_End);
$result_recordedEvent_vehicle_RecordedDateTime=$result_sinceEvent[$i]->RecordedDateTime;
$date_RecordedEvent_DateTime = new DateTime($result_recordedEvent_vehicle_RecordedDateTime);
$result_recordedEvent_vehicle_StartOdo=$result_sinceEvent[$i]->StartOdo;
$result_recordedEvent_vehicle_EndOdo=$result_sinceEvent[$i]->EndOdo;
$result_recordedEvent_vehicle_Odometer=$result_sinceEvent[$i]->Odometer;
$result_recordedEvent_vehicle_StartGPSID=$result_sinceEvent[$i]->StartGPSID;
$result_recordedEvent_vehicle_EndGPSID=$result_sinceEvent[$i]->EndGPSID;
$result_recordedEvent_vehicle_TotalTime=$result_sinceEvent[$i]->TotalTime;
$result_recordedEvent_vehicle_TotalOccurs=$result_sinceEvent[$i]->TotalOccurs;
$result_recordedEvent_vehicle_Value=$result_sinceEvent[$i]->Value;
$result_recordedEvent_vehicle_Litres=$result_sinceEvent[$i]->Litres;
$result_recordedEvent_vehicle_F3Parameter=$result_sinceEvent[$i]->F3Parameter;
$result_recordedEvent_vehicle_F3Value=$result_sinceEvent[$i]->F3Value;

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