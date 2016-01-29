<?php
/* Este Sript es para la consulta de los  grupos de información de vehículos definidos en la organización*/
include("Soap_header_token_VehicleProcesses.php");
include('call_core_orgid.php');
try {
$param_vehicle_reporting_list=array("TokenHeader");
$response_vehicles_reporting_list =$VehicleProcessesWS->__soapCall('GetVehicleReportingGroupList',array($param_vehicle_reporting_list));
echo '<pre>';
//print_r($response_vehicles_reporting_list);
$Vehicle_report_list=$response_vehicles_reporting_list->GetVehicleReportingGroupListResult->VehicleReportingGroup;
for($i=0;$i<count($Vehicle_report_list);$i++){
$Vehicle_report_ID=$Vehicle_report_list[$i]->ID;
$Vehicle_report_Name=$Vehicle_report_list[$i]->Name;

print_r($Vehicle_report_ID);
print "\t";
print_r($Vehicle_report_Name);
echo '<br>';
}
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
?>
