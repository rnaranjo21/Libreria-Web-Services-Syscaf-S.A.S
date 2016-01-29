<?php
include("Soap_header_token_VehicleProcesses.php");
include('call_core_orgid.php');
try {
$param_vehicle_reporting_ID=array("GroupID"=>28);
$response_vehicles_reporting_list =$VehicleProcessesWS->__soapCall('GetVehicleReportingGroup',array($param_vehicle_reporting_ID));
echo '<pre>';
//print_r($response_vehicles_reporting_list);

$Vehicle_report_Group_ID=$response_vehicles_reporting_list->GetVehicleReportingGroupResult->Vehicles->ReportingGroupMember;
for($i=0;$i<count($Vehicle_report_Group_ID);$i++){
$Vehicle_report_ID=$Vehicle_report_Group_ID[$i]->ID;
$Vehicle_report_DisplayName=$Vehicle_report_Group_ID[$i]->DisplayName;
$Vehicle_report_Site=$Vehicle_report_Group_ID[$i]->Site;

print_r($Vehicle_report_ID);
print "\t";
print_r($Vehicle_report_DisplayName);
print "\t";
print_r($Vehicle_report_Site);
echo '<br>';
}
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
?>