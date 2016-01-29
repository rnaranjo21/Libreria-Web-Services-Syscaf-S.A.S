<?php
include("Soap_header_token_RecordedEnventProcesses.php");
include('call_core_orgid.php');
try {
$param_EventID=array("StartID"=>367527884,"EndID"=>367527887,"EventDescriptionIDs"=>array("short"=>6));
$response_EventID=$RecordedEventProcessesWS->__soapCall('GetEventsInIDRange',array($param_EventID));
echo '<pre>';
//print_r($response_EventID);
$result_EventID=$response_EventID->GetEventsInIDRangeResult->RecordedEvent;
for($i=0;$i<count($result_EventID);$i++){
$result_recordedEvent_vehicle_ID=$result_EventID[$i]->ID;
$result_recordedEvent_vehicle_VehicleID=$result_EventID[$i]->VehicleID;
$result_recordedEvent_vehicle_EventID=$result_EventID[$i]->EventID;
$result_recordedEvent_vehicle_EventType=$result_EventID[$i]->EventType;
$result_recordedEvent_vehicle_StartSeq=$result_EventID[$i]->StartSeq;
$result_recordedEvent_vehicle_EndSeq=$result_EventID[$i]->EndSeq;
$result_recordedEvent_vehicle_DriverID=$result_EventID[$i]->DriverID;
$result_recordedEvent_vehicle_OriginalDriverID=$result_EventID[$i]->OriginalDriverID;
$result_recordedEvent_vehicle_Start=$result_EventID[$i]->Start;
$date_RecordedEvent_start = new DateTime($result_recordedEvent_vehicle_Start);
$result_recordedEvent_vehicle_End=$result_EventID[$i]->End;
$date_RecordedEvent_end = new DateTime($result_recordedEvent_vehicle_End);
$result_recordedEvent_vehicle_RecordedDateTime=$result_EventID[$i]->RecordedDateTime;
$date_RecordedEvent_DateTime = new DateTime($result_recordedEvent_vehicle_RecordedDateTime);
$result_recordedEvent_vehicle_StartOdo=$result_EventID[$i]->StartOdo;
$result_recordedEvent_vehicle_EndOdo=$result_EventID[$i]->EndOdo;
$result_recordedEvent_vehicle_Odometer=$result_EventID[$i]->Odometer;
$result_recordedEvent_vehicle_StartGPSID=$result_EventID[$i]->StartGPSID;
$result_recordedEvent_vehicle_EndGPSID=$result_EventID[$i]->EndGPSID;
$result_recordedEvent_vehicle_TotalTime=$result_EventID[$i]->TotalTime;
$result_recordedEvent_vehicle_TotalOccurs=$result_EventID[$i]->TotalOccurs;
$result_recordedEvent_vehicle_Value=$result_EventID[$i]->Value;
$result_recordedEvent_vehicle_Litres=$result_EventID[$i]->Litres;
$result_recordedEvent_vehicle_F3Parameter=$result_EventID[$i]->F3Parameter;
$result_recordedEvent_vehicle_F3Value=$result_EventID[$i]->F3Value;


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
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
?>