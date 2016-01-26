<?php
include("Soap_header_token_EventDescriptionProcess.php");
include('call_core_orgid.php');
try {
$param_EventsList=array("TokenHeader");
$response_EventsList=$EventDescriptionProcessWS->__soapCall('GetEventsList',array($param_EventsList));
echo '<pre>';
//print_r($response_EventsList);
 $result_EventList=$response_EventsList->GetEventsListResult->EventDescription;
for ($i=0; $i <count($result_EventList) ; $i++) { 

$result_EventList_ID=$result_EventList[$i]->ID;
$result_EventList_Description=$result_EventList[$i]->Description;
$result_EventList_EventType=$result_EventList[$i]->EventType;
$result_EventList_InUse=$result_EventList[$i]->InUse;
$result_EventList_StartOdo=$result_EventList[$i]->StartOdo;
$result_EventList_StartPosition=$result_EventList[$i]->StartPosition;
$result_EventList_EndOdo=$result_EventList[$i]->EndOdo;
$result_EventList_EndPosition=$result_EventList[$i]->EndPosition;
$result_EventList_RecordF3Count=$result_EventList[$i]->RecordF3Count;
$result_EventList_UseWarningMessage=$result_EventList[$i]->UseWarningMessage;
$result_EventList_AvtivePosition=$result_EventList[$i]->AvtivePosition;
$result_EventList_RecordTime=$result_EventList[$i]->RecordTime;
$result_EventList_AlarmTime=$result_EventList[$i]->AlarmTime;
$result_EventList_RelayTime=$result_EventList[$i]->RelayTime;
$result_EventList_Relay2Time=$result_EventList[$i]->Relay2Time;
$result_EventList_CriticalTime=$result_EventList[$i]->CriticalTime;
$result_EventList_ActiveTime=$result_EventList[$i]->ActiveTime;
$result_EventList_ActiveEndTime=$result_EventList[$i]->ActiveEndTime;
$result_EventList_TrackTime=$result_EventList[$i]->TrackTime;
$result_EventList_TrackInterval=$result_EventList[$i]->TrackInterval;
$result_EventList_AlarmState=$result_EventList[$i]->AlarmState;
$result_EventList_RelayState=$result_EventList[$i]->RelayState;
$result_EventList_Relay2State=$result_EventList[$i]->Relay2State;
$result_EventList_SummaryType=$result_EventList[$i]->SummaryType;
$result_EventList_SummaryID=$result_EventList[$i]->SummaryID;
$result_EventList_Priority=$result_EventList[$i]->Priority;
$result_EventList_EventSaveID=$result_EventList[$i]->EventSaveID;
$result_EventList_Updated=$result_EventList[$i]->Updated;
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
print_r("ID.".$result_EventList_ID);
print "\t";
print_r("Description.".$result_EventList_Description);
print "\t";
print_r("EventType.".$result_EventList_EventType);
print "\t";
print_r("InUse.".$result_EventList_InUse);
print "\t";
print_r("StartOdo.".$result_EventList_StartOdo);
print "\t";
print_r("StartPosition.".$result_EventList_StartPosition);
print "\t";
print_r("EndOdo.".$result_EventList_EndOdo);
print "\t";
print_r("EndPosition.".$result_EventList_EndPosition);
print "\t";
print_r("RecordF3Count.".$result_EventList_RecordF3Count);
print "\t";
print_r("UseWarningMessage.".$result_EventList_UseWarningMessage);
print "\t";
print_r("AvtivePosition.".$result_EventList_AvtivePosition);
print "\t";
print_r("RecordTime.".$result_EventList_RecordTime);
print "\t";
print_r("AlarmTime.".$result_EventList_AlarmTime);
print "\t";
print_r("RelayTime.".$result_EventList_RelayTime);
print "\t";
print_r("Relay2Time.".$result_EventList_Relay2Time);
print "\t";
print_r("CriticalTime.".$result_EventList_CriticalTime);
print "\t";
print_r("ActiveTime.".$result_EventList_ActiveTime);
print "\t";
print_r("ActiveEndTime.".$result_EventList_ActiveEndTime);
print "\t";
print_r("TrackTime.".$result_EventList_TrackTime);
print "\t";
print_r("TrackInterval.".$result_EventList_TrackInterval);
print "\t";
print_r("AlarmState.".$result_EventList_AlarmState);
print "\t";
print_r("RelayState.".$result_EventList_RelayState);
print "\t";
print_r("Relay2State.".$result_EventList_Relay2State);
print "\t";
print_r("SummaryType.".$result_EventList_SummaryType);
print "\t";
print_r("SummaryID.".$result_EventList_SummaryID);
print "\t";
print_r("Priority.".$result_EventList_Priority);
print "\t";
print_r("EventSaveID.".$result_EventList_EventSaveID);
print "\t";
print_r("Updated.".$result_EventList_Updated);
print "\t";
echo '<br>';
}

?>