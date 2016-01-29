<?php
include("Soap_header_token_EventDescriptionProcess.php");
include('call_core_orgid.php');
try {

$param_InUseEventsForVehicleID=array("VehicleID"=>739);
$response_InUseEventsForVehicleID=$EventDescriptionProcessWS->__soapCall('GetInUseEventsForVehicleID',array($param_InUseEventsForVehicleID));
echo '<pre>';
//print_r($response_InUseEventsForVehicleID)

$result_InUseEventsForVehicleID=$response_InUseEventsForVehicleID->GetInUseEventsForVehicleIDResult->EventDescription;
for ($i=0; $i <count($result_InUseEventsForVehicleID) ; $i++) { 

$result_InUseEventsForVehicleID_ID=$result_InUseEventsForVehicleID[$i]->ID;
$result_InUseEventsForVehicleID_Description=$result_InUseEventsForVehicleID[$i]->Description;
$result_InUseEventsForVehicleID_EventType=$result_InUseEventsForVehicleID[$i]->EventType;
$result_InUseEventsForVehicleID_InUse=$result_InUseEventsForVehicleID[$i]->InUse;
$result_InUseEventsForVehicleID_StartOdo=$result_InUseEventsForVehicleID[$i]->StartOdo;
$result_InUseEventsForVehicleID_StartPosition=$result_InUseEventsForVehicleID[$i]->StartPosition;
$result_InUseEventsForVehicleID_EndOdo=$result_InUseEventsForVehicleID[$i]->EndOdo;
$result_InUseEventsForVehicleID_EndPosition=$result_InUseEventsForVehicleID[$i]->EndPosition;
$result_InUseEventsForVehicleID_RecordF3Count=$result_InUseEventsForVehicleID[$i]->RecordF3Count;
$result_InUseEventsForVehicleID_UseWarningMessage=$result_InUseEventsForVehicleID[$i]->UseWarningMessage;
$result_InUseEventsForVehicleID_AvtivePosition=$result_InUseEventsForVehicleID[$i]->AvtivePosition;
$result_InUseEventsForVehicleID_RecordTime=$result_InUseEventsForVehicleID[$i]->RecordTime;
$result_InUseEventsForVehicleID_AlarmTime=$result_InUseEventsForVehicleID[$i]->AlarmTime;
$result_InUseEventsForVehicleID_RelayTime=$result_InUseEventsForVehicleID[$i]->RelayTime;
$result_InUseEventsForVehicleID_Relay2Time=$result_InUseEventsForVehicleID[$i]->Relay2Time;
$result_InUseEventsForVehicleID_CriticalTime=$result_InUseEventsForVehicleID[$i]->CriticalTime;
$result_InUseEventsForVehicleID_ActiveTime=$result_InUseEventsForVehicleID[$i]->ActiveTime;
$result_InUseEventsForVehicleID_ActiveEndTime=$result_InUseEventsForVehicleID[$i]->ActiveEndTime;
$result_InUseEventsForVehicleID_TrackTime=$result_InUseEventsForVehicleID[$i]->TrackTime;
$result_InUseEventsForVehicleID_TrackInterval=$result_InUseEventsForVehicleID[$i]->TrackInterval;
$result_InUseEventsForVehicleID_AlarmState=$result_InUseEventsForVehicleID[$i]->AlarmState;
$result_InUseEventsForVehicleID_RelayState=$result_InUseEventsForVehicleID[$i]->RelayState;
$result_InUseEventsForVehicleID_Relay2State=$result_InUseEventsForVehicleID[$i]->Relay2State;
$result_InUseEventsForVehicleID_SummaryType=$result_InUseEventsForVehicleID[$i]->SummaryType;
$result_InUseEventsForVehicleID_SummaryID=$result_InUseEventsForVehicleID[$i]->SummaryID;
$result_InUseEventsForVehicleID_Priority=$result_InUseEventsForVehicleID[$i]->Priority;
$result_InUseEventsForVehicleID_EventSaveID=$result_InUseEventsForVehicleID[$i]->EventSaveID;
$result_InUseEventsForVehicleID_Updated=$result_InUseEventsForVehicleID[$i]->Updated;

print_r("ID.".$result_InUseEventsForVehicleID_ID);
print "\t";
print_r("Description.".$result_InUseEventsForVehicleID_Description);
print "\t";
print_r("EventType.".$result_InUseEventsForVehicleID_EventType);
print "\t";
print_r("InUse.".$result_InUseEventsForVehicleID_InUse);
print "\t";
print_r("StartOdo.".$result_InUseEventsForVehicleID_StartOdo);
print "\t";
print_r("StartPosition.".$result_InUseEventsForVehicleID_StartPosition);
print "\t";
print_r("EndOdo.".$result_InUseEventsForVehicleID_EndOdo);
print "\t";
print_r("EndPosition.".$result_InUseEventsForVehicleID_EndPosition);
print "\t";
print_r("RecordF3Count.".$result_InUseEventsForVehicleID_RecordF3Count);
print "\t";
print_r("UseWarningMessage.".$result_InUseEventsForVehicleID_UseWarningMessage);
print "\t";
print_r("AvtivePosition.".$result_InUseEventsForVehicleID_AvtivePosition);
print "\t";
print_r("RecordTime.".$result_InUseEventsForVehicleID_RecordTime);
print "\t";
print_r("AlarmTime.".$result_InUseEventsForVehicleID_AlarmTime);
print "\t";
print_r("RelayTime.".$result_InUseEventsForVehicleID_RelayTime);
print "\t";
print_r("Relay2Time.".$result_InUseEventsForVehicleID_Relay2Time);
print "\t";
print_r("CriticalTime.".$result_InUseEventsForVehicleID_CriticalTime);
print "\t";
print_r("ActiveTime.".$result_InUseEventsForVehicleID_ActiveTime);
print "\t";
print_r("ActiveEndTime.".$result_InUseEventsForVehicleID_ActiveEndTime);
print "\t";
print_r("TrackTime.".$result_InUseEventsForVehicleID_TrackTime);
print "\t";
print_r("TrackInterval.".$result_InUseEventsForVehicleID_TrackInterval);
print "\t";
print_r("AlarmState.".$result_InUseEventsForVehicleID_AlarmState);
print "\t";
print_r("RelayState.".$result_InUseEventsForVehicleID_RelayState);
print "\t";
print_r("Relay2State.".$result_InUseEventsForVehicleID_Relay2State);
print "\t";
print_r("SummaryType.".$result_InUseEventsForVehicleID_SummaryType);
print "\t";
print_r("SummaryID.".$result_InUseEventsForVehicleID_SummaryID);
print "\t";
print_r("Priority.".$result_InUseEventsForVehicleID_Priority);
print "\t";
print_r("EventSaveID.".$result_InUseEventsForVehicleID_EventSaveID);
print "\t";
print_r("Updated.".$result_InUseEventsForVehicleID_Updated);
print "\t";
echo '<br>';
}
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
?>