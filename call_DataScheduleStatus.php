<?php
include("Soap_header_token_DataSchedule.php");
include('call_core_orgid.php');
try {
$param_ScheduleStatus=array("ScheduleID"=>11406);
$response_ScheduleStatus =$DataScheduleWS ->__soapCall('GetScheduleStatus',array($param_ScheduleStatus));

echo '<pre>';
//print_r($response_ScheduleStatus);
$result_ScheduleStatus=$response_ScheduleStatus->GetScheduleStatusResult;
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
print_r("Status.".$result_ScheduleStatus);
print "\t";
?>