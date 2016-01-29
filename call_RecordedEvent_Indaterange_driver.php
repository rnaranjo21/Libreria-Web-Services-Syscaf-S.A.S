<?php
include("Soap_header_token_RecordedEnventProcesses.php");
include('call_core_orgid.php');
try {
$StartDateTime='2016-01-14T00:00:00';
$EndDateTime='2016-01-14T23:59:59';
$param_recordedEvent=array("DriverIDs"=>array("short"=>9603),"StartDateTime"=>$StartDateTime,"EndDateTime"=>$EndDateTime,"EventDescriptionIDs"=>array("short"=>6 ));
$response_recordedEvent=$RecordedEventProcessesWS->__soapCall('GetEventsInDateRangeForDrivers',array($param_recordedEvent));
echo '<pre>';
//print_r($response_recordedEvent);
$result_recordedEvent=$response_recordedEvent->GetEventsInDateRangeForDriversResult->RecordedEvent;
for($i=0;$i<count($result_recordedEvent);$i++){
$result_recordedEvent_ID=$result_recordedEvent[$i]->ID;
$result_recordedEvent_VehicleID=$result_recordedEvent[$i]->VehicleID;
$result_recordedEvent_EventID=$result_recordedEvent[$i]->EventID;
$result_recordedEvent_EventType=$result_recordedEvent[$i]->EventType;
$result_recordedEvent_StartSeq=$result_recordedEvent[$i]->StartSeq;
$result_recordedEvent_EndSeq=$result_recordedEvent[$i]->EndSeq;
$result_recordedEvent_DriverID=$result_recordedEvent[$i]->DriverID;
$result_recordedEvent_OriginalDriverID=$result_recordedEvent[$i]->OriginalDriverID;
$result_recordedEvent_Start=$result_recordedEvent[$i]->Start;
$date_RecordedEvent_start = new DateTime($result_recordedEvent_Start);
$result_recordedEvent_End=$result_recordedEvent[$i]->End;
$date_RecordedEvent_end = new DateTime($result_recordedEvent_End);
$result_recordedEvent_RecordedDateTime=$result_recordedEvent[$i]->RecordedDateTime;
$date_RecordedEvent_DateTime = new DateTime($result_recordedEvent_RecordedDateTime);
$result_recordedEvent_StartOdo=$result_recordedEvent[$i]->StartOdo;
$result_recordedEvent_EndOdo=$result_recordedEvent[$i]->EndOdo;
$result_recordedEvent_Odometer=$result_recordedEvent[$i]->Odometer;
$result_recordedEvent_StartGPSID=$result_recordedEvent[$i]->StartGPSID;
$result_recordedEvent_EndGPSID=$result_recordedEvent[$i]->EndGPSID;
$result_recordedEvent_TotalTime=$result_recordedEvent[$i]->TotalTime;
$result_recordedEvent_TotalOccurs=$result_recordedEvent[$i]->TotalOccurs;
$result_recordedEvent_Value=$result_recordedEvent[$i]->Value;
$result_recordedEvent_Litres=$result_recordedEvent[$i]->Litres;
$result_recordedEvent_F3Parameter=$result_recordedEvent[$i]->F3Parameter;
$result_recordedEvent_F3Value=$result_recordedEvent[$i]->F3Value;

print_r("ID.".$result_recordedEvent_ID);
print "\t";
print_r("VehicleID.".$result_recordedEvent_VehicleID);
print "\t";
print_r("EventID.".$result_recordedEvent_EventID);
print "\t";
print_r("EventType.".$result_recordedEvent_EventType);
print "\t";
print_r("StartSeq.".$result_recordedEvent_StartSeq);
print "\t";
print_r("EndSeq.".$result_recordedEvent_EndSeq);
print "\t";
print_r("DriverID.".$result_recordedEvent_DriverID);
print "\t";
print_r("OriginalDriverID.".$result_recordedEvent_OriginalDriverID);
print "\t";
print "Start.".$date_RecordedEvent_start->format('d/m/Y (H:i:s)');
print "\t";
print "End.".$date_RecordedEvent_end->format('d/m/Y (H:i:s)');
print "\t";
print "RecordedDateTime.".$date_RecordedEvent_DateTime->format('d/m/Y (H:i:s)');
print "\t";
print_r("StartOdo.".$result_recordedEvent_StartOdo);
print "\t";
print_r("EndOdo.".$result_recordedEvent_StartOdo);
print "\t";
print_r("Odometer.".$result_recordedEvent_Odometer);
print "\t";
print_r("StartGPSID.".$result_recordedEvent_StartGPSID);
print "\t";
print_r("EndGPSID.".$result_recordedEvent_EndGPSID);
print "\t";
print_r("TotalTime.".$result_recordedEvent_TotalTime);
print "\t";
print_r("TotalOccurs.".$result_recordedEvent_TotalOccurs);
print "\t";
print_r("Value.".$result_recordedEvent_Value);
print "\t";
print_r("Litres.".$result_recordedEvent_Litres);
print "\t";
print_r("F3Parameter.".$result_recordedEvent_F3Parameter);
print "\t";
print_r("F3Value.".$result_recordedEvent_F3Value);
print "\t";
echo '<br>';
}
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
?>