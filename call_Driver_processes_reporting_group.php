<?php
include("Soap_header_token_DriverProcesses.php");
include('call_core_orgid.php');
try {
$param_Driver_reporting_list=array("TokenHeader");
$response_Driver_reporting_list =$DriverProcessesWS ->__soapCall('GetDriverReportingGroupList',array($param_Driver_reporting_list));
echo '<pre>';
//print_r($response_Driver_reporting_list);
$Driver_reporting_list=$response_Driver_reporting_list->GetDriverReportingGroupListResult->DriverReportingGroup;
$Driver_reporting_GroupID=$Driver_reporting_list->GroupID;
$Driver_reporting_Name=$Driver_reporting_list->Name;
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
print_r("GroupID.".$Driver_reporting_GroupID);
print "\t";
print_r("Name.".$Driver_reporting_Name);
print "\t";
echo '<br>';
?>